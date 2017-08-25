<?php

$con = mysqli_connect("127.0.0.1:3306","root","","bd");

$sql = "select * from books";

$res = mysqli_query($con,$sql);

$data = mysqli_fetch_all($res);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>база данных</title>
</head>
<body>
	<table border="1">
		<caption>Таблица из базы данных</caption>
		<tbody>
			<tr>
				<th>Название</th>
				<th>Автор</th>
				<th>Год выпуска</th>
				<th>Жанр</th>
				<th>ISBN</th>
			</tr>
			<?php
			$n = 0;
			$v1 = [];
			foreach ($data as $v1) {
				?>
				<tr>
					<td><?=$v1[1]?></td>
					<td><?=$v1[2]?></td>
					<td><?=$v1[3]?></td>
					<td><?=$v1[4]?></td>
					<td><?=$v1[5]?></td>
				</tr>
				<?php
			}

			?>
		</tbody>
	</table>
</body>
</html>
