<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Student Form</title>
</head>
<body>
<h1 class="bg-warning text-center">Student Registration Form</h1>

<form method="POST" action="studentdata.php" class="w-50 mx-auto pt-5" >
  
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Father Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="fname">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Fee</label>
    <input type="number" class="form-control" id="formGroupExampleInput2" name="fee">
  </div>

  <button class="btn btn-primary" type="submit">Submit</button>
  
  
</form>




    
</body>
</html>




