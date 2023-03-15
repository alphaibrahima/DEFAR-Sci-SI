


<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<form action="{{ route('index.search') }}" class="d-flex mr-3 ">

    <div class="form-group  ">

<input type="text" name="entretiens" class="form-control" value="{{ request()->entretiens ?? '' }}" />
    </div>

  <button type="submit" class="btn btn-info  h-10  ">
    <i class="fa fa-search " style="font-size:40px;color:white;margin-bottom:300px"></i>

</button>

</form>




</body>
</html>
