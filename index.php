<?php

include('classes/TaskManager.php');
$t1 = new TaskManager();

if(isset($_POST['save'])){
    $t1->addTask($_POST);
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, demo task manager</title>
</head>

<body>
    <div class="container shadow">
        <div class="row py-lg-4">
            <div class="col-8 offset-2">
                <h1 class="text-left text-info my-4">Task Manager</h1>
                <p class="'lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <hr>
        <div class="container">
            <div class="row py-lg-4">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="text-primary display-6">Task</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Task</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>PHP</td>
                                <td>22May 2023</td>
                                <td><button type="button" class="btn btn-sm btn-info">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                </td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>PHP</td>
                                <td>22May 2023</td>
                                <td><button type="button" class="btn btn-sm btn-info">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="Add__task container">
                <h2 class="text-primary display-6">Add Task</h2>
                <form action="" method="POST">
                    <div class="form-group mb-3">
                        <label for="AddTask">Add Task</label>
                        <input type="text" id="add_task" name="add_task" class="form-control" placeholder="Add Task">
                    </div>
                    <div class="form-group mb-3">
                        <label for="AddTask">Add Task</label>
                        <input type="date" id="add_date" name="add_date" class="form-control" placeholder="Add Task">
                    </div>

                    <button type="submit" id="ADD_task" class="btn btn-primary" name="save">Add Task</button>

                </form>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>


<!-- container shadow -->