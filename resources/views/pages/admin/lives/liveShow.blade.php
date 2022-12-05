@extends('layouts.admin.index')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>All User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                    <li class="breadcrumb-item">Live</li>
                    <li class="breadcrumb-item active">All</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">View all live</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">by User</th>
                                        <th scope="col">by Game</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $n = 1; ?>
                                    @foreach ($lives as $live)
                                        <tr>
                                            <th scope="row">{{ $n }}</th>
                                            <td>{{ $live->title }}</td>
                                            <td>User</td>
                                            <td>Game</td>
                                            <td>
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
