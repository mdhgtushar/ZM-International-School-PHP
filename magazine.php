<?php include 'header.php';?>
        <section style="overflow: hidden;">
            <div class="container">
                <div class="wdlf"> 
                    
                           
                    <div class="" style="width: 100%; overflow: hidden;">
                          
                            <style>
                                div.gallery {border: 2px solid #dedede;transition: .3s;border-radius: 5px;}
                                
                                div.gallery:hover {border: 2px solid #e6f7e5;}
                                
                                div.gallery img {width: 100%;height: 200px;}
                                
                                div.desc {
                                  margin: 5px;
                                  height: 70px;overflow: hidden;
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
                                  div.desc{height: auto;}
                                  .responsive {
                                    width: 49.99999%;
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
                                
                                .clearfix:after {
                                  content: "";
                                  display: table;
                                  clear: both;
                                }
                                </style>
                        <div style="overflow: hidden; text-align: left;margin: 5px; margin-bottom: 10px;
                        box-shadow: 0px 0px 20px -20px rgba(0, 0, 0, 0.3), 0 0 3px 2px rgba(0, 0, 0, 0.06);"><h2 style="padding: 6px;margin:2px;background:#e6f7e5;">SCHOOL MAGAZINE</h2>
                        
                               
               <?php
                               
 $query = "SELECT * FROM hmglrey WHERE cid=2";
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