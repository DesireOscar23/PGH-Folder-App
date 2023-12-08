@extends(Auth::check() ? 'layouts.master' : 'layouts.layout')

@section('content')
<div class="container-fluid px-4">

@section('cardhead')
<div class="card-header">
        <i class="fas fa-table me-1"></i>
        New Folders In
</div>
@endsection
        <form action="{{ route('folders.store') }}" method="POST">
            @csrf
        
            <br> Number of Folders: <br><input type="number" name="no_of_folders" value="{{ old('no_of_folders') }}" id="no_of_folders" maxlength="4">
            @error('serial_number')
            <div class="form-error">
                {{ $message }}
               </div>
               @enderror
            
               <br><br>
Name of Staff: <br><input type="text" name="staff_name" value="{{ Auth::user()->name }}" id="" readonly>
         @error('staff_name')
               <div class="form-error">
                   {{ $message }}
               </div>
           @enderror
         
          <div style="text-align: center;">
                <br><button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>


    </div>
@endsection