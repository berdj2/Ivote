@extends('layouts.app')
  
@section('title', 'Show Voter')
  
@section('contents')
    <h1 class="mb-0">Detail Voter</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">candidate</label>
            <input type="text" name="candidate" class="form-control" placeholder="candidate" value="{{ $Voter->candidate }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">BSN</label>
            <input type="text" name="BSN" class="form-control" placeholder="BSN" value="{{ $Voter->BSN }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Voter_code</label>
            <input type="text" name="Voter_code" class="form-control" placeholder="Voter Code" value="{{ $Voter->Voter_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $Voter->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $Voter->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $Voter->updated_at }}" readonly>
        </div>
    </div>
@endsection