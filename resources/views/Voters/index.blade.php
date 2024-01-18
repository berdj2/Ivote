@extends('layouts.app')
  
@section('title', 'Home Voter')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Vote</h1>
        <a href="{{ route('Voters.create') }}" class="btn btn-primary">Vote</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>candidate</th>
                <th>BNS</th>
                <th>Voter Code</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($Voter->count() > 0)
                @foreach($Voter as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->candidate }}</td>
                        <td class="align-middle">{{ $rs->BSN }}</td>
                        <td class="align-middle">{{ $rs->Voter_code }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('Voters.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Voter not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection