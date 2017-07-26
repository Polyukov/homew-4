<?php
$data = [
		[ "firstname" => "Иван","lastname" => "Иванов", "adress" => "Peterburg", "phonenumber" =>7777777],
		[ "firstname" => "Андрей","lastname" => "Смирнов", "adress" => "Moscow", "phonenumber" =>555555],
		[ "firstname" => "Александр","lastname" => "Сидоров", "adress" => "Bryansk", "phonenumber" =>44444444],
		[ "firstname" => "Петр","lastname" => "Петров", "adress" => "Vitebsk", "phonenumber" =>333333333],
		
		];
	
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