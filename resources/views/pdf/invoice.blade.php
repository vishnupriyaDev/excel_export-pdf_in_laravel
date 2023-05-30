<h1>User List</h1>
<style>
   table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #555555;
  color: white;
}
h1{
    text-align: center;
    color: #555555;
}
</style>
<table style="width:100%">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['age']}}</td>
        <td>{{$user['phone']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>