<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<h2><?php echo "Welcome ".$fullName; ?></h2>
	<h3>This file contain get data in view file</h3>
<hr>
	Name is : <strong><?php echo $name; ?></strong>
	<br>
	Age is : <strong><?php echo $Age; ?></strong>

	<hr>
	Facebook URL is : <strong><?php echo $data['facebook']; ?></strong>
	<br>
	Twitter URL is : <strong><?php echo $data['twitter']; ?></strong>
	<hr>
	Aritel number is : <strong><?php echo $phones['Airtel']; ?></strong>
	<br>
	JIO URL is : <strong><?php echo $phones['JIO']; ?></strong>
</body>
</html>