<!-- @extends(Auth::check() ? 'layouts.master' : 'layouts.layout') -->
@extends('layouts.layout')

@section('content')
<div class="container-fluid px-4">

@section('cardhead')
<div class="card-header">
        <i class="fas fa-table me-1"></i>
        Release a Folder
</div>
@endsection
        <form action="{{ route('issues.store') }}" method="POST">
            @csrf
         <div style="column-count: 2;">
          Name of Client: <br><input type="text" name="client_name" value="{{ old('client_name') }}" id="client_name">
          @error('client_name')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror


          <br><br> Serial Number: <br><input type="text" name="serial_number" value="{{ old('serial_number') }}" id="serial_number" maxlength="7">
          @error('serial_number')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror



         <br><br>  PGH Number: <br><input type="text" name="pgh" value="{{ old('pgh') }}" id="pgh" maxlength="7">
         @error('pgh')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror

         
         <br><br>
          NHIS:
           <br>
           <input list="no" name="nhis"  value="{{ old('nhis') }}" placeholder="Click to Select">
           <datalist id="no">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
           </datalist>

           @error('nhis')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror

         <br><br> Age: <br><input type="text" name="age" value="{{ old('age') }}" id="age">
         @error('age')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror



         <br><br>  
         Unit of admission: <br>
         <input list="unit" name="adm_unit" value="{{ old('adm_unit') }}" placeholder="Click to Select">
         <datalist id="unit">
                <option value="O.P.D">O.P.D</option>
                <option value="Maternity">Maternity</option>
                <option value="Emergency">Emergency</option>
                <option value="M.B.U">M.B.U</option>
                <option value="Children's Ward">Children's Ward</option>
                <option value="Male Ward">Male Ward</option>
                <option value="Female Ward">Female Ward</option>
                <option value="Attachment">Attachment</option>
                <option value="Other">Other</option>
         </datalist>
          @error('adm_unit')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror


        </div>
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
</div>