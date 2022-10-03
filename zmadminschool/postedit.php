<?php include 'header.php';
 ?>
 <?php 
 $id = $_GET['id'];
 $query = "SELECT * FROM hmglrey WHERE id=$id";
 $getData = $db->select($query)->fetch_assoc();


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $title  = mysqli_real_escape_string($db->link, $_POST['title']);
    $descl  = mysqli_real_escape_string($db->link, $_POST['descl']);
  $query = "UPDATE hmglrey
  SET
  title = '$title',
  descl = '$descl'
  WHERE id = $id";
  $update = $db->update($query);
  if ($update) {
    echo '<script> window.location.href = "index.php"; </script>';
  }
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
                                    
                                    <a class="btn" href="postphoto.php?id=<?php echo $id; ?>">photo edit</a>
   
                                    </div>
                                </div>
                            </div>
                            <div class="teacherdescprgt">
                                <div style="margin:10px;">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h2 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        TITLE : <textarea name="title"><?php echo $getData['title'] ?></textarea>
						</h2></div>    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        DESCRIPTION  : <textarea name="descl"> <?php echo $getData['descl'] ?></textarea>
						</h3></div>  
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        SUBMIT : <input type="submit" name="submit" value="Submit"/>
                        </h3></div>
                        </form>  
<br>
<a class="btn" style="width: 50%" href="delpost.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">delete</a>

                                
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