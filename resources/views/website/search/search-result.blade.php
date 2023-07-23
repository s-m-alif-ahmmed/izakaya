
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/my_style.css">

    @section('title')
        Search
    @endsection

    <style>
        body
        {
            border: 15px solid #F50099;
        }
    </style>

</head>
<body>

    <div>
        <div class="container-fluid">
            <div class="row  mx-auto">
                <form action="{{ route('search.result') }}" method="GET" class="d-flex p-3">
                    @csrf
                    <div class="d-flex w-100">
                        <div class="input-group">
                            <input type="search" name="search" value="{{ Request::get('search') }}" id="search" placeholder="SEARCH STORE" class="form-control border-0 border-white" />
                        </div>
                        <a href="{{ route('home') }}" class="p-2 justify-content-end">
                            <i class="fa fa-2x fa-xmark text-black"></i>
                        </a>
                    </div>
                </form>
            </div>

            <div class="row mx-auto">
                <h1>Search Results</h1>
                @if($searchItems->isEmpty())
                    <p>No matching results found.</p>
                @else
                    <ul>
                        @foreach($searchItems as $item)
                            <li>
                                <h3>{{ $item->name }}</h3>
                                <p>{{ $item->description }}</p>
                                <p>Price: ${{ $item->price }}</p>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Pagination links -->
                    {{ $searchItems->appends(request()->input())->links('pagination::bootstrap-5') }}
                @endif
            </div>
        </div>

        <script src="{{asset('/')}}website/js/all.js"></script>
        <script src="{{asset('/')}}website/js/bootstrap.bundle.js"></script>
        <script src="{{asset('/')}}website/js/fontawesome.js"></script>

    </div>
</body>
</html>

