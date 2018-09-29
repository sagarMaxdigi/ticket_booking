<?php 
$db=mysqli_connect('localhost','root','','ticket_movie');
$sql="select * from booking";
$mysqli=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($mysqli))
{
	echo '<p style="margin-left: 43%;font-style: oblique;">'.$row["type_of_ticket"].'=>'.$row["price"].'Rs.</p>';
	$count=1;
	for($i=1;$i<=$row['rows'];$i++)
	{ ?>
		<div class="seatCharts-row" style="margin-left: 60px;"><?php 					
		for($j=1;$j<=$row['cols'];$j++)
			{ ?>
				<div tabindex="-1" id="<?php echo $count.''.$row["type_of_ticket"]; ?>" class="seatCharts-seat seatCharts-cell available" onclick="javascript:getvalue(<?php echo "'".$count.''.$row['type_of_ticket']."'";?>);" style="background-color: orange;"><?php echo $count; ?></div>
			<?php $count++; } 	?>
		</div>
	<?php
	}
}

?>



