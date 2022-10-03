<?php include 'header.php';
 ?>
 <?php 
 $tid = $_GET['tid'];
 $query = "SELECT * FROM teacher WHERE id=$tid";
 $getData = $db->select($query)->fetch_assoc();


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name  = mysqli_real_escape_string($db->link, $_POST['name']);
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $edu = mysqli_real_escape_string($db->link, $_POST['edu']);
    $phn  = mysqli_real_escape_string($db->link, $_POST['phn']);
    $adres = mysqli_real_escape_string($db->link, $_POST['adres']);
    $title1 = mysqli_real_escape_string($db->link, $_POST['title1']);
    $title2  = mysqli_real_escape_string($db->link, $_POST['title2']);

  $query = "UPDATE teacher
  SET
  name  = '$name',
  email = '$email',
  phn = '$phn',
  adres = '$adres',
  title1 = '$title1',
  title2 = '$title2',
  edu = '$edu'
  WHERE id = $tid";
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
                                    <a class="btn" href="profileeditphoto.php?id=<?php echo $tid; ?>">photo edit</a>
   
                                    </div>
                                </div>
                            </div>
                            <div class="teacherdescprgt">
                                <div style="margin:10px;">
                                <form action="profileeditaction.php?tid=<?php echo $tid; ?>" method="POST" enctype="multipart/form-data">
                                    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h2 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        NAME : <textarea name="name"><?php echo $getData['name'] ?></textarea>
						</h2></div>    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        EDUCATION : <textarea name="edu"> <?php echo $getData['edu'] ?></textarea>
						</h3></div>       
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        EMAIL : <textarea name="email"> <?php echo $getData['email'] ?></textarea>
						</h3></div>
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        PHONE :<textarea name="phn"> <?php echo $getData['phn'] ?></textarea>
						</h3></div>    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        ADDRESS : <textarea name="adres"><?php echo $getData['adres'] ?> </textarea>
						</h3></div> 
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        TITLE 1 :<textarea name="title1"> <?php echo $getData['title1'] ?></textarea>
						</h3></div>    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        TITLE 2 : <textarea name="title2"> <?php echo $getData['title2'] ?></textarea>
						</h3></div> 
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        SUBMIT : <input type="submit" name="submit" value="Submit"/>
                        </h3></div>
                        </form>  
<br>
<a class="btn" style="width: 50%" href="delteacher.php?id=<?php echo $tid; ?>" onclick="return confirm('Are you sure?')">delete</a>

                                
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