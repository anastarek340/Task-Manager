<?php
include('db.php');

if(isset($_GET['id'])){
    $id = intval($_GET['id']); 
    $result = mysqli_query($conn, "SELECT * FROM tasks WHERE id=$id");
    $row = mysqli_fetch_assoc($result);

   
    if(isset($_POST['update'])){
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        mysqli_query($conn, "UPDATE tasks SET name='$title' WHERE id=$id");
        header("Location: show.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
    <h2 class="mb-4 text-center">Update Task</h2>
    <form method="POST" class="row g-3 mb-4">
        <div class="col-md-8">
            <input type="text" name="title" class="form-control" value="<?php echo $row['name']; ?>" required>
        </div>
        <div class="col-md-4">
            <button type="submit" name="update" class="btn btn-success w-100">Update Task</button>
        </div>
    </form>
</div>

</body>
</html>
