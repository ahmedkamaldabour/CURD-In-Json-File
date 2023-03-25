<?php
require_once 'users/users.php';
$new_user = $_POST;
if ($new_user) {
	createUser($new_user);
	header('Location: index.php');
}
?>
<?php
require_once 'partials/header.php'; ?>

<form method="post" action="">
    <div class='mb-3'>
	<label for='name' class='form-label'>Name</label>
	<input type='text' class='form-control' id='name' name="name" aria-describedby='emailHelp'>
    </div>
    <div class='mb-3'>
	<label for='exampleInputEmail1' class='form-label'>Email</label>
	<input type='email' class='form-control' id='exampleInputEmail1' name='email' aria-describedby='emailHelp'>
    </div>
    <div class='mb-3'>
	<label for='phone' class='form-label'>Phone</label>
	<input type='text' class='form-control' id='phone' name='phone' aria-describedby='emailHelp'>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require_once 'partials/footer.php'; ?>
