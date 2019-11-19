<div class="{{ request()->is('/', 'products', 'search') ? 'nav-menu bg transition' : 'dark-bg sticky-top'}}">
    <div class="container-fluid @if(request()->is('/', 'products', 'search')) fixed @endif">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}">Listing</a>
                </nav>
            </div>
        </div>
    </div>
</div>