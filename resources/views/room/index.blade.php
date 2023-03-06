@include("partials.header")
@include("partials.navigation")
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
@include("partials.footer")

