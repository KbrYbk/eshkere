@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <!--колонка с лого-->
                            <div class="card-header">
                                <img src="/public/img/logo.png" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <!--колонка с девизом-->
                            <div class="card-body">
                                Для тех кто привык побеждать!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($prod as $pp)
                    @if ($loop->first)<!--если активен-->
                        <div class="carousel-item active">
                            @else<!--если не активен-->
                        <div class="carousel-item">
                            @endif
                                <img src="{{ $pp->img }}" class="d-block w-100 carousel-img" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>{{ $pp->name }}</h1>
                                </div>
                        </div>
                    @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
