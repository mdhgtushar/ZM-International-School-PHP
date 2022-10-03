<?php include 'header.php';
 ?>
<?php if(isset($_GET['mid'])){?>

  <section style="overflow: hidden;">
            <div class="container">
                <div class="wdlf">
                    <div>
                        <div class="">                          
                            <div class="">
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
    $title  = mysqli_real_escape_string($db->link, $_POST['title']);
    $descl = mysqli_real_escape_string($db->link, $_POST['descl']);
    $cid = "2";

  $query = "INSERT INTO hmglrey(title, cid, img, descl) 
Values('$title', '$cid', '$uploaded_image', '$descl')";

  $update = $db->update($query);
  if ($update) {
      echo "inserted";
  }else{
    echo "not inserted";
  }
}
?>
                                <div style="margin:5px;">
                                <form action="" method="POST" enctype="multipart/form-data">                                    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h2 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        TITLE : <textarea name="title"></textarea>
                        </h2></div>    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        DESCRIPTION : <textarea name="descl"> </textarea>
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


<?php } elseif (isset($_GET['nid'])) {?>
 
  <section style="overflow: hidden;">
            <div class="container">
                <div class="wdlf">
                    <div>
                        <div class="">                          
                            <div class="">
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
    $title  = mysqli_real_escape_string($db->link, $_POST['title']);
    $descl = mysqli_real_escape_string($db->link, $_POST['descl']);
    $cid = "3";

  $query = "INSERT INTO hmglrey(title, cid, img, descl) 
Values('$title', '$cid', '$uploaded_image', '$descl')";

  $update = $db->update($query);
  if ($update) {
      echo "inserted";
  }else{
    echo "not inserted";
  }
}
?>
                                <div style="margin:5px;">
                                <form action="" method="POST" enctype="multipart/form-data">                                    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h2 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        TITLE : <textarea name="title"></textarea>
                        </h2></div>    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h3 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        DESCRIPTION : <textarea name="descl"> </textarea>
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

<?php } elseif (isset($_GET['gid'])) {?>

  <section style="overflow: hidden;">
            <div class="container">
                <div class="wdlf">
                    <div>
                        <div class="">                          
                            <div class="">
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
    $title  = mysqli_real_escape_string($db->link, $_POST['title']);
    $cid = "1";

  $query = "INSERT INTO hmglrey(title, cid, img) 
Values('$title', '$cid', '$uploaded_image')";

  $update = $db->update($query);
  if ($update) {
      echo "inserted";
  }else{
    echo "not inserted";
  }
}
?>
                                <div style="margin:5px;">
                                <form action="" method="POST" enctype="multipart/form-data">                                    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h2 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        TITLE : <textarea name="title"></textarea>
                        </h2></div>   
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

<?php } ?>
<style type="text/css">
    textarea{
        width: 100%;
    }
</style>
      



                <?php include 'footer.php';?>

    </body>
</html>