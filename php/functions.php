<?php

	require_once("constants.php");

	function query()
	{
		$sql = func_get_arg(0);

		$conn = new mysqli(SERVER, USERNAME, PASSWORD);

		if (!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		else
		{
			mysqli_select_db($conn, DATABASE);
			$result = mysqli_query($conn, $sql);
			if($result == TRUE)
			{
				$array_2d = [];
				while($array = mysqli_fetch_array($result, MYSQLI_ASSOC))
				{
					$array_2d[] = $array;
				}
				return $array_2d;
			}
			else
			{			
				// print("Query Failed\n");
				return false;
			}
		}
	}

    
?>
