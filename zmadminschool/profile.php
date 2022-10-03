<?php include 'header.php'; ?>
 <?php 
 $tid = $_GET['tid'];
 $query = "SELECT * FROM teacher WHERE id=$tid";
 $getData = $db->select($query)->fetch_assoc();
?>
        <section style="overflow: hidden;">
            <div class="container">
                <div class="wdlf">
                    <div>
                        <div class="headteacher">
                            
                            <div class="teacherdescplft">
                                <div style="margin:10px;">
                                   
                                    <img src="<?php echo $getData['img'] ?>" alt="">
                                    <div style="position: relative; margin-top: -70px; color: #000;background: #e6f7e5; width: 100%;">
                                    <h2 ><?php echo $getData['name'] ?></h2>
                                    <h4 style="color: #000; padding-bottom: 4px;"><?php echo $getData['title1'] ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="teacherdescprgt">
                                <div style="margin:10px;">
                                
                                    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h2 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        NAME : <?php echo $getData['name'] ?>
						</h2></div>    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        EDUCATION :<?php echo $getData['edu'] ?>
						</h3></div>       
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        EMAIL : <?php echo $getData['email'] ?>
						</h3></div>
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        PHONE :<?php echo $getData['phn'] ?>
						</h3></div>    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        ADDRESS : <?php echo $getData['adres'] ?>
						</h3></div> 
						<a class="edit" target="blank" href="profileedit.php?tid=<?php echo $getData['id']; ?>">edit</a>
						
                        
                                
                                  </div>
                            </div>
                        </div>
                     
                
                 
                      
                                
                                
                                
                    
                    </div>
                </div>
                <?php include 'sidebar.php';?>
            </div>
        </section>



                <?php include 'footer.php';?>

    </body>
</html>