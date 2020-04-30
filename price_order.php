<?php 
    session_start();

    include_once 'dbconnect.php';
    if ($_SESSION['user_name']=="888999"){
    } else {
            header("Location: index.php");
        }

    $query = "SELECT * FROM members ORDER BY user_name DESC";
    $result = mysqli_query($conn, $query);
    

 
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" >
     <title>Manage members</title>
     <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
     

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
 <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
 <body>
 <nav class="navbar navbar-default" role="navigation">
     <div class="container-fluid" style="font-family: 'Kanit', sans-serif;">
     	<!-- แถมเมนู -->
     	<div class="navbar-header">
     		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
         		<span class="sr-only">Toggle navigation</span>
         		<span class="icon-bar"></span>
         		<span class="icon-bar"></span>
         		<span class="icon-bar"></span>
            </button>
            <a class="navbar-text">บัญชีผู้ใช้ <?php echo $_SESSION['name']; ?></a>
     	</div>
    
     	<div class="collapse navbar-collapse" id="navbar1" style="font-family: 'Kanit', sans-serif;">
     		<ul class="nav navbar-nav navbar-right">
                
                <?php if (isset($_SESSION['name'])) { ?>
                    <li><a href="mm_user.php">ผู้ใช้ทั้งหมด</a></li>
                    <li><a href="order_a.php">ข้อมูลการสั่งซื้อสินค้า</a></li>
                    <li><a href="history.php">ตรวจสอบสถานะ</a></li>
                    <li><a href="history_success.php">ประวัติทำรายการ</a></li>
                    <li><a href="price_order.php">แก้ไขราคาสินค้า</a></li>
                    <li><a href="contact_admin.php">ติดต่อเรา</a></li>
				    <li><a href="logout.php">ล็อคเอาท์</a></li>   
                <?php } else { ?>
     			    
     			    <li><a href="register.php">Sign Up</a></li>
     			    <li class="active"><a href="admin_login.php">Admin</a></li>
                <?php } ?>
     		</ul>
     	</div>
     </div>
 </nav>
 <div class="container">
 <div class="">
     <div class="row">
         <div class="col-xs-8 col-xs-offset-2" style="font-family: 'Kanit', sans-serif;">
             <legend>Soil ดิน</legend>
            <div class="table-responsive">
             <table class="table table-hover" style="font-family: 'Kanit', sans-serif; font-size: 16px;">
                 <thead>
                     <tr>
                         <th>ลำดับ</th>
                         <th>ประเภทสินค้า</th>
                         <th>ราคา</th>
                         <th colspan="1" style="text-align:center">แก้ไข</th>
                     </tr>
                 </thead>
                 <tbody>

                 <?php 

                 $query = "SELECT * FROM `edit_order` WHERE 1";
                 $result = mysqli_query($conn, $query);
                 
                 while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['face_soil']; ?></td>
                            <td  align="center">
                            <a class="btn btn-warning" href="editorder_price.php?id=<?php echo $row["no"];?>">แก้ไข</a>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['name2']; ?></td>
                            <td><?php echo $row['dan_soil']; ?></td>
                            <td  align="center">
                            <a class="btn btn-warning" href="editorder_price_dan.php?id=<?php echo $row["no"];?>">แก้ไข</a>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['name3']; ?></td>
                            <td><?php echo $row['kienu_soil']; ?></td>
                            <td  align="center">
                            <a class="btn btn-warning" href="editorder_price_kienu.php?id=<?php echo $row["no"];?>">แก้ไข</a>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['name4']; ?></td>
                            <td><?php echo $row['red_soil']; ?></td>
                            <td  align="center">
                            <a class="btn btn-warning" href="editorder_price_red.php?id=<?php echo $row["no"];?>">แก้ไข</a>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['name5']; ?></td>
                            <td><?php echo $row['klongtor_soil']; ?></td>
                            <td  align="center">
                            <a class="btn btn-warning" href="editorder_price_klongtor.php?id=<?php echo $row["no"];?>">แก้ไข</a>
                            </td>
                        </tr>
                 <?php }?>
                 </tbody>
             </table>
            </div>
     </div>               
<div class="container">
<div class="">        
     <div class="row">
         <div class="col-xs-8 col-xs-offset-2" style="font-family: 'Kanit', sans-serif;">
             <legend>Rock หิน</legend>
            <div class="table-responsive">
             <table class="table table-hover" style="font-family: 'Kanit', sans-serif; font-size: 16px;">
                 <thead>
                     <tr>
                         <th>ลำดับ</th>
                         <th>ประเภทสินค้า</th>
                         <th>ราคา</th>
                         <th colspan="1" style="text-align:center">แก้ไข</th>
                     </tr>
                 </thead>
                 <tbody>
                 <?php

                    $query = "SELECT * FROM `edit_order` WHERE 1";
                    $result = mysqli_query($conn, $query);
                    
                    while ($row = mysqli_fetch_array($result)) { ?>
                         <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['name6']; ?></td>
                            <td><?php echo $row['kook_rock']; ?></td>
                            <td  align="center">
                            <a class="btn btn-warning" href="editorder_price_kook.php?id=<?php echo $row["no"];?>">แก้ไข</a>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['name7']; ?></td>
                            <td><?php echo $row['34_rock']; ?></td>
                            <td  align="center">
                            <a class="btn btn-warning" href="editorder_price_rock34.php?id=<?php echo $row["no"];?>">แก้ไข</a>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['name8']; ?></td>
                            <td><?php echo $row['38_rock']; ?></td>
                            <td  align="center">
                            <a class="btn btn-warning" href="editorder_price_rock38.php?id=<?php echo $row["no"];?>">แก้ไข</a>
                            </td>
                        </tr>
                 <?php }?>

                 </tbody>
             </table>
            </div>
           
            
         </div>
     </div>
     </div>
 </div>
</body>
</html>
 <div class="container">
     <div class="">
     <div class="row">
         <div class="col-xs-8 col-xs-offset-2"style="font-family: 'Kanit', sans-serif;" >
            <legend>Sand ทราย</legend>
          
            <div class="table-responsive"style="font-family: 'Kanit', sans-serif; font-size: 16px;">
             <table class="table table-hover">
                 <thead>
                     <tr>
                         <th>ลำดับ</th>
                         <th>ประเภทสินค้า</th>
                         <th>ราคา</th>
                         <th colspan="1" style="text-align:center">แก้ไข</th>
                     </tr>
                 </thead>
                 <tbody>

                 <?php  $query = "SELECT * FROM `edit_order` WHERE 1";
                        $result = mysqli_query($conn, $query);
    
                 
                         while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['name9']; ?></td>
                            <td><?php echo $row['yarb_rock']; ?></td>
                            <td  align="center">
                            <a class="btn btn-warning" href="editorder_price_yarb.php?id=<?php echo $row["no"];?>">แก้ไข</a>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['name10']; ?></td>
                            <td><?php echo $row['fine_sand']; ?></td>
                            <td  align="center">
                            <a class="btn btn-warning" href="editorder_price_fine.php?id=<?php echo $row["no"];?>">แก้ไข</a>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $row['no']; ?></td>
                            <td><?php echo $row['name11']; ?></td>
                            <td><?php echo $row['tom_sand']; ?></td>
                            <td  align="center">
                            <a class="btn btn-warning" href="editorder_price_tom.php?id=<?php echo $row["no"];?>">แก้ไข</a>
                            </td>
                        </tr>
                 <?php }?>


                    
                 </tbody>
             </table>
            </div>
         </div>
         </div> 
 </div>
 
 </div>
 </body>
 </html>