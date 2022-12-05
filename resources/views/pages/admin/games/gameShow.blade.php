@extends('layouts.admin.index')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>All Game</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                    <li class="breadcrumb-item">Games</li>
                    <li class="breadcrumb-item active">All</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">View all games</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Downloads</th>
                                        <th scope="col">Votes</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $n = 1; ?>
                                    @foreach ($games as $game)
                                        <tr>
                                            <th scope="row">{{ $n }}</th>
                                            <td>{{ $game->title }}</td>
                                            <td>{{ $game->category }}</td>
                                            <td>{{ $game->downloads }}</td>
                                            <td>{{$game->votes}}</td>
                                            <td>
                                                <form action="" method="post" class="d-inline-block mr-5">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-secondary">Edit</button>
                                                </form>
                                                <form action="" method="post" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                            <?php $n++; ?>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
