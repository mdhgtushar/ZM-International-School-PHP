<?php include 'header.php';
 $query = "SELECT * FROM teacher WHERE cid=3";
 $read = $db->select($query);
?>
        <section style="overflow: hidden;">
            <div class="container">
                <div class="wdlf">
                    <div>
                        <div style="overflow: hidden;">
                            <div style="overflow: hidden; text-align: left;margin: 5px;
                            box-shadow: 0px 0px 20px -20px rgba(0, 0, 0, 0.3), 0 0 3px 2px rgba(0, 0, 0, 0.06);"><h2 style="padding: 6px;margin:2px;background:#e6f7e5;">Z.M.INTERNATIONAL SCHOOL TEACHERS LIST</h2></div>
                             
<?php if($read){?>
<?php 
while($row = $read->fetch_assoc()){
?>

<div class="wdhlf">
<div class="headteacher" style="padding-bottom: 0;">
<div class="smwd40">
<div style="margin:10px;">
<img style="height: 115px;"  src="zmadminschool/<?php echo $row['img']; ?>" alt="">
</div></div><div class="smwd70"><div style="margin:10px;">
<div style="background: ;padding: 0px;text-align: left;">
<h3><?php echo $row['name']; ?></h3><h4 style="color: #000; padding-bottom: 4px;"><?php echo $row['title1']; ?> 
<br><?php echo $row['title2']; ?></h4>
<a class="btn" href="profile.php?tid=<?php echo $row['id']; ?>">View More</a>
</div>
</div>
</div>
</div>
</div>

<?php } ?>
<?php } else { ?>
<div class="desc">no notice</div>
<?php } ?>
    
                        </div>
                          
                           
                    
                                
                                
                                
                    
                    </div>
                </div>
                <?php include 'sidebar.php';?>
            </div>
        </section>
                <?php include 'footer.php';?>
    </body>
</html>