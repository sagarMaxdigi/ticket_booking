<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<meta name="keywords" content="Movie Ticket Booking Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link href='//fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/jquery.seat-charts.js"></script>
	<script type="text/javascript">
		var arr = new Array();
		var json='';
		function getvalue(i)
		{
			var num=document.getElementById('noofseat').value;
			var color=document.getElementById(i).style.backgroundColor;
			if((arr.length < num) && (color=="orange"))
			{	
				document.getElementById(i).style.backgroundColor="blue";
				arr.push(i);		
			}
			if(color=="red")
			{
				document.getElementById(i).style.backgroundColor="orange";
				var index = arr.indexOf(i);
				if (index > -1) {
					arr.splice(index, 1);

				}
			}
			var json=JSON.stringify(arr);
			document.getElementById("demo_json").value=json;
		}
		$(document).ready(function(){
			$.ajax({
				url: "calculate.php",
				method:'post',
				datatype:'html', 
				success: function(result)
				{
					$("#seat-map").append(result);
				}
			});
			function ajax_val(date_val){
				
			$.ajax({
				url: "booked.php",
				method:'post',
				data:{id_data:date_val},
				datatype:'json', 
				success: function(result_data)
				{	
					arr=[];
					$(".seatCharts-seat").css("background-color","orange");
					$('#noofseat').val('');
					for(i=0;i<result_data.length;i++)
					{
						$("#"+result_data[i]).css("background-color", "black");	
					}	
				}
			});
			} 
			var id_first=$(".book option:selected").text();
			ajax_val(id_first);
			$("#d").attr('value',id_first);
			$("#noofseat").removeAttr('disabled');
			$(".date_demo").change(function()
			{	
				var id=$(".date_demo option:selected").text();
				ajax_val(id);
				$(".book option:first").prop('selected','selected');
				$("#noofseat").attr('disabled',true);	
			});
			$(".book").change(function()
			{	$(".date_demo option:first").prop('selected','selected');
				$('#noofseat').val('');
				$("#noofseat").removeAttr('disabled');
				var id=$(".book option:selected").text();
				$("#d").attr('value',id);
				ajax_val(id);				
			});
		});
	</script>
</head>
<body>
	<div class="content">
		<div class="main">
			<h2>Multiplex Theatre</h2>
			<div class="demo">
				<div style="margin-left: 29%;">Enter Number of seat:<input type="number" id="noofseat" name="noofseat" min="1" max="300" disabled="false"></div>
				<div id="seat-map" class="seatCharts-container" tabindex="0" aria-activedescendant="5_1">
					<div class="front">SCREEN</div>
					<div id="date_demo" style="margin-left: 9%;font-size: 13px;font-style: oblique;">
						See Previous sale(Date):
						<?php 
						$db=mysqli_connect('localhost','root','','ticket_movie'); 
						$sql="SELECT booked_date FROM booked group BY booked_date order by booked_date DESC";
						$mysqli=mysqli_query($db,$sql); ?>
						<select class="date_demo">
							<option selected="selected">--select date--</option>
						<?php
						while($row=mysqli_fetch_assoc($mysqli))
						{ ?>

							<?php if($row['booked_date']>=date('d-m-y')){ ?>
								<?php } else { ?> 
							<option value="<?php echo $row['booked_date']; ?>"><?php echo $row['booked_date']; ?></option> 
							<?php }
						}
						?>
						</select>

					</div>
					<div id="book" style="margin-left: 72%;;font-size: 13px;font-style: oblique;margin-top: -21px;">
					Book your seat:<select class="book">
						<option value="<?php echo date('d-m-y'); ?>" selected="selected">--select Date--</option>
						<option value="<?php echo date('d-m-y'); ?>"><?php echo date('d-m-y'); ?></option>
						<option value="<?php echo date("d-m-y", strtotime("+1 day"));?>"><?php echo date("d-m-y", strtotime("+1 day"));?></option>
						<option value="<?php echo date("d-m-y", strtotime("+2 day"));?>"><?php echo date("d-m-y", strtotime("+2 day"));?></option>
						
					</select>
					</div>
				</div>
			</div>
			<form action="xyz.php" method="post">
				<input type="hidden" id="demo_json" name="json_data"> 
				<input type="hidden" id="d" name="date_val"  >
				<button type="submit" name="sub" style="border-radius: 77px;background: dodgerblue;width: 196px;margin-left: 41%;max-height: 41px;">Confirm Booking</button>
			</form>
			<p class="copy_rights" style="font-size: 116%;
			margin-left: 55px;
			color: black;
			margin-top: 20px;">&copy; sagar waghchaure</p>
		</div>
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
	</body>
	</html>
