@if($errors->any())
    <div class="alert alert-danger text-danger">
        <ul class="list-group">
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    </div>
@endif