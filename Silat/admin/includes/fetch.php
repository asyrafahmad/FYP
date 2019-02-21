<?php


$output = '';
if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "
	SELECT * FROM users 
	WHERE user_password LIKE '%".$search."%'
	OR username LIKE '%".$search."%' 
	OR user_firstname LIKE '%".$search."%' 
	OR user_lastmame LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM users ORDER BY user_id";
}
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Password</th>
							<th>Username</th>
							<th>firstname</th>
							<th>lastname</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["user_password"].'</td>
				<td>'.$row["username"].'</td>
				<td>'.$row["user_firstname"].'</td>
				<td>'.$row["user_lastmame"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>