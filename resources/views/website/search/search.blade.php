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

    <title>IzakayaBD</title>

    <style>
        body
        {
            border: 15px solid #F50099;
        }
    </style>

</head>
<body>
<div style="height: 850px;">

    <div class="container-fluid">
        <div class="row mx-auto">
            <div class="col-md-12">
                <form action="{{ route('search.result') }}" method="GET" class="d-flex p-3">
                    @csrf
                    <div class="d-flex w-100">
                        <div class="input-group">
                            <input type="search" name="search" value="{{ Request::get('search') }}" id="search" placeholder="SEARCH STORE" class="form-control border-0 border-white"  />
                        </div>
                        <a href="{{ route('home') }}" class="p-2 justify-content-end">
                            <i class="fa fa-2x fa-xmark text-black"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <p class="text-center fs-3 py-5">{{session('message')}}</p>

    <script src="{{asset('/')}}website/js/all.js"></script>
    <script src="{{asset('/')}}website/js/bootstrap.bundle.js"></script>
    <script src="{{asset('/')}}website/js/fontawesome.js"></script>

</div>
</body>
</html>
