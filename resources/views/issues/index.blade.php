@extends(Auth::check() ? 'layouts.master' : 'layouts.layout')

@section('content')
<div class="container-fluid px-4">
@section('cardhead')

<div class="card-header">
        <i class="fas fa-table me-1"></i>
        Patient List
</div>
@endsection
<div>
    @if (count($issues) > 0)
<table>
    <thead>
        <tr>
            <th>Name of Client</th>
            <th>PGH Number</th>
            <th>Age</th>
            <th>Unit of Admission</th>          
        </tr>
    </thead>
 @foreach ($issues as $issue)    
        <tbody>
        <tr> 
            <td><a href="{{ route('issues.show', ['issue' => $issue['id']])}}"> {{$issue['client_name']}}</a></td>
            <td>{{$issue['pgh']}}</td>
            <td>{{$issue['age']}}</td>
            <td>{{$issue['adm_unit']}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
    @else
        <br>
        <h2>No folder has been issued as yet.</h2>
        @endif
        <br>
   <!-- 
     <div>
        <a href="{{ route('issues.create') }}" class="btn btn-primary">Release a folder</a>
    </div> -->
</div>
</div>


@endsection