session_start();

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

// Generate two random numbers
$num1 = mt_rand(1, 9);
$num2 = mt_rand(1, 9);

// Store the answer in session
$_SESSION['captcha_answer'] = $num1 + $num2;

// Create the image
$width = 60;
$height = 30;
$image = imagecreatetruecolor($width, $height);

// Colors
$bg = imagecolorallocate($image, 255, 255, 255); // White background
$fg = imagecolorallocate($image, 0, 0, 0);       // Black text
$line_color = imagecolorallocate($image, 200, 200, 200); // Gray lines for noise

// Fill background
imagefilledrectangle($image, 0, 0, $width, $height, $bg);

// Add some noise (lines)
for ($i = 0; $i < 3; $i++) {
    imageline($image, 0, rand(0, $height), $width, rand(0, $height), $line_color);
}

// Add the math problem text
$text = "$num1 + $num2";
// Using internal font 5 (large)
$font = 5;
$text_width = imagefontwidth($font) * strlen($text);
$text_height = imagefontheight($font);
$x = ($width - $text_width) / 2;
$y = ($height - $text_height) / 2;

imagestring($image, $font, $x, $y, $text, $fg);

// Output the image
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>
