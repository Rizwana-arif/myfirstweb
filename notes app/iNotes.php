<?php
$conn=mysqli_connect("localhost" , "root" , "" , "notes");
if($conn){
 // echo "connected";
}
else{
  echo "not connected";
}
// we also used $_server["REQUEST_METHOD"=="POST"] instead of $_POST['sub'] and can not need to hit the button name
// and used action in form tag like action="/CRUD"

if(isset($_POST['sub'])){
  $title=mysqli_real_escape_string($conn,$_POST['title']);
  $descrip=mysqli_real_escape_string($conn,$_POST['descrip']);
$sql="INSERT INTO `notes`(`title`, `descrip`) VALUES ('$title','$descrip')";
$run=mysqli_query($conn,$sql);
if($run){
  $msg= "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your note has been inserted successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
else{
  $msg="not inserted";
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <title>iNotes -Notes make easy</title>
   
  </head>
  <script>
    
  </script>
  <body>
    <!-- after edit appear form -->
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
  edit modal
</button> -->

<!-- Modal -->

    <!--form for details -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iNotes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php 
echo @$msg;
?>

<div class="container my-4">
    <form method="post">
        <h2>Add a Note</h2>
    <div class="form-group">
  <label for="title" >Note Title</label>
  <input type="text" class="form-control" id="title" name="title" >
</div>
<div class="form-group">
  <label for="description" class="form-label">Notes Description</label>
  <textarea class="form-control" id="descrip" name="descrip" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary my-3" name="sub">Add Note</button>
</form>
</div>
<div class="container">
<table class="display table table-bordered " id="example" border=1 cellspacing="10" cellpadding="10" >
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
  <?php 
$sql="SELECT * FROM `notes`";
$run=mysqli_query($conn,$sql);
while($fet=mysqli_fetch_assoc($run)){
?>
<tbody>
  <tr>
    <td><?php echo $fet['sno']; ?></td>
    <td><?php echo $fet['title']; ?></td>
    <td><?php echo $fet['descrip']; ?></td>
    <td><a  href="./notesupdate.php?sno=<?php echo $fet['sno'] ;?>">UPDATE</a><a>Delete</a></td>
  </tr>
</tbody>
<?php
  
  } 
  ?>
   </tbody>
   
   
</table>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    




  </body>
</html>