@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Welcom To Admin Panel</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->
                    <section class="admin-content">
                        <div class="left-content">
                            <h1>List of summery</h1>
                            <a class="btn btn-success btn-lg" href="#" role="button">Add New Post</a>
                        </div>
                        <div class="left-content">
                           <h1>This is right bar</h1>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection