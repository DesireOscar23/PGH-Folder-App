@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">
@section('cardhead')

<div class="card-header">
        <i class="fas fa-table me-1"></i>
        Users
</div>
@endsection
<div>
    
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Delete</th>          
        </tr>
    </thead>
 @foreach ($users as $user)    
        <tbody>
        <tr> 
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['created_at']}}</td>
            <td>
            <form action="{{ route('users.destroy', ['user_id' => $user->id]) }}" method="POST" id="deleteForm">
    @csrf
    @method('DELETE')
    <div style="text-align: right;">
       <button type="submit" class="btn btn-danger" id="deleteButton">Delete</button>
    </div>
</form></td>
        </tr>
    @endforeach
    </tbody>
</table>
   
        <br>
  
</div>
</div>

<script>
    document.DELETEElementById("deleteForm").addEventListener("submit", function(event) {
        if (!confirm("Are you sure you want to delete this record?")) {
            event.preventDefault(); // Prevent the form from being submitted
            console.log("Deletion canceled!");
        } else {
            console.log("Item deleted!");
            // If confirmation is true, the form will be submitted as usual.
        }
    });
</script>


@endsection