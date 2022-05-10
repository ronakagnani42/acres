<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Home</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>

<body>
    <header> </header>
    <h1>Add Home </h1>
    <form action="/addHome" method="POST">
        @csrf
        <input type="text" name="house_flat_number" placeholder="House/Flat Number"> <br><br>
        <input type="text" name="address_line1" placeholder="Address Line 1"> <br><br>
        <input type="text" name="address_line_2" placeholder="Address Line 2"> <br><br>
        <input type="text" name="area" placeholder="Area"> <br><br>
        <input type="text" name="city" placeholder="City"> <br><br>
        <input type="radio" id="opt1" name="buyORrent" value="buy">
        <label for="opt1">Buy</label>

        <input type="radio" id="opt2" name="buyORrent" value="rent">
        <label for="opt2">Rent</label><br><br>

        <input type="text" name="price" placeholder="Price"> <br><br>
        <input type="text" name="bhk" placeholder="BHK"> <br><br>
        <select class="form-select-sm mb-3" name="door_facing" aria-label="Default select example">
            <option selected>Select Door Facing</option>
            <option value="1">North</option>
            <option value="2">South</option>
            <option value="3">East</option>
            <option value="4">West</option>
        </select><br><br>
        <input type="submit">

</body>

</html>
