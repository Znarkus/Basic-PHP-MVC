<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Basic PHP MVC Example</title>
	<base href="http://<?= $_SERVER['SERVER_NAME'] ?><?= dirname($_SERVER['PHP_SELF']) ?>/" />
</head>
<body>

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
	</tr>
	
	<? foreach ($result as $product): ?>
		<tr>
			<td><?= $product['id'] ?></td>
			<td>
				<a href="product/get/<?= $product['id'] ?>"><?= $product['name'] ?></a>
			</td>
		</tr>
	<? endforeach ?>
</table>

</body>
</html>