<h1>User List</h1>
 <button><a href="export">Export</a></button>
 <button><a href="pdf">Pdf</a></button>
 <br>
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
button {
  background-color:  #008CBA; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->phone}}</td>
        </tr>
        @endforeach
    </tbody>
</table>