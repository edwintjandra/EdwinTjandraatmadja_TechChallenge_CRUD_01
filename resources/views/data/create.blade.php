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
    <h1>Create new table</h1>
    <form action="{{ route('data.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">name: </label>
        <input type="text" class="form-control" id="name" name="name">
     </div>

     <div class="form-group">
        <label for="description">description: </label>
        <input type="text" class="form-control" id="description" name="description" >
     </div>
    
  
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>