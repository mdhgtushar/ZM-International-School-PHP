<?php include 'header.php';
 ?>
 <?php 
 $id = $_GET['id'];
 $query = "SELECT * FROM themetext WHERE id=$id";
 $getData = $db->select($query)->fetch_assoc();
 
if(isset($_POST['submit'])){
 $text  = mysqli_real_escape_string($db->link, $_POST['text']);
 if($text == ''){
  $error = "Field must not be Empty !!";
 } else {
  $query = "UPDATE themetext
  SET
  text = '$text'
  WHERE id = $id";

  $update = $db->update($query);
  if($update){
	  $error = "updated!";
  }
 }
}
?>
        <section style="overflow: hidden;">
            <div class="container">
                <div class="wdlf"> 
                    
                           
                    <div class="" style="width: 100%; overflow: hidden;">
                          
                            <style>
                                div.gallery {border: 2px solid #dedede;transition: .3s;border-radius: 5px;margin: 5px}
                                
                                div.gallery img {width: 100%;height: 200px;}
                                
                                div.desc {
                                  overflow: hidden;
                                }
                                
                                * {
                                  box-sizing: border-box;
                                }
                                
                                .responsive {
                                  float: left;
                                  width: 100%;
                                }
                                
                                @media only screen and (max-width: 700px) {
                                  div.desc{height: auto;}
                                  .responsive {
                                    width: 100%;
                                    margin: 6px 0;
                                  }
                                }
                                
                                @media only screen and (max-width: 500px) {
                                  div.desc{
                                    height: auto;
                                  }
                                  .responsive {
                                    width: 100%;
                                  }
                                div.gallery img {
                                  width: 100%;
                                  height: auto;
                                }
                                }
                                select,textarea{
                                  width: 100%;
                                    border: 0px solid #dedede;
                                    padding: 5px 22px;
                                    outline: 0;
                                }
                                .clearfix:after {
                                  content: "";
                                  display: table;
                                  clear: both;
                                }
                                </style>
                        <div style="overflow: hidden; text-align: left;margin: 5px; margin-bottom: 10px;
                        box-shadow: 0px 0px 20px -20px rgba(0, 0, 0, 0.3), 0 0 3px 2px rgba(0, 0, 0, 0.06);">
						<h2 style="padding: 6px;margin:2px;background:#e6f7e5;">EDIT !:  <?php 
if(isset($error)){
 echo "<span style='color:'>".$error."</span>";
}
?></h2>
                  
                                
                                
                               
                                <form action="" method="post">
                                  <div class="gallery">
                                    <div class="desc"><p>
									
									<textarea name="text"><?php echo $getData['text'] ?></textarea>
									</p>
                                  </div>
                                </div>

                                  <div class="gallery">
                                    <div class="desc">
									<input type="submit" name="submit" value="Update"/>
                                  </div>
                                </div>
								</form>

                                
                                
                    
                    </div>
                </div></div>
                <?php include 'sidebar.php';?>
            </div>
        </section>
                <?php include 'footer.php';?>
    </body>
</html>