@extends('layouts.app')

@section('title', 'Feedback')

@section('contents')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h1 class="mb-0">Provide Feedback</h1>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('feedback.submit') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="name">Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Your Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Feedback Message:</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Submit Feedback</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection