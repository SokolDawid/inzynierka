<!-- Page Header End -->
<div class="container-xxl py-5 page-header position-relative mb-5">
    <div class="container py-5">
        <h1 class="display-2 text-white animated slideInDown mb-4">{{ $page }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Strona główna</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">{{ $page }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->