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
			<tr>
				<td><?php echo $data[0][1]; ?></td>
				<td><?php echo $data[0][2]; ?></td>
				<td><?php echo $data[0][3]; ?></td>
				<td><?php echo $data[0][5]; ?></td>
				<td><?php echo $data[0][4]; ?></td>
			</tr>
			<tr>
				<td><?php echo $data[1][1]; ?></td>
				<td><?php echo $data[1][2]; ?></td>
				<td><?php echo $data[1][3]; ?></td>
				<td><?php echo $data[1][5]; ?></td>
				<td><?php echo $data[1][4]; ?></td>
			</tr>
			<tr>
				<td><?php echo $data[2][1]; ?></td>
				<td><?php echo $data[2][2]; ?></td>
				<td><?php echo $data[2][3]; ?></td>
				<td><?php echo $data[2][5]; ?></td>
				<td><?php echo $data[2][4]; ?></td>
			</tr>
			<tr>
				<td><?php echo $data[3][1]; ?></td>
				<td><?php echo $data[3][2]; ?></td>
				<td><?php echo $data[3][3]; ?></td>
				<td><?php echo $data[3][5]; ?></td>
				<td><?php echo $data[3][4]; ?></td>
			</tr>
			<tr>
				<td><?php echo $data[4][1]; ?></td>
				<td><?php echo $data[4][2]; ?></td>
				<td><?php echo $data[4][3]; ?></td>
				<td><?php echo $data[4][5]; ?></td>
				<td><?php echo $data[4][4]; ?></td>
			</tr>
			<tr>
				<td><?php echo $data[5][1]; ?></td>
				<td><?php echo $data[5][2]; ?></td>
				<td><?php echo $data[5][3]; ?></td>
				<td><?php echo $data[5][5]; ?></td>
				<td><?php echo $data[5][4]; ?></td>
			</tr>
			<tr>
				<td><?php echo $data[6][1]; ?></td>
				<td><?php echo $data[6][2]; ?></td>
				<td><?php echo $data[6][3]; ?></td>
				<td><?php echo $data[6][5]; ?></td>
				<td><?php echo $data[6][4]; ?></td>
			</tr>
			<tr>
				<td><?php echo $data[7][1]; ?></td>
				<td><?php echo $data[7][2]; ?></td>
				<td><?php echo $data[7][3]; ?></td>
				<td><?php echo $data[7][5]; ?></td>
				<td><?php echo $data[7][4]; ?></td>
			</tr>
			<tr>
				<td><?php echo $data[8][1]; ?></td>
				<td><?php echo $data[8][2]; ?></td>
				<td><?php echo $data[8][3]; ?></td>
				<td><?php echo $data[8][5]; ?></td>
				<td><?php echo $data[8][4]; ?></td>
			</tr>
			<tr>
				<td><?php echo $data[9][1]; ?></td>
				<td><?php echo $data[9][2]; ?></td>
				<td><?php echo $data[9][3]; ?></td>
				<td><?php echo $data[9][5]; ?></td>
				<td><?php echo $data[9][4]; ?></td>
			</tr>
		</tbody>
	</table>
</body>
</html>
