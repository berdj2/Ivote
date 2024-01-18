@extends('layouts.app')
  
@section('title', 'Create Voter')
  
@section('contents')
    <h1 class="mb-0">Add Voter</h1>
    <hr />
    <form action="{{ route('Voters.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="candidate" class="form-control" placeholder="candidate">
            </div>
            <div class="col">
                <input type="text" name="BSN" class="form-control" placeholder="BSN">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Voter_code" class="form-control" placeholder="Voter Code">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection