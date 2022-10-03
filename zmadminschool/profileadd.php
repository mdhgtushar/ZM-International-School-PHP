<?php include 'header.php';
 ?>
 <?php 
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
    $name  = mysqli_real_escape_string($db->link, $_POST['name']);
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $edu = mysqli_real_escape_string($db->link, $_POST['edu']);
    $phn  = mysqli_real_escape_string($db->link, $_POST['phn']);
    $adres = mysqli_real_escape_string($db->link, $_POST['adres']);
    $title1 = mysqli_real_escape_string($db->link, $_POST['title1']);
    $title2  = mysqli_real_escape_string($db->link, $_POST['title2']);
    $cid = "3";

  $query = "INSERT INTO teacher(name, cid, email, img, phn, adres, title1, title2,edu) 
Values('$name', '$cid', '$email','$uploaded_image','$phn','$adres','$title1','$title2','edu')";

  $update = $db->update($query);
  if ($update) {
      echo "inserted";
  }else{
    echo "not inserted";
  }
}
?>
        <section style="overflow: hidden;">
            <div class="container">
                <div class="wdlf">
                    <div>
                        <div class="headteacher">
                            
                          
                            <div class="teacherdescprgt">
                                <div style="margin:10px;">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h2 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        NAME : <textarea name="name"></textarea>
                        </h2></div>    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        EDUCATION : <textarea name="edu"> </textarea>
                        </h3></div>       
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        EMAIL : <textarea name="email"> </textarea>
                        </h3></div>
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        PHONE :<textarea name="phn"> </textarea>
                        </h3></div>    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        ADDRESS : <textarea name="adres"></textarea>
                        </h3></div> 
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        TITLE 1 :<textarea name="title1"></textarea>
                        </h3></div>    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        TITLE 2 : <textarea name="title2"></textarea>
                        </h3></div> 
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