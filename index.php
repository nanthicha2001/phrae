
<!doctype html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="css/css.css">
        <link rel="shortcut icon" href="image/logo1.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    </head>

    <body class="d-flex flex-column min-vh-100">
       
        <!-- Navber -->
        <?php // include $_SERVER['DOCUMENT_ROOT'] . "/Phrae/admin/nav/navbar.php"; ?>
        <?php include "navbar.php"; ?>
        <!-- Navber -->

        
        <div class="container mt-5">
            <h1 class="text-center custom-heading">อยาก<span>ไปที่ไหน?</span></h1>
        </div>

        <div class="container d-flex justify-content-center mt-4">
            <div class="search-container d-flex">
                <div class="input-group">
                    <input type="text" id="search-bar" class="form-control search-input" placeholder="ค้นหาสถานที่ท่องเที่ยว คาเฟ่ ร้านอาหาร ที่พัก" onkeyup="searchFunction()">
                    <button class="btn btn-outline-secondary ms-2 search-btn" onclick="searchFunction()">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
            <ul id="results" class="list-group mt-3"></ul><br>

        
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/chorhae.jpg" class="d-block w-100" alt="รูปภาพ 1">
                </div>
                <div class="carousel-item">
                    <img src="image/pha2.jpeg" class="d-block w-100" alt="รูปภาพ 2">
                </div>
                <div class="carousel-item">
                    <img src="image/phaemuangphi.jpg" class="d-block w-100" alt="รูปภาพ 3">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div><br>

        <!-- Header -->
        <header class="highlight-header">
            <i class="bi bi-geo-alt-fill highlight-icon"></i>
            <h2 class="highlight-title">High<span>light</span></h2>
        </header>


        <!-- Section Highlight -->
        <section class="highlight-content">
            <img src="image/phrae.jpg" alt="ที่เที่ยวแพร่">
            <div class="highlight-text">
                <h2>สถานที่ท่องเที่ยว จังหวัดแพร่ มีสถานที่ท่องเที่ยวมากมายที่ทุกคนอาจไม่รู้</h2>
                <p>หากพูดถึง จังหวัดแพร่ เชื่อว่าคงไม่มีใครที่ไม่รู้จักชื่อเสียงของเมืองที่ได้ชื่อว่า เป็นเมืองแห่งทางผ่าน...</p>
                <p><small>ที่เที่ยว | จังหวัดแพร่</small></p>
                <a href="/phrae/category/province" class="btn-readmore">อ่านต่อ</a>
            </div>
        </section><br><br>

        <div class="dashed-line"></div><br><br>

        <!-- ส่วนแสดงรายการที่เที่ยว -->
        <section class="article-section">
            <div class="container">
                <div class="row">
                    <!-- รายการที่ 1 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/chorhae.php"  class="no-underline">
                            <div class="article-card">
                                <img src="./image/chorhae.jpg" alt="วัดพระธาตุช่อแฮ">
                                <h3>วัดพระธาตุช่อแฮ พระอารามหลวง</h3>
                                <p class="category">ที่เที่ยว| 25/01/2025</p>
                            </div>
                        </a>
                    </div>


                    <!-- รายการที่ 2 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/phaemuangphi.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/phaemuangphi.jpg" alt="แพะเมืองผี">
                                <h3>แพะเมืองผี</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 3 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/wichairacha.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/wichairacha.jpg" alt="คุ้มวิชัยราชา">
                                <h3>คุ้มวิชัยราชา</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 4 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/phanangkhoicave.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image//phanangkhoicave.jpg" alt="ถ้ำผานางคอย">
                                <h3>ถ้ำผานางคอย</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 5 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/nakhuha.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/nakhuha.png" alt="วัดนาคูหา">
                                <h3>วัดนาคูหา</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 6 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/watsawanniwet.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/watsawanniwet.jpg" alt="วัดสวรรคนิเวศ">
                                <h3>วัดสวรรคนิเวศ</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 7 -->
                   <div class="col-md-4">
                        <a href="./category/travelprogram/skyway.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/skyway.jpg" alt="ถนนลอยฟ้าแพร่">
                                <h3>ถนนลอยฟ้าแพร่ ถนนหมายเลข 1343</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 8 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/khumjaoluang.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/khumjaoluang.jpg" alt="คุ้มเจ้าหลวง">
                                <h3>คุ้มเจ้าหลวง</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 9 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/chomsawan.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/chomsawan.jpg" alt="วัดจอมสวรรค์">
                                <h3>วัดจอมสวรรค์</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Header -->
        <header class="highlight-header">
            <i class="bi bi-map highlight-icon"></i>
            <h2 class="highlight-title">ที่เที่ยว<span>จังหวัด

            </span></h2>
        </header>

        <section class="article-section">
            <div class="container">
                
                <!-- แถวที่ 1 (3 สถานที่) -->
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <a href="./category/travel/mueangphrae.php" class="article-link" style="text-decoration: none;">
                            <div class="article-card">
                                <img src="image/mueangphrae.jpg" alt="เมืองแพร่">
                                <h3>อำเภอเมืองแพร่</h3>
                                <p class="category">ที่เที่ยว | 11/02/2025</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="./category/travel/rongkwang.php" class="article-link" style="text-decoration: none;">
                            <div class="article-card">
                                <img src="image/rongkwang.jpg" alt="ร้องกวาง">
                                <h3>อำเภอร้องกวาง</h3>
                                <p class="category">ที่เที่ยว | 11/02/2025</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="./category/travel/long.php" class="article-link" style="text-decoration: none;">
                            <div class="article-card">
                                <img src="image/long.jpg" alt="ลอง">
                                <h3>อำเภอลอง</h3>
                                <p class="category">ที่เที่ยว | 11/02/2025</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- แถวที่ 2 (3 สถานที่) -->
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <a href="./category/travel/sungmen.php" class="article-link" style="text-decoration: none;">
                            <div class="article-card">
                                <img src="image/sungmen.jpg" alt="สูงเม่น">
                                <h3>อำเภอสูงเม่น</h3>
                                <p class="category">ที่เที่ยว | 11/02/2025</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="./category/travel/denchai.php" class="article-link" style="text-decoration: none;">
                            <div class="article-card">
                                <img src="image/denchai.jpg" alt="เด่นชัย">
                                <h3>อำเภอเด่นชัย</h3>
                                <p class="category">ที่เที่ยว | 11/02/2025</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="./category/travel/song.php" class="article-link" style="text-decoration: none;">
                            <div class="article-card">
                                <img src="image/song.jpg" alt="สอง">
                                <h3>อำเภอสอง</h3>
                                <p class="category">ที่เที่ยว | 11/02/2025</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- แถวที่ 3 (2 สถานที่ อยู่ตรงกลาง) -->
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <a href="./category/travel/wangchin.php" class="article-link" style="text-decoration: none;">
                            <div class="article-card">
                                <img src="image/wangchin.jpg" alt="วังชิ้น">
                                <h3>อำเภอวังชิ้น</h3>
                                <p class="category">ที่เที่ยว | 11/02/2025</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="./category/travel/nongmuangkhai.php" class="article-link" style="text-decoration: none;">
                            <div class="article-card">
                                <img src="image/nongmuangkhai.jpg" alt="หนองม่วงไข่">
                                <h3>อำเภอหนองม่วงไข่</h3>
                                <p class="category">ที่เที่ยว | 11/02/2025</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        
        <!-- Header -->
        <header class="highlight-header">
            <i class="bi bi-map highlight-icon"></i>
            <h2 class="highlight-title">เพลน<span>เที่ยว</span></h2>
        </header>
        <!-- ส่วนแสดงรายการที่เที่ยว -->
        <section class="article-section">
            <div class="container">
                <div class="row">
                    <!-- รายการที่ 1 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/chorhae.php"  class="no-underline">
                            <div class="article-card">
                                <img src="./image/chorhae.jpg" alt="วัดพระธาตุช่อแฮ">
                                <h3>วัดพระธาตุช่อแฮ พระอารามหลวง</h3>
                                <p class="category">ที่เที่ยว| 25/01/2025</p>
                            </div>
                        </a>
                    </div>


                    <!-- รายการที่ 2 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/phaemuangphi.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/phaemuangphi.jpg" alt="แพะเมืองผี">
                                <h3>แพะเมืองผี</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 3 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/wichairacha.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/wichairacha.jpg" alt="คุ้มวิชัยราชา">
                                <h3>คุ้มวิชัยราชา</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 4 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/phanangkhoicave.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image//phanangkhoicave.jpg" alt="ถ้ำผานางคอย">
                                <h3>ถ้ำผานางคอย</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 5 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/nakhuha.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/nakhuha.png" alt="วัดนาคูหา">
                                <h3>วัดนาคูหา</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 6 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/watsawanniwet.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/watsawanniwet.jpg" alt="วัดสวรรคนิเวศ">
                                <h3>วัดสวรรคนิเวศ</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 7 -->
                   <div class="col-md-4">
                        <a href="./category/travelprogram/skyway.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/skyway.jpg" alt="ถนนลอยฟ้าแพร่">
                                <h3>ถนนลอยฟ้าแพร่ ถนนหมายเลข 1343</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 8 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/khumjaoluang.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/khumjaoluang.jpg" alt="คุ้มเจ้าหลวง">
                                <h3>คุ้มเจ้าหลวง</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>

                    <!-- รายการที่ 9 -->
                    <div class="col-md-4">
                        <a href="./category/travelprogram/chomsawan.php"  class="no-underline">
                            <div class="article-card">
                                <img src="image/chomsawan.jpg" alt="วัดจอมสวรรค์">
                                <h3>วัดจอมสวรรค์</h3>
                                <p class="category">ที่เที่ยว | 25/01/2025</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

         <!-- Footer -->
         <footer class="footer">
            <div class="container">
                <div class="footer-grid">
                <!-- คอลัมน์ซ้าย: ข้อมูลและ Social Media -->
                <div class="footer-col">
                    <h4>Phrae Province</h4>
                    <p>เว็บไซต์แนะนำสถานที่ท่องเที่ยว คาเฟ่ ร้านอาหาร และที่พัก</p>
                    <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100008251987702"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/edily.jxmjxm/"><i class="bi bi-instagram"></i></a>
                    <a href="https://phrae.go.th/index1.php"><i class="bi bi-globe"></i></a>
                    <a href="https://www.youtube.com/channel/UCIxYrqBsfNVZ2PtxHe9jdYg"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <!-- คอลัมน์กลาง: เมนู -->
                <div class="footer-col">
                    <h4>เมนู</h4>
                    <ul>
                    <li><a class="nav-link" href="/phrae/index.php">หน้าแรก</a></li>
                    <li><a class="nav-link" href="/phrae/travel/province.php">ข้อมูลท่องเที่ยวจังหวัด</a></li>
                    <li><a class="nav-link" href="/phrae/category/travelprogram/index.php">เพลนเที่ยว</a></li>
                    <li><a class="nav-link" href="/phrae/category/travel_db/index.php">สถานที่ท่องเที่ยว</a></li>
                    <li><a class="nav-link" href="/phrae/category/accommodation/index.php">ที่พัก</a></li>
                    </ul>
                </div>

                <!-- คอลัมน์ขวา: ติดต่อสอบถาม -->
                <div class="footer-col">
                    <h4>ติดต่อสอบถาม</h4>
                    <p>
                    <i class="bi bi-envelope-at-fill"></i> E-mail : <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_white" style="color: white; text-decoration: none;">65121807@g.cmru.ac.th</a>
                    </p>
                    <button class="contact-btn">Nanthicha Kasssawang</button>
                </div>
                </div>

                <!-- แถบ Copyright -->
                <div class="footer-bottom">
                <p>Copyright &copy; 2025. Depatment of Computer, CMRU. All rights reserved. | By . Nanthicha Kassawang. | All rights reserved. | Website For Education.</p>
                </div>
            </div>
        </footer>
        
        <script src="js/script1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


    </body>
</html>
