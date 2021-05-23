@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/forum/index.css') }}">

    <main>
        @if ($posts->isEmpty())
            <div class="container-fluid" id="header-forum">
                <div class="row">
                    <div class="col-3" id="add-post">
                        <button type="button" class="btn btn-link" onclick="window.location.href='/upload-forum'">
                            <div class="add-button"><i class="fas fa-plus" id="add-icon"></i>
                                <p id="add-text">
                                    Bagi Pengalaman Anda!
                                </p>
                            </div>
                        </button>
                    </div>
                    <div class="col" id="filter">
                        <div class="btn-group">
                            <button class="btn btn-link btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="add-button">
                                    <i class="fas fa-filter" id="filter-icon"></i>
                                    <p id="add-text">Filter</p>
                                </div>
                            </button>
                            <div class="dropdown-menu filter-menu">
                                <div class="row justify-content-start">
                                    <div class="col-4"><a class="dropdown-item" href="{{ url('/forum/filter/1') }}">Kanker
                                            Paru-Paru</a></div>
                                    <div class="col-4"><a class="dropdown-item" href="{{ url('/forum/filter/2') }}">Kanker
                                            Hati</a></div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-4"><a class="dropdown-item" href="{{ url('/forum/filter/3') }}">Kanker
                                            Darah</a></a></div>
                                    <div class="col-4"><a class="dropdown-item" href="{{ url('/forum/filter/4') }}">Kanker
                                            Usus Besar</a></div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-4"><a class="dropdown-item" style="color: #767676; font-size: 12px;"
                                            href="{{ url('/forum') }}">Hapus Filter</a></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="empty-forum">
                <h3>Belum ada pengalaman yang diunggah.</h3>
                <a href="/upload-forum">
                    <div class="share-empty">
                        <div class="add-button-empty"><i class="fas fa-plus" id="add-icon"></i></div>
                        <div class="empty-text">
                            <h3><b>Bagi Pengalaman?</b></h3>
                        </div>
                    </div>
                </a>
            </div>
        @else
            <div class="container-fluid" id="header-forum">
                <div class="row">
                    <div class="col-3" id="add-post">
                        <button type="button" class="btn btn-link" onclick="window.location.href='/upload-forum'">
                            <div class="add-button"><i class="fas fa-plus" id="add-icon"></i>
                                <p id="add-text">
                                    Bagi Pengalaman Anda!
                                </p>
                            </div>
                        </button>
                    </div>
                    <div class="col" id="filter">
                        <div class="btn-group">
                            <button class="btn btn-link btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="add-button">
                                    <i class="fas fa-filter" id="filter-icon"></i>
                                    <p id="add-text">Filter</p>
                                </div>
                            </button>
                            <div class="dropdown-menu filter-menu">
                                <div class="row justify-content-start">
                                    <div class="col-4"><a class="dropdown-item" href="{{ url('/forum/filter/1') }}">Kanker
                                            Paru-Paru</a></div>
                                    <div class="col-4"><a class="dropdown-item" href="{{ url('/forum/filter/2') }}">Kanker
                                            Hati</a></div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-4"><a class="dropdown-item" href="{{ url('/forum/filter/3') }}">Kanker
                                            Darah</a></a></div>
                                    <div class="col-4"><a class="dropdown-item" href="{{ url('/forum/filter/4') }}">Kanker
                                            Usus Besar</a></div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-4"><a class="dropdown-item" style="color: #767676; font-size: 12px;"
                                            href="{{ url('/forum') }}">Hapus Filter</a></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($posts as $post)
                    <div class="card w-100 forum-card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">
                            <div class="row">
                                <div class="forum-pic">
                                    <img src="{{ asset('storage' . $post->users->avatar) }}" class="avatar-forum">
                                </div>
                                <div class="col-10 forum-isi">
                                    <div class="user-and-type">
                                        <p id="user-forum">{{ $post->users->firstname . ' ' . $post->users->lastname }} |
                                        </p>
                                        <p id="type-forum"> {{ $post->getStatusAttribute() }}</p>
                                    </div>

                                    <h5 class="card-title" id="title-forum">{{ $post->title }}</h5>
                                </div>
                                <div class="col time-forum">
                                    <p class="card-text"><small
                                            class="text-muted">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small>
                                    </p>
                                </div>
                            </div>
                            <div class="forum-synopsis">
                                <p class="card-text truncate-synopsis" id="synopsis-forum">{{ $post->content }}</p>
                            </div>
                            </p>
                            <div class="btn-forum">
                                <a href="{{ url('/forum/posts') }}/{{ $post->postID }}"
                                    class="btn btn-primary btn-forum-next">Baca Selengkapnya</a>
                            </div>

                        </div>
                    </div>
                @endforeach
                <div id="pagination-forum">
                    {!! $posts->links() !!}
                </div>
            </div>
        @endif
    </main>

    <script>
        $('.dropdown-toggle').dropdown()

    </script>

@endsection
