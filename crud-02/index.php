<?php
include 'func.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
	<div class="modal-content shadow">
		<div class="modal-header">
	        <h5 class="modal-title">Створити повідомлення</h5>
	    </div>
	    <div class="modal-body">
	    	<form action="" method="post">
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="name" value="" placeholder="Імя">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="surname" value="" placeholder="Прізвище">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="email" value="" placeholder="emal">
	        	</div>
				<div class="form-group">
	        		<input type="text" class="form-control" name="message" value="" placeholder="Повідомлення">
	        	</div>
	    </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Відміінити</button>
	        <button type="submit" name="submit" class="btn btn-primary">Добавити</button>
	      </div>
	  		</form>
	    </div>
	<div class="container">
		<div class="row">
			<div class="col mt-1">
				<?=$success ?>
				<table class="table shadow ">
					<thead class="thead-dark">
						<tr>
							<th>№</th>
							<th>Імя</th>
							<th>Прізвище</th>
							<th>email</th>
							<th>Повідомлення</th>
						</tr>
						<?php foreach ($result as $value) { ?>
						<tr>
							<td><?=$value['id'] ?></td>
							<td><?=$value['name'] ?></td>
							<td><?=$value['surname'] ?></td>
							<td><?=$value['email'] ?></td>
							<td><?=$value['message'] ?></td>
							<td>
								<a href="?edit=<?=$value['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?=$value['id'] ?>"><i class="fa fa-edit"></i></a> 
								<a href="?delete=<?=$value['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?=$value['id'] ?>"><i class="fa fa-trash"></i></a>
								<?php require 'modal.php'; ?>
							</td>
						</tr> <?php } ?>
					</thead>
				</table>
			</div>
		</div>
	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
</body>
</html>