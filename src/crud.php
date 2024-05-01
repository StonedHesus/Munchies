<?php

require_once "./../../php/components/User.php";
require_once "./../../php/components/Database.php";

$crud_title  = User::getPanelName();
$table_heads = User::getFieldsName();
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Munchies | Admin's Crud View</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="./../../style/admin/crud.css" type="text/css" rel="stylesheet">
</head>

<body>

<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-6">
                        <h2>Manage <b><?php echo $crud_title?></b></h2>
                    </div>
                    <div class="col-xs-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                        </span>
                    </th>
                    <th><?php echo $table_heads[0]?></th>
                    <th><?php echo $table_heads[1]?></th>
                    <th><?php echo $table_heads[2]?></th>
                    <th><?php echo $table_heads[3]?></th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                <?php

                $users = User::getAllUsers();


                if ($users->rowCount() > 0) {
                    // output data of each row
                    while($row = $users->fetch()) {

                        $firstName = $row['firstName'];
                        $lastName  = $row['lastName'];
                        $username  = $row['username'];
                        $email     = $row['email'];

                        print <<< end

            <tr>
				<td>
					<span class="custom-checkbox">
						<input type="checkbox" id="checkbox1" name="options[]" value="1">
							<label for="checkbox1"></label>
					</span>
				</td>
				
				<td>$firstName</td>
				<td>$lastName</td>
				<td>$username</td>
				<td>$email</td>
				<td>
					<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
					<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
				</td>
			</tr>
            
end;

                    }
                }


                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Edit <?php echo $crud_title?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>FirstName</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>LastName</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="get">
                <div class="modal-header">
                    <h4 class="modal-title">Delete <?php echo $crud_title?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>

<?php

?>


</body>
</html>