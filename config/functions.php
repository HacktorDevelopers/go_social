<!-- these are functions developed by the developer -->
<?php 
	function alert($text)
	{
		# code...
		echo "<script>";
			echo "alert('$text')";
		echo "</script>";
	}


	function message($flag, $messages)
	{
		# code...
		if ($flag = "error") {
			# code...
			$class = $flag;
		} else {
			# code...
			$class = "success";
		}

		echo "$class";
		
	}
 ?>