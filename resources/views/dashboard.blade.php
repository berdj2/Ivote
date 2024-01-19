@extends('layouts.app')

@section('title', 'iVote Dashboard')

@section('contents')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h1 class="mb-0">Welcome to iVote</h1>
                    </div>

                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            <strong>Congratulations!</strong> You are now a registered voter on iVote.
                        </div>

                        <p class="lead">Thank you for joining iVote, your platform for making your voice heard.</p>

                        <p class="text-muted">Explore the available voting options and participate in shaping the future.</p>

                        <div class="text-center mt-4">
                            <a href="{{ route('Voters.create') }}" class="btn btn-lg btn-primary">Start Voting Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            border: 2px solid #3498db;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            border-radius: 15px 15px 0 0;
            background-color: #3498db;
            color: #fff;
        }

        .card-body {
            border-radius: 0 0 15px 15px;
        }

        .alert {
            background-color: #2ecc71;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
    </style>
@endsection