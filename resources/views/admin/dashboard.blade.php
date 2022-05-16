<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
        initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/adminDashboard.css') }}">
</head>

<body>

{{-- cards --}}
@include('layouts.navbar')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="margin-top:18%;">
            <div class="col-lg-2 mb-4">
                <div class="card border-0">
                    <img class="card-img-top" src="{{ url('add_home_icon.png') }}" alt="add home">

                    <div class="card-body">
                        <a href="http://127.0.0.1:8000/homie" class="btn btn-light btn-md">
                            Add Home
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-4">
                <div class="card border-0">
                    <img class="card-img-top" src="{{ url('show_inquiry_icon.png') }}" alt="show inquiry">

                    <div class="card-body">
                        <a href="#" class="btn btn-light btn-md">
                            Show Inquiries
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


