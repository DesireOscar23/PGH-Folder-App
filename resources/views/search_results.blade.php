@extends(Auth::check() ? 'layouts.master' : 'layouts.layout')

@section('content')
@if($results->isEmpty())
    <h5>No results found</h5>
@else
<table>
    <thead>
        <tr>
            <th>Name of Client</th>
            <th>Serial Number</th>
            <th>PGH Number</th>
            <th>NHIS</th>
            <th>Age</th>
            <th>Unit of Admission</th>
            <th>Name of Staff</th>
        </tr>
    </thead>
        @foreach($results as $result)
        <tbody>
        <tr> 
            <td><a href="{{ route('issues.show', ['issue' => $result['id']])}}"> {{$result['client_name']}}</a></td>
            <td>{{$result['serial_number']}}</td>
            <td>{{$result['pgh']}}</td>
            <td>{{$result['nhis']}}</td>
            <td>{{$result['age']}}</td>
            <td>{{$result['adm_unit']}}</td>
            <td>{{$result['staff_name']}}</td>
        </tr>                                   <!-- Adjust to display relevant data -->
        @endforeach
        </tbody>
</table>
@endif
@endsection
