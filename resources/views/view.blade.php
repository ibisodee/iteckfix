<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 Crud Tutorial</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Laravel 5.8 Crud Tutorial</h3>
     <br />
     <div class="jumbotron text-center">
    <div align="right">
    <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
    </div>
    <br />
    <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
    <h3>Gender - {{ $data->gender }} </h3>    
    </div>
    </div>
 </body>
</html>