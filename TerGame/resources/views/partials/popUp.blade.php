@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@elseif(session()->has('deleted'))
    <div class="alert alert-success">
        {{ session()->get('deleted') }}
    </div>
@endif
