@extends('website.master')

@section('title')

    Order Online

@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <h4 class="fw-bolder text-center py-5">Delivery Menu</h4>
                @foreach($items as $item)
                    <div class="card border-0 m-4 rounded-0 shadow-none" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset($item->image)}}" class="img-fluid rounded-0 w-100" alt="menu imgae" style="height: 220px;" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h6 class="d-flex">
                                        <a href="#" class="text-decoration-none text-muted">{{$item->name}}</a>
                                        <p class="text-muted">Tk. {{$item->price}}</p>
                                    </h6>
                                    <p class="card-text"><small class="text-body-secondary">{{$item->description}}</small></p>
                                    <a href="#" class="btn rounded-0">+ ADD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination-simple col-md-12 pt-5">
                    {{ $items->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

@endsection

