<?php include 'header.php';?>
        <section style="overflow: hidden;">
            <div class="container">
                <div class="wdlf"> 
                    
                           
                    <div class="" style="width: 100%; overflow: hidden;">
                          
                            <style>
                                div.gallery {border: 2px solid #dedede;transition: .3s;border-radius: 5px;margin: 5px}
                                
                                div.gallery img {width: 100%;height: 200px;}
                                
                                div.desc {
                                  height: 70px;
                                  overflow: hidden;
                                }
                                
                                * {
                                  box-sizing: border-box;
                                }
                                
                                .responsive {
                                  float: left;
                                  width: 33%;
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
                                select,input{
                                  width: 100%;
                                    border: 0px solid #dedede;
                                    border-bottom: 2px solid #dedede;
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
                        box-shadow: 0px 0px 20px -20px rgba(0, 0, 0, 0.3), 0 0 3px 2px rgba(0, 0, 0, 0.06);"><h2 style="padding: 6px;margin:2px;background:#ffc5c5">Online Result server off now</h2>
                        </div>
                        <div style="overflow: hidden; text-align: left;margin: 5px; margin-bottom: 10px;
                        box-shadow: 0px 0px 20px -20px rgba(0, 0, 0, 0.3), 0 0 3px 2px rgba(0, 0, 0, 0.06);"><h2 style="padding: 6px;margin:2px;background:#e6f7e5;">RESULT board</h2>
                        
                                
                                <div class="responsive">
                                  <div class="gallery">
                                    <div class="desc">
                                      <select style="width: 100%">
                                        <option>Select class</option>
                                        <option>Class One</option>
                                        <option>Class Two</option>
                                        <option>Class Three</option>
                                        <option>Class Four</option>
                                        <option>Class Five</option>
                                      </select>
                                      <p>Select Student's class name</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="responsive">
                                  <div class="gallery">
                                    <div class="desc">
                                      <select style="width: 100%">
                                        <option>Select year</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                      </select>
                                      <p>Select Student's Exam year</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="responsive">
                                  <div class="gallery">
                                    <div class="desc">
                                      <select style="width: 100%">
                                        <option>Select exam</option>
                                        <option>Annul</option>
                                        <option>Half yearly</option>
                                      </select>
                                      <p>Select Student's Exam Type</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="responsive">
                                  <div class="gallery">
                                    <div class="desc"><input  style="width: 100%" type="text" name="" placeholder="enter class roll...">
                                      <p>Select Student's Class Roll</p></div>
                                  </div>
                                </div>
                                <div class="responsive">
                                  <div class="gallery">
                                    <div class="desc"><input  style="width: 100%" type="text" name="" placeholder="enter the code...">
                                      <p>code is : 12345</p></div>
                                  </div>
                                </div>

                                <div class="responsive">
                                  <div class="gallery">
                                    <div class="desc"><button  style="width: 100%;outline: 0;cursor: pointer;" type="button" class="btn" name="" placeholder="enter class rool...">Submit</button>
                                      <p>Result unabilable now</p></div>
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