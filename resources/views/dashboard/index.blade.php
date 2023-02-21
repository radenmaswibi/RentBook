@extends('layouts.main')

@section('title', 'dashboard')

    @section('content')
        <h5>Halo, Admin</h5>
        <div class="row my-5">
            <div class="col-lg-4">
                <div class="card-data book">
                    <div class="row">
                        <div class="col-lg-6">
                            <i class="bi bi-book-half"></i>
                        </div>
                        <div class="col-lg-6 flex-column d-flex justify-content-end align-items-end">
                            <div class="card-desc">
                                Book
                            </div>
                            <div class="card-count">
                                +999
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-data category">
                    <div class="row">
                        <div class="col-lg-6">
                            <i class="bi bi-book-half"></i>
                        </div>
                        <div class="col-lg-6 flex-column d-flex justify-content-end align-items-end">
                            <div class="card-desc">
                                Category
                            </div>
                            <div class="card-count">
                                15
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-data user">
                    <div class="row">
                        <div class="col-lg-6">
                            <i class="bi bi-book-half"></i>
                        </div>
                        <div class="col-lg-6 flex-column d-flex justify-content-end align-items-end">
                            <div class="card-desc">
                                User
                            </div>
                            <div class="card-count">
                                6
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection