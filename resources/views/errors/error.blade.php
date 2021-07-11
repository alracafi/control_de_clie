@if ($errors->any())
<div class="alert alert-danger">
    <strong>¡Atencion!</strong> Hay errores.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif