
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>ROOMS</title>

</head>
<body>
<h1>ROOMS TABLE</h1>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Room ID</th>
      <th scope="col">Room Description</th>
      <th scope="col">Room Capacity</th>
      <th scope="col">Date From</th>
      <th scope="col">Date TO</th>
    </tr>
  </thead>
  @foreach ($rooms as $room)
  <tbody>  
    <tr>
      <td>{{$room->roomID}}</td>
      <td>{{$room->roomDescription}}</td>
      <td>{{$room->roomCapacity}}</td>
      <td>{{$room->dateFrom}}</td>
      <td>{{$room->dateTo}}</td>
    </tr>
    </tbody>
    @endforeach

</table>

</body>
</html>