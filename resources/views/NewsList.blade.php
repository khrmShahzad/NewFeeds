<table class="table">
  <thead>
    <tr>
      <th scope="col">News</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($news as $newfeed)
    <tr>
        <td>{{$newfeed->News}}</td>
        <td>
            <a href ="{{ url ('/edit/'.$newfeed->id) }}" class="btn btn-sm btn-warning">edit</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>