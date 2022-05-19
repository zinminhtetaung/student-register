<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<div class="container">
<form action="/register" method="post">
@csrf
  <div class="form-group">
  <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    
    <label for="exampleInputEmail1">DOB</label>
    <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    <label for="exampleInputEmail1">NRC</label>
    <input type="text" name="nrc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter NRC">
    
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
    <label for="exampleInputEmail1">Course</label>
    <input type="text" name="course" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button><br><hr>
  <button type="button" class="btn btn-link"><a href="/students">View Student List</a></button>
</form>
</div>
    
</body>
</html>