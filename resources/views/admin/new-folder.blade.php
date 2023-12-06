@extends('layouts.master')

@section('content')


@section('cardhead')
<div class="card-header">
        <i class="fas fa-table me-1"></i>
        Release a Folder
</div>
@endsection
        <form action="#" method="POST">
            @csrf
         <div style="column-count: 2;">
          Number of Folders: <br><input type="number" name="no_of_folders" value="{{ old('no_of_folders') }}" id="client_name">
            <div style="text-align: center;">
            <br><button type="submit" class="btn btn-primary">Save</button>
          </div>
         </div>
        </form>
@endsection