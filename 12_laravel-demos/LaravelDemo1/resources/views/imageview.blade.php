<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ url('/assets/styles.css') }}" />
  <title>Images</title>
</head>
<body>
  <img src="{{url('/assets/uhasselt.jpg')}}" alt="image" width="200px"/>
  <h1>Signup</h1>
  <form action="/image" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" accept="image/*">
    <button type="submit">Upload</button>
  </form>
  @foreach ($images as $img)
  <li>{{ $img->name }}</li>      
  @endforeach
  
</body>
</html>