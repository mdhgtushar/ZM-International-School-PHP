<?php include 'header.php';
 ?>
 <?php 
 $id = $_GET['id'];
 $query = "SELECT * FROM teacher WHERE id=$id";
 $getData = $db->select($query)->fetch_assoc();


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['img']['name'];
    $file_size = $_FILES['img']['size'];
    $file_temp = $_FILES['img']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "img/".$unique_image;
    move_uploaded_file($file_temp, $uploaded_image);

  $query = "UPDATE teacher
  SET
  img = '$uploaded_image'
  WHERE id = $id";
  $update = $db->update($query);
}
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
                                <form action="" method="POST" enctype="multipart/form-data">
                                    
                     
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        IMAGE : <input type="file" name="img">
                        </h3></div>
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        SUBMIT : <input type="submit" name="submit" value="Submit"/>
                        </h3></div>
                        </form>  
                                
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