<!DOCTYPE html>
<html>
<body>

<h1>Show File-select Fields</h1>

<h3>Show a file-select field which allows only one file to be chosen:</h3>
<form action="{{route('user')}}" method="post" enctype="multipart/form-data">
  @csrf
  <label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="myfile"><br><br>

  <button type="submit"  value="Submit">import</button>
</form>

<br>
  <button  ><a href="">export</a></button>
</form>

</body>
</html>
