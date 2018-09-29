<?php
    $val=json_encode($_POST['json_data']);
    $date=$_POST['date_val'];
    $db=mysqli_connect('localhost','root','','ticket_movie');
    $sql="insert into booked (seat_no,booked_date) values("."'".$val."'".","."'".$date."'".")";
    echo $sql;
    $mysqli=mysqli_query($db,$sql);
    if($mysqli)
    {
        ?>
        <script type="text/javascript">
            alert("Insert success");
            
        </script>
        <?php 
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
    .invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
</style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title">
                <h2>Invoice</h2><h3 class="pull-right">Order # 12345</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                    <strong>Billed To:</strong><br>
                        John Smith<br>
                        1234 Main<br>
                        Apt. 4B<br>
                        Springfield, ST 54321
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                    <strong>Shipped To:</strong><br>
                        Jane Smith<br>
                        1234 Main<br>
                        Apt. 4B<br>
                        Springfield, ST 54321
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Payment Method:</strong><br>
                        Visa ending **** 4242<br>
                        jsmith@email.com
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Order Date:</strong><br>
                        <?php echo date('y/m/d'); ?><br><br>
                    </address>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item</strong></td>
                                    <td class="text-center"><strong>Price</strong></td>
                                    <td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-right"><strong>Totals</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <tr>
                                    <td>BS-200</td>
                                    <td class="text-center">$10.99</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$10.99</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
