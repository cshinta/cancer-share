@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/forum/index.css') }}">

    <main>
        <div class="container-fluid" id="header-forum">
            <div class="row">
                <div class="col-3" id="add-post">
                    <button type="button" class="btn btn-link">
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
                            <div class="row">
                                <div class="col"><a class="dropdown-item" href="#">Kanker Paru-Paru</a></div>
                                <div class="col"><a class="dropdown-item" href="#">Kanker Hati</a></div>
                            </div>
                            <div class="row">
                                <div class="col"><a class="dropdown-item" href="#">Kanker Darah</a></a></div>
                                <div class="col"><a class="dropdown-item" href="#">Kanker Usus Besar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card w-100 forum-card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/profilAvatar.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <div class="user-and-type">
                                <p id="user-forum">Abi Aryaza | </p>
                                <p id="type-forum"> Kanker Paru-Paru</p>
                            </div>

                            <h5 class="card-title" id="title-forum">Kisah saya menghadapi aul</h5>
                        </div>
                        <div class="col time-forum">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="forum-synopsis">
                        <p class="card-text truncate-synopsis" id="synopsis-forum">Some quick example text to build on the
                            card title and make up the bulk of
                            the
                            card's content. Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the

                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's co</p>
                    </div>
                    </p>
                    <div class="btn-forum">
                        <a href="#" class="btn btn-primary btn-forum-next">Baca Selengkapnya</a>
                    </div>

                </div>
            </div>
            <div class="card w-100 forum-card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/profilAvatar.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <div class="user-and-type">
                                <p id="user-forum">Abi Aryaza | </p>
                                <p id="type-forum"> Kanker Paru-Paru</p>
                            </div>

                            <h5 class="card-title" id="title-forum">Kisah saya menghadapi aul</h5>
                        </div>
                        <div class="col time-forum">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="forum-synopsis">
                        <p class="card-text truncate-synopsis" id="synopsis-forum">Some quick example text to build on the
                            card title and make up the bulk of
                            the
                            card's content. Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the

                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's co</p>
                    </div>
                    </p>
                    <div class="btn-forum">
                        <a href="#" class="btn btn-primary btn-forum-next">Baca Selengkapnya</a>
                    </div>

                </div>
            </div>
            <div class="card w-100 forum-card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/profilAvatar.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <div class="user-and-type">
                                <p id="user-forum">Abi Aryaza | </p>
                                <p id="type-forum"> Kanker Paru-Paru</p>
                            </div>

                            <h5 class="card-title" id="title-forum">Kisah saya menghadapi aul</h5>
                        </div>
                        <div class="col time-forum">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="forum-synopsis">
                        <p class="card-text truncate-synopsis" id="synopsis-forum">Some quick example text to build on the
                            card title and make up the bulk of
                            the
                            card's content. Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the

                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's co</p>
                    </div>
                    </p>
                    <div class="btn-forum">
                        <a href="#" class="btn btn-primary btn-forum-next">Baca Selengkapnya</a>
                    </div>

                </div>
            </div>
            <div class="card w-100 forum-card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/profilAvatar.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <div class="user-and-type">
                                <p id="user-forum">Abi Aryaza | </p>
                                <p id="type-forum"> Kanker Paru-Paru</p>
                            </div>

                            <h5 class="card-title" id="title-forum">Kisah saya menghadapi aul</h5>
                        </div>
                        <div class="col time-forum">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="forum-synopsis">
                        <p class="card-text truncate-synopsis" id="synopsis-forum">Some quick example text to build on the
                            card title and make up the bulk of
                            the
                            card's content. Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the

                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's co</p>
                    </div>
                    </p>
                    <div class="btn-forum">
                        <a href="#" class="btn btn-primary btn-forum-next">Baca Selengkapnya</a>
                    </div>

                </div>
            </div>
            <div class="card w-100 forum-card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/profilAvatar.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <div class="user-and-type">
                                <p id="user-forum">Abi Aryaza | </p>
                                <p id="type-forum"> Kanker Paru-Paru</p>
                            </div>

                            <h5 class="card-title" id="title-forum">Kisah saya menghadapi aul</h5>
                        </div>
                        <div class="col time-forum">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="forum-synopsis">
                        <p class="card-text truncate-synopsis" id="synopsis-forum">Some quick example text to build on the
                            card title and make up the bulk of
                            the
                            card's content. Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the

                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's co</p>
                    </div>
                    </p>
                    <div class="btn-forum">
                        <a href="#" class="btn btn-primary btn-forum-next">Baca Selengkapnya</a>
                    </div>

                </div>
            </div>
            <div class="card w-100 forum-card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/profilAvatar.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <div class="user-and-type">
                                <p id="user-forum">Abi Aryaza | </p>
                                <p id="type-forum"> Kanker Paru-Paru</p>
                            </div>

                            <h5 class="card-title" id="title-forum">Kisah saya menghadapi aul</h5>
                        </div>
                        <div class="col time-forum">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="forum-synopsis">
                        <p class="card-text truncate-synopsis" id="synopsis-forum">Some quick example text to build on the
                            card title and make up the bulk of
                            the
                            card's content. Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the

                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's co</p>
                    </div>
                    </p>
                    <div class="btn-forum">
                        <a href="#" class="btn btn-primary btn-forum-next">Baca Selengkapnya</a>
                    </div>

                </div>
            </div>

            <div class="card w-100 forum-card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/profilAvatar.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <div class="user-and-type">
                                <p id="user-forum">Abi Aryaza | </p>
                                <p id="type-forum"> Kanker Paru-Paru</p>
                            </div>

                            <h5 class="card-title" id="title-forum">Kisah saya menghadapi aul</h5>
                        </div>
                        <div class="col time-forum">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="forum-synopsis">
                        <p class="card-text truncate-synopsis" id="synopsis-forum">Some quick example text to build on the
                            card title and make up the bulk of
                            the
                            card's content. Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the

                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's co</p>
                    </div>
                    </p>
                    <div class="btn-forum">
                        <a href="#" class="btn btn-primary btn-forum-next">Baca Selengkapnya</a>
                    </div>

                </div>
            </div>
            <div class="card w-100 forum-card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/profilAvatar.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <div class="user-and-type">
                                <p id="user-forum">Abi Aryaza | </p>
                                <p id="type-forum"> Kanker Paru-Paru</p>
                            </div>

                            <h5 class="card-title" id="title-forum">Kisah saya menghadapi aul</h5>
                        </div>
                        <div class="col time-forum">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="forum-synopsis">
                        <p class="card-text truncate-synopsis" id="synopsis-forum">Some quick example text to build on the
                            card title and make up the bulk of
                            the
                            card's content. Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the

                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's co</p>
                    </div>
                    </p>
                    <div class="btn-forum">
                        <a href="#" class="btn btn-primary btn-forum-next">Baca Selengkapnya</a>
                    </div>

                </div>
            </div>
            <div class="card w-100 forum-card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="row">
                        <div class="forum-pic">
                            <img src="{{ asset('img/profilAvatar.png') }}" class="avatar-forum">
                        </div>
                        <div class="col-10 forum-isi">
                            <div class="user-and-type">
                                <p id="user-forum">Abi Aryaza | </p>
                                <p id="type-forum"> Kanker Paru-Paru</p>
                            </div>

                            <h5 class="card-title" id="title-forum">Kisah saya menghadapi aul</h5>
                        </div>
                        <div class="col time-forum">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="forum-synopsis">
                        <p class="card-text truncate-synopsis" id="synopsis-forum">Some quick example text to build on the
                            card title and make up the bulk of
                            the
                            card's content. Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the

                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.Some quick example text to build on the card title and make up the bulk of
                            the
                            card's co</p>
                    </div>
                    </p>
                    <div class="btn-forum">
                        <a href="#" class="btn btn-primary btn-forum-next">Baca Selengkapnya</a>
                    </div>

                </div>
            </div>
            <div id="pagination-forum">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Kembali</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Selanjutnya</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <script>
        $('.dropdown-toggle').dropdown()

    </script>

@endsection
