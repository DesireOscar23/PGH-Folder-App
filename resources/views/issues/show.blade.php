@extends('layouts.layout')

@section('content')
<div class="container-fluid px-4">
@section('cardhead')

<div class="card-header">
        <i class="fas fa-table me-1"></i>
        Details of {{$issues['client_name']}}
</div>
@endsection
    <h5>
        Name: {{$issues['client_name']}}
    </h5>
    <ul>
        <h6>Serial Number: {{$issues['serial_number']}}</h6>
        <h6>PGH Number: {{$issues['pgh']}}</h6> 
        <h6>NHIS: {{$issues['nhis']}}</h6> 
        <h6>Age: {{$issues['age']}}</h6> 
        <h6>Unit of Admission: {{$issues['adm_unit']}}</h6> 
        <h6>Name of Staff: <b>{{$issues['staff_name']}}</b></h6> 
        <h6>Date: {{$issues['created_at']}}</h6>  
    </ul>


<div class="relative">
<div style="text-align: right;">
    <a href="{{ route('issues.edit', $issues) }}" class="btn btn-success">Edit</a>
</div> 
<!-- 
    <form action="{{ route('issues.destroy', $issues->id) }}" method="POST" id="delete">
        @csrf
        @method('DELETE')
        <div style="text-align: right;">
        <br><button type="submit" class="btn btn-danger" id="del">Delete</button>
        </div>
    </form>
</div>
<script>
    var issue, id;
     document.getElementById("del").addEventListener("click", function() {
    if (confirm("Are you sure you want to delete this record?")) {
        // Perform deletion action here
        // Example: Call a delete API, remove an element from the DOM, etc.
        {{ route('issues.destroy', $issues) }}
        console.log("Item deleted!");
    } else {
        console.log("Deletion canceled!");
    }
});
</script> -->

<form action="{{ route('issues.destroy', $issues->id) }}" method="POST" id="deleteForm">
    @csrf
    @method('DELETE')
    <div style="text-align: right;">
        <br><button type="submit" class="btn btn-danger" id="deleteButton">Delete</button>
    </div>
</form>
<script>
    document.getElementById("deleteForm").addEventListener("submit", function(event) {
        if (!confirm("Are you sure you want to delete this record?")) {
            event.preventDefault(); // Prevent the form from being submitted
            console.log("Deletion canceled!");
        } else {
            console.log("Item deleted!");
            // If confirmation is true, the form will be submitted as usual.
        }
    });
</script>


</div>
@endsection