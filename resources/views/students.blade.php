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
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Dob</th>
      <th scope="col">Nrc</th>
      <th scope="col">Email</th>
      <th scope="col">Course</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->name }}</td>
      <td>{{ $post->dob }}</td>
      <td>{{ $post->nrc }}</td>
      <td>{{ $post->email }}</td>
      <td>{{ $post->course }}</td>
    </tr>
    @endforeach
  </tbody>
</table><br><hr>
<a href="/register"><button type="button" class="btn btn-primary">Back</button></a>
</div>
</body>
</html>