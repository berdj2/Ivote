@extends('layouts.app')
  
@section('title', 'Edit Voter')
  
@section('contents')
    <h1 class="mb-0">Edit Voter</h1>
    <hr />
    <form action="{{ route('Voters.update', $Voter->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">candidate</label>
                <input type="text" name="candidate" class="form-control" placeholder="candidate" value="{{ $Voter->candidate }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">BSN</label>
                <input type="text" name="BSN" class="form-control" placeholder="BSN" value="{{ $Voter->BSN }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Voter Code</label>
                <input type="text" name="Voter_code" class="form-control" placeholder="Voter Code" value="{{ $Voter->Voter_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $Voter->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection