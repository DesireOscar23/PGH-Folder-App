@extends(Auth::check() ? 'layouts.master' : 'layouts.layout')

@section('content')
<div class="container-fluid px-4">
@section('cardhead')

<div class="card-header">
        <i class="fas fa-table me-1"></i>
        Folders Received
</div>
@endsection
<div>
    @if (count($folders) > 0)
<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Number of Folders</th>
            <th>Staff</th>
                     
        </tr>
    </thead>
 @foreach ($folders as $folder)    
        <tbody>
        <tr> 
             <td>{{$folder['created_at']}}</td>
            <td>{{$folder['no_of_folders']}}</td>
            <td>{{$folder['staff_name']}}</td>
        </tr>
            @endforeach
            <!-- <tr>
                <td>Total</td>
                <td>100</td>
            </tr> -->
        </tbody>
</table>
    @else
        <br>
        <h2>No folder has been received as yet.</h2>
        @endif
        <br>
</div>
</div>
@endsection