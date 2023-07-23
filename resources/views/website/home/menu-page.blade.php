@extends('website.master')

@section('title')

    Menu Page

@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                    <h4 class="fw-bolder text-center py-5">{{$item->category->name}}</h4>
                    <div class="card mb-3 border-0 shadow-none" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <a href="{{route('detail',$item->id)}}">
                                    <img src="{{asset($item->image)}}" class="img-fluid rounded-0 w-100" alt="menu imgae" style="height: 220px;" />
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h6 class="d-flex">
                                        <a href="{{route('detail',$item->id)}}" class="text-decoration-none text-muted">{{$item->name}}</a>
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
