
                <div class="wdrg">
                    <div class="sidebar" style="margin-bottom: 10px;">
                        <div class="noticebord">
                            <div><h2>Contact info</h2></div>
                            <div><p>Email: <?php $id = 11;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=11">edit</a></p></div>
                            <div><p>Phone: <?php $id = 10;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=10">edit</a></p></div>
                        </div>
                    </div>


                    <div class="sidebar" style="margin-bottom: 10px;">
                        <div class="noticebord">
                            <div><h2>Campas Address</h2></div>
                            <div><p><?php $id = 14;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=14">edit</a></p></div>
                            <div><p><?php $id = 15;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=15">edit</a></p></div>                            
                        </div>
                    </div>


                    <div class="sidebar" style="margin-bottom: 10px;">
                        <div class="noticebord">
                            <div><h2>Admitation info</h2></div>
                            <div><p><?php $id = 16;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=16">edit</a></p></div>
                            <div><a style="margin: 15px" class="btn" href="admit.php">View More</a></div>                            
                        </div>
                    </div>


                    <div class="sidebar" style="margin-bottom: 10px;">
                        <div class="noticebord">
                            <div><h2>Admission Fee </h2></div>
                            <div><p><?php $id = 17;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=17">edit</a></p></div>
                            <div><p><?php $id = 18;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=18">edit</a></p></div>
                        </div>
                    </div>
                    <div class="sidebar" style="margin-bottom: 10px;">
                        <div class="noticebord">
                            <div><h2>Monthly Fee </h2></div>
                            <div><p><?php $id = 19;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=19">edit</a></p></div>
                            <div><p><?php $id = 20;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=20">edit</a></p></div>
                            <div><p><?php $id = 21;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=21">edit</a></p></div>
                        </div>
                    </div>
                    <div class="sidebar" style="margin-bottom: 10px;">
                        <div class="noticebord">
                            <div><h2>Class time</h2></div>
                            <div><p><?php $id = 22;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=22">edit</a></p></div>
                            <div><p><?php $id = 23;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=23">edit</a></p></div>

                        </div>
                    </div>
                    <div class="sidebar" style="margin-bottom: 10px;">
                        <div class="noticebord">
                            <div><h2>Notice Board</h2></div>



                            
                                                       <?php
                               
 $query = "SELECT * FROM hmglrey WHERE cid=3 LIMIT 10";
 $read = $db->select($query);

                                if($read){?>
<?php 
$i=1;
while($row = $read->fetch_assoc()){
?>
<div><p><a href="view.php?gid=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></p></div>

<?php } ?>
<?php } else { ?><div><p>No notice rignt now</p></div>
<?php } ?>
                                

                            <div><a style="margin: 15px" class="btn" href="notice.php">View all notice</a></div>
                        </div>
                    </div>
                </div>