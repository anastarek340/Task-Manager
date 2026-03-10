<?php
include('db.php');
if(isset($_POST['add'])){
    $title = $_POST['title'];
    $insert = "INSERT INTO TASKS(NAME) VALUES ('$title')";
     $qu = mysqli_query($conn,$insert);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center">My To-Do List</h2>

    
    <form  method="POST" class="row g-3 mb-4">
        <div class="col-md-8">
            <input type="text" name="title" class="form-control" placeholder="Enter new task" required>
        </div>
        <div class="col-md-4">
            <button type="submit" name="add" class="btn btn-primary w-100">Add Task</button>
        </div>
    </form>


<?php
include('db.php');
$select = "select * from tasks";
$res = mysqli_query($conn,$select);
while ($row = mysqli_fetch_array($res)){
     echo"<ul class='list-group'>
    <li class='list-group-item d-flex justify-content-between align-items-center'>
        " . $row['name'] . "
        <div>
            <a href='update.php?id=" . $row['id'] . "'' class='btn btn-sm btn-warning me-2'>Edit</a>
            <a href='delete.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger'>Delete</a>
        </div>
    </li>
";
}
?>


 
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</body>
</html>