<?php 
include 'header.php'; 
 $queryyy = "SELECT * FROM teacher WHERE cid=1";
 $read1 = $db->select($queryyy);
 $queryyyy = "SELECT * FROM teacher WHERE cid=2";
 $read2 = $db->select($queryyyy);
?>
<style>.edit{color:red!important;}</style>
        <section style="overflow: hidden;">
            <div class="container">
                <div class="wdlf">
                    <div>
                        <div class="headteacher">
                            
                            <div class="teacherdescprgt">
                                <div style="margin:10px;">
                                
                                    
                        <div style="overflow: hidden; text-align: left;margin: px;border: 1px solid #dcdcdc;
                        "><h2 style="padding: 6px;margin:2px;background:#e6f7e5;">
                        <?php $id = 1;
            $query = "SELECT * FROM themetext WHERE id=$id";
            $getData = $db->select($query)->fetch_assoc();
            echo $getData['text'];?>
            </h2></div>
            
                        <p style="text-align: left;padding-left: 0;">
            <?php $id = 2;
            $query = "SELECT * FROM themetext WHERE id=$id";
            $getData = $db->select($query)->fetch_assoc();
            echo $getData['text'];?>
            
            </p>
                                
                                  </div>
                            </div>
                            <div class="teacherdescplft">
                                <div style="margin:10px;">
                                   
                                    <img src="zmadminschool/<?php $id = 9;
                        $query = "SELECT * FROM teacher WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['img'];?>" alt="">
                                    <div style="position: relative; margin-top: -50px; color: #000;background: #e6f7e5; width: 100%;">

                                    <h2 > <?php $id = 9;
                        $query = "SELECT * FROM teacher WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['name'];?></h2>
                                    <h4 style="color: #000; padding-bottom: 4px;"><?php $id = 9;
                        $query = "SELECT * FROM teacher WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['title1'];?></h4>
                  


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="overflow: hidden;">
                            <div style="overflow: hidden; text-align: left;margin: 5px;
                            box-shadow: 0px 0px 20px -20px rgba(0, 0, 0, 0.3), 0 0 3px 2px rgba(0, 0, 0, 0.06);"><h2 style="padding: 6px;margin:2px;background:#e6f7e5;"><?php $id = 7;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        </h2></div>
                             
<?php if($read1){?>
<?php 
while($row = $read1->fetch_assoc()){
?>

                            <div class="wdhlf">
                                
                                <div class="headteacher" style="padding-bottom: 0;">
                                    <div class="smwd40">
                                        <div style="margin:10px;">
                                           
                                            <img style="height: 115px;"  src="zmadminschool/<?php echo $row['img']; ?>" alt="">
                                           
                                        </div>
                                    </div>
                                    <div class="smwd70">
                                        <div style="margin:10px;">                                
                                            <div style="background: ;padding: 0px;text-align: left;">
                                                <h3 ><?php echo $row['name']; ?></h3>
                                                <h4 style="color: #000; padding-bottom: 4px;"><?php echo $row['title1']; ?><br><?php echo $row['title2']; ?></h4>
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
                               
                    <div>
                        <div style="overflow: hidden; text-align: left;margin: 5px;
                        box-shadow: 0px 0px 20px -20px rgba(0, 0, 0, 0.3), 0 0 3px 2px rgba(0, 0, 0, 0.06);"><h2 style="padding: 6px;margin:2px;background:#e6f7e5;">
                            <?php $id = 8;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        </h2></div>
                    
                      
                             
<?php if($read2){?>
<?php 
while($row = $read2->fetch_assoc()){
?>

                            <div class="wdhlf">
                                
                                <div class="headteacher" style="padding-bottom: 0;">
                                    <div class="smwd40">
                                        <div style="margin:10px;">
                                           
                                            <img style="height: 115px;"  src="zmadminschool/<?php echo $row['img']; ?>" alt="">
                                           
                                        </div>
                                    </div>
                                    <div class="smwd70">
                                        <div style="margin:10px;">                                
                                            <div style="background: ;padding: 0px;text-align: left;">
                                                <h3 ><?php echo $row['name']; ?></h3>
                                                <h4 style="color: #000; padding-bottom: 4px;"><?php echo $row['title1']; ?><br><?php echo $row['title2']; ?></h4>
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
                           
                    <div class="" style="width: 100%; overflow: hidden;">
                            
                        <div class="headteacher" style="padding-bottom: 0;">
                            <h2 style="background:#e6f7e5;padding: 6px;text-align: left;margin: 2px;">
            <?php $id = 3;
            $query = "SELECT * FROM themetext WHERE id=$id";
            $getData = $db->select($query)->fetch_assoc();
            echo $getData['text'];?>
              </h2>
              
                                  
                            <div class="">
                                <div style="margin:10px;">                                
                                    <div style="background: ;padding: 0px;text-align: left;">
                                        <p style="width:100%;color: #000;padding: 0; margin-bottom: 6px;border-bottom: 1px solid #f1f1f1;">
                                            <svg style="padding-right:5px;float:left;padding-top:1px" color="red" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                                              </svg>
                        <?php $id = 4;
            $query = "SELECT * FROM themetext WHERE id=$id";
            $getData = $db->select($query)->fetch_assoc();
            echo $getData['text'];?></p>
                                              <p style="width:100%;color: #000;padding: 0; margin-bottom: 6px;border-bottom: 1px solid #f1f1f1;">
                                                  <svg style="padding-right:5px;float:left;padding-top:1px" color="red" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                      <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                                                    </svg>
                          
                          <?php $id = 5;
            $query = "SELECT * FROM themetext WHERE id=$id";
            $getData = $db->select($query)->fetch_assoc();
            echo $getData['text'];?></p>
                                              <p style="width:100%;color: #000;padding: 0; margin-bottom: 6px;border-bottom: 1px solid #f1f1f1;">
                                                  <svg style="padding-right:5px;float:left;padding-top:1px" color="red" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                      <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                                                    </svg>
                          <?php $id = 6;
            $query = "SELECT * FROM themetext WHERE id=$id";
            $getData = $db->select($query)->fetch_assoc();
            echo $getData['text'];?></p>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        </div>    
                       <?php include'admittext.php';?>
                            <style>
                                div.gallery {
                                  border: 1px solid #ccc;
                                }
                                
                                div.gallery:hover {
                                  border: 1px solid #777;
                                }
                                
                                div.gallery img {
                                  width: 100%;
                                  height: 200px;
                                }
                                
                                div.desc {
                                  padding: 15px;
                                  text-align: center;
                                }
                                
                                * {
                                  box-sizing: border-box;
                                }
                                
                                .responsive {
                                  padding: 5px;
                                  float: left;
                                  width: 24.99999%;
                                }
                                
                                @media only screen and (max-width: 700px) {
                                  .responsive {
                                    width: 49.99999%;
                                    margin: 6px 0;
                                  }
                                }
                                
                                @media only screen and (max-width: 500px) {
                                  .responsive {
                                    width: 100%;
                                  }
                                }
                                
                                .clearfix:after {
                                  content: "";
                                  display: table;
                                  clear: both;
                                }
                                </style>
                        <div style="overflow: hidden; text-align: left;margin: 5px; margin-bottom: 10px;
                        box-shadow: 0px 0px 20px -20px rgba(0, 0, 0, 0.3), 0 0 3px 2px rgba(0, 0, 0, 0.06);"><a class="fl-r" style="padding: 13px;" href="gallery.php"> VIew all</a><h2 style="padding: 6px;margin:2px;background:#e6f7e5;"> <?php $id = 9;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?></h2>
                        
                             
                                
                              
                                
                               
                                                       <?php
                               
 $query = "SELECT * FROM hmglrey WHERE cid=1 LIMIT 4";
 $read = $db->select($query);

                                if($read){?>
<?php 
$i=1;
while($row = $read->fetch_assoc()){
?>
<div class="responsive" >
                                  <div class="gallery">
                                    <a href="view.php?gid=<?php echo $row['id']; ?>">
                                      <img src="zmadminschool/<?php echo $row['img']; ?>" alt="Northern Lights" width="600" height="400">
                                    </a>
                                    <div class="desc"><?php echo $row['title']; ?></div>
                                  </div>
                                </div>

<?php } ?>
<?php } else { ?>
<div class="desc">no photo</div>
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