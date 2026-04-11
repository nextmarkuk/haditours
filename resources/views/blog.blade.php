@extends('layouts.master')
@section('meta')
    <title>Blog | Hadi Tours</title>
    <meta name="description" content="Read the latest updates and guides about Hajj and Umrah.">
@endsection
@section('content')
    <div class="pkg-header-top text-center">
        <div class="container">
            <h1>Our Blog</h1>
            <p class="lead text-muted">Latest news, guides, and updates for your spiritual journey</p>
        </div>
    </div>

    <section class="main-content-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Blog Item 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm h-100">
                                <img src="{{ asset('assets/blog/6.png') }}" class="card-img-top"
                                    style="width: 100%; height: 220px;" alt="When Will Umrah Reopen After Hajj 2026?">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold mb-3" style="font-size: 1.25rem;">When Will Umrah
                                        Reopen After Hajj 2026? Complete Guide</h4>
                                    <p class="card-text text-muted">Find out when Umrah will reopen after Hajj 2026. Get
                                        latest visa updates, expected reopening date...</p>
                                </div>
                                <div class="card-footer bg-white border-top-0 pt-0">
                                    <a href="{{ route('blogDetail', ['slug' => 'when-will-umrah-reopen-after-hajj-2026']) }}"
                                        class="btn btn-primary btn-sm">Read More <i class="fa fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Blog Item 1 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection