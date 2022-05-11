
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
    <link rel="stylesheet" href="{{ asset('css/addHome.css') }}">

</head>

<body>
    @include('layouts.navbar')
    <div class="container text-center">
        <h1>Add Home </h1>
        <form action="/addHome" method="POST">
            @csrf
            <input type="text" class="text_field" name="house_flat_number" placeholder="House/Flat Number"> <br><br>
            <input type="text" class="text_field" name="address_line1" placeholder="Address Line 1"> <br><br>
            <input type="text" class="text_field" name="address_line_2" placeholder="Address Line 2"> <br><br>
            <input type="text" class="text_field" name="area" placeholder="Area"> <br><br>
            <input type="text" class="text_field" name="city" placeholder="City"> <br><br>
            <input type="radio" id="opt1" name="buyORrent" value="buy">
            <label for="opt1">Buy</label>

            <input type="radio" id="opt2" name="buyORrent" value="rent">
            <label for="opt2">Rent</label><br><br>

            <input type="text" class="text_field" name="price" placeholder="Price"> <br><br>
            <input type="text" class="text_field" name="bhk" placeholder="BHK"> <br><br>
            <select class="selection form-select-sm mb-3" name="door_facing" aria-label="Default select example">
                <option selected>Select Door Facing</option>
                <option value="1">North</option>
                <option value="2">South</option>
                <option value="3">East</option>
                <option value="4">West</option>
            </select><br><br>
            <input class="btn btn-light btn-md" type="submit">
            <button class="btn btn-light btn-md">Cancel</button>
    </div>
</body>

</html>
