<?php
$json = file_get_contents("data.json");
$data = json_decode($json,true);
	
?>
<html>
	<head>
			<title>Home work_4</title>
	</head>
	<body>
		<h1>Домашнее задание №4</h1>
		<table>
			<tr>
				<td><strong>Имя</strong></td>
				<td><strong>Фамилия</strong></td>
				<td><strong>Город</strong></td>
				<td><strong>Телефон</strong></td>
			</tr>
		<?php foreach( $data as $name => $item){?> 
			<tr>
				<td><?php echo $item["firstname"];?></td>
				<td><?php echo $item["lastname"];?></td>
				<td><?= $item["adress"];?></td>
				<td><?= $item ["phonenumber"];?></td>
			</tr>
			<?php }?>
		</table>
		
		
	</body>
</html>