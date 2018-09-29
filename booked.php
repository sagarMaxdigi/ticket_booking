<?php 
if(isset($_POST['id_data']))
{
	$db=mysqli_connect('localhost','root','','ticket_movie');
	$sql="select seat_no from booked where booked_date="."'".$_POST['id_data']."'";
	$mysqli=mysqli_query($db,$sql);
	if(mysqli_num_rows($mysqli)>0){
		while($row=mysqli_fetch_assoc($mysqli))
		{
			$array[]=str_word_count($row['seat_no'], 1, 'àáãç1234567890');
		}
		for($i=0;$i<count($array);$i++){
			for($j=0;$j<count($array[$i]);$j++)
			{
				$ab[]=$array[$i][$j];
			}
		}  
		header("Content-type:application/json"); 
		echo json_encode($ab);
	}
}
?>