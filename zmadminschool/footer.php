
            <div class="container">
        <section style="overflow: hidden;background: #e6f7e5;margin: 5px;box-shadow: 0px 0px 20px -20px rgba(0, 0, 0, 0.3), 0 0 3px 2px rgba(0, 0, 0, 0.06);padding: 20px;">
                
                        <div class="wd6">
                            <div class="logoimg" style="margin: 10px;padding-left: 0"><img src="https://scontent.fdac24-1.fna.fbcdn.net/v/t1.15752-9/116341489_326979905136710_7709470591531769969_n.jpg?_nc_cat=102&_nc_sid=b96e70&_nc_eui2=AeHsf-vKeVDjSHzSzUNJftfNuTico8y4JIm5OJyjzLgkibbDBAcEWwSLKX-XEiv_FCQhxanAHQHoc4Zgw2OZ8bKO&_nc_ohc=rdGGUK0gg2cAX-S-Vd5&_nc_ht=scontent.fdac24-1.fna&oh=4bf4a1cde516ef8d676c7ccfc7754d28&oe=5F4F68F1" alt=""></div>
                            <div class="logotitle" style="margin: 10px"> 
                                <h1><?php $id = 12;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=12">edit</a></h1>
                                <h4><?php $id = 13;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=13">edit</a></h4><br><br>
                                <h3>School Address :</h3>
                                <p style="padding:5px 0;"><?php $id = 14;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=14">edit</a><br><?php $id = 15;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=15">edit</a></p>
                                <h3>Contact info :</h3>
                                <p style="padding:5px 0">Email : <?php $id = 11;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=11">edit</a><br>Mob : <?php $id = 10;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=10">edit</a></p>
                             </div>
                        </div>
                        <div class="wd3">
                            <h3 style="padding: 10px;margin-top: 20px;">Menu :</h3>
                           
                            <a href="index.php" class="footermenu">HOME</a>
                            <a href="teachers.php" class="footermenu">TEACHERS</a>
                            <a href="students.php" class="footermenu">STUDENTS</a>
                            <a href="magazine.php" class="footermenu">SCHOOL MAGAZINE</a>
                            <a href="gallery.php" class="footermenu">SCHOOL GALLERY</a>
                            <a href="admit.php" class="footermenu">ADMISSION</a>
                            <a href="notice.php" class="footermenu">NOTICE BORD</a>

                        </div>
                        <div class="wd3">
                            <h3 style="padding: 10px;margin-top: 20px">Importent links :</h3>
                            <a href="index.php" class="footermenu">HOME</a>
                            <a href="teachers.php" class="footermenu">TEACHERS</a>
                            <a href="students.php" class="footermenu">STUDENTS</a>
                            <a href="magazine.php" class="footermenu">SCHOOL MAGAZINE</a>
                            <a href="gallery.php" class="footermenu">SCHOOL GALLERY</a>
                            <a href="admit.php" class="footermenu">ADMISSION</a>
                            <a href="notice.php" class="footermenu">NOTICE BORD</a>
                        </div>
                        <div style="padding:  20px 0px;text-align: center;font-size: 15px;overflow: hidden;width: 100%">All &copy copyright reserved || This site is developed by rivlux</div>
            </div>
        </section>