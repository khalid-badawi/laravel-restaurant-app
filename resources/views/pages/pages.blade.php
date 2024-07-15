@extends('layouts.app')

@section('content')
    <div class="container justify-content-center custom-container">
        <div style="text-align: center;">
            <div class="main-text">Our Blog & Articles</div>
            <p>Delve into our wide array of insightful blogs and articles that explore a variety of topics. From industry
                trends to expert tips and personal stories, each piece is crafted to inform, inspire, and engage our
                readers. Join us on a journey of discovery and knowledge through our thoughtfully curated content.</p>
        </div>
        <div class="row mt-5">

            @foreach ($articles as $article)
                <div class="col-3 d-flex align-items-stretch mb-2">

                    <x-article-card title="{{ $article->title }}" imagePath="{{ $article->image }}"
                        postTime="{{ $article->created_at }}" />
                </div>
            @endforeach
        </div>
    </div>
    <nav class="mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item {{ $articles->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $articles->previousPageUrl() }}" tabindex="-1"
                    aria-disabled="true">Previous</a>
            </li>

            @foreach ($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $articles->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach

            <li class="page-item {{ !$articles->hasMorePages() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $articles->nextPageUrl() }}">Next</a>
            </li>
        </ul>
    </nav>
@endsection
@vite(['resources/css/pages/menu.css'])
