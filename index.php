<?php
require_once 'users/users.php';
$all_users = getAllUsers();

?>

<?php require_once 'partials/header.php'; ?>

<p>
    <a class='btn btn-success' href='create.php'>Create new User</a>
</p>
<table class='table'>
    <thead>
    <tr>
	<th scope='col'>#</th>
	<th scope='col'>Name</th>
	<th scope='col'>Email</th>
	<th scope='col'>Phone</th>
    </tr>
    </thead>
    <tbody>
	<?php
	foreach ($all_users as $user): ?>
    <tr>
<!--	<th scope='row'>--><?php //=$user['id']?><!--</th>-->
	<td><?=$user['name']?></td>
	<td><?=$user['email']?></td>
	<td><?=$user['phone']?></td>
		<?php
		endforeach ?>
    </tr>
    </tbody>
</table>

<?php require_once 'partials/footer.php'; ?>
