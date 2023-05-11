<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>

<div class="container mt-5">
<div class="d-flex justify-content-end mb-3">
<a href="{{ route('data.create') }}" class="btn btn-success">create new data</a>

</div>

<table class="table table-striped" >
  <thead>
    <tr>
       <th scope="col">#</th>
       <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @for($i=0; $i< count($datas);  $i++)
     <tr>
      <td>{{$i+1}}</td>  
      <td>{{ $datas[$i]->name }}</td>
      <td>{{ $datas[$i]->description }}</td>
      <td> 
        <a href="{{ route('data.edit',$datas[$i]->id) }}" class="btn btn-outline-warning">edit</a>
        <form action="{{ route('data.destroy',$datas[$i]->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger">Delete</button>
            </form>
     </td>
     </tr>
    @endfor
    
  </tbody>
</table>
</div>

</body>
</html>