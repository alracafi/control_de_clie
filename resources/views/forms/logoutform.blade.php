<form class="d-flex" method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="form-control me-2 border border-danger" onclick="event.preventDefault();
                this.closest('form').submit();">{{ __('labels.logout') }}</button>
</form>