
<form action="{{ route('search') }}" method="GET" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
    <div class="input-group">
    <input type="text" name="query" placeholder="Search..." class="form-control" value="{{ old('query') }}">
    <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>
