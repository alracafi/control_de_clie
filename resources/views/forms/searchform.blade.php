<form class="d-flex" action="{{ route('clientes.index') }}">
    @csrf
    <input class="form-control me-2 border border-danger" type="search" name="buscar">
    <button class="btn btn-outline-success" type="submit">{{__('buttons.search')}}</button>
</form>