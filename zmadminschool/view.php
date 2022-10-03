<?php include 'header.php';
 ?>
 <?php 
if (isset($_GET['gid'])) {
    $id = $_GET['gid'];
 }elseif (isset($_GET['mid'])) {
     $id = $_GET['mid'];
 }elseif (isset($_GET['nid'])) {
     $id = $_GET['nid'];
 }else {
     $id = 1;
 }
 $query = "SELECT * FROM hmglrey WHERE id=$id";
 $getData = $db->select($query)->fetch_assoc();
?>

        <section style="overflow: hidden;">
            <div class="container">
                <div class="wdlf">
                    <div>
            
                       <div class="headteacher">
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h2 style="padding: 6px;margin:2px;background:#e6f7e5;"><?php echo $getData['title']; ?></h2></div>
                              <div class="">
                                <div style="margin:10px;">
                                   
                                    <img src="<?php echo $getData['img']; ?>" alt="">
                                </div>
                            </div>
                            <div class="">
                                <div style="margin:10px;">
                                
                                    
                        
                        <p style="text-align: left;padding-left: 0;"><?php echo $getData['descl']; ?></p>
                                
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