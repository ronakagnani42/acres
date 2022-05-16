<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>acres</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/adminDashboard.css') }}">
</head>
<body>
    @if(isset($data))
    @foreach ($data as $value )
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">


            <p class="card-text">Address : {{$value->flat_number}} , {{$value->address_line1}},{{$value->address_line2}}, {{$value->area}}, {{$value->city}}</p>
            <p class="card-text">For : {{$value->buyORrent}}</p>
            <p class="card-text">Price : {{$value->price}}</p>
            <p class="card-text">BHK : {{$value->bhk}}</p>
            <p class="card-text">House Facing : {{$value->door_facing}}</p>
          <a href="#" class="btn btn-primary">Send Inquiry</a>
        </div>
      </div>
      <br>
      @endforeach

</body>
@endif
</html>
