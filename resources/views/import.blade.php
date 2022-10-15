<!DOCTYPE html>
<html>


<head>

</head>
<body>
    <form action="{{url('/import')}}" method="post" enctype="multipart/form-data">
        @csrf
   <input type="file" name="file" accept=".xlsx">
   <button type="submit">Uplode</button>
</form>
<a href="{{url('/export')}}">Export</a>
</body>
</html>