<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css
">
    <title>Document</title>
</head>
<style>
   <?php include 'styles-news.css' ?>
</style>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="vov">
                        <ul class="vov__name">
                            <!-- <li><i class="fa-solid fa-house"></i></li> -->
                            <li>VOV1</li>
                            <li></li>
                            <li>VOV2</li>
                            <li></li>
                            <li>VOV3</li>
                            <li></li>
                            <li>VOV4</li>
                            <li></li>
                            <li>VOV5</li>
                            <li></li>
                            <li>VOV6</li>
                            <li></li>
                            <li>VOV GT</li>
                            <li></li>
                            <li>VTC HD</li>
                        </ul>
            </div>    
            <div class ="infor">
                <div>
                    <a href="" class="infor__logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Logo_VOV.svg/1200px-Logo_VOV.svg.png" alt="">
                    </a>
                </div>
                <div>
                        <p>Thứ 5, ngày 23 tháng 10 năm 2022</p>
                </div>               
                    <div class="infor__logoSocial">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-square-instagram"></i>
                        <i class="fa-brands fa-tiktok"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                    <div class="listening">
                        <p>xem & nghe <i class="fa-solid fa-circle-play"></i></p>
                    </div>
                    <div class="languages">
                        <p>English </p>
                    </div>
                   
                    <form class="formSearch">
                    <input type="text" >
                    <i class="fa-solid fa-magnifying-glass"></i>
                    </form>
                </div>
            </div>
            <div class="navbar">
                <ul class="navbar__list">
                    <li><i class="fa-solid fa-house-user"></i></li>
                    <li>Chính trị</li>
                    <li>xã hội </li>
                    <li>thế giới</li>
                    <li>kinh tế</li>
                    <li>thể thao</li>
                    <li>văn hóa</li>
                    <li>giải trí</li>
                    <li>pháp luật</li>
                    <li>du lịch </li>
                    <li>quân sự</li>
                    <li>sức khỏe</li>
                    <li>Đời sống</li>
                    <li>Podcast</li>
                    <li><i class="fa-solid fa-bars"></i></li>
                </ul>
            </div>
        </div>
        <main class="main">
            <!-- <div class="card__main">
                    <a href="">
                        <img src="https://media2.vov.vn/sites/default/files/styles/front_large/public/2022-10/u.jpg" alt="">
                    </a>
                    <h2 class="title">Chủ nhiệm Ủy ban Pháp luật: Người dân phàn nàn về việc thu hồi sổ hộ khẩu</h2>
                    <ul class="nav__list">
                        <li><i class="fa-solid fa-caret-right"></i> Bị cáo Tất Thành Cang tiếp tục hầu tòa trong vụ án bán rẻ đất công</li>
                        <li><i class="fa-solid fa-caret-right"></i> Đã có kết quả giám định ADN 2 bộ hài cốt trong rừng Gia Lai</li>
                        <li><i class="fa-solid fa-caret-right"></i> Vụ 8 tàu cá và ca nô bị cháy tại bến Cửa Đại, có thể do chập điện </li>
                        <li><i class="fa-solid fa-caret-right"></i> Phòng chống tham nhũng: Vai trò của người dân ở đâu?</li>
                        <li><i class="fa-solid fa-caret-right"></i> Ảnh hưởng vụ nổ trên cầu Crimea đến chiến dịch quân sự của Nga ở Ukraine</li>
                        <li><i class="fa-solid fa-caret-right"></i> Việt Nam vào top điểm đến được "săn lùng" tại Australia trong 20 năm qua</li>
                    </ul>
            </div>   -->

</div>

            <!-- <div class="small">              
                <?php $getposts = new WP_query();
   $getposts->query('post_status=publish&showposts=6'); ?>
                    <?php global $wp_query;
   $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <div class="card__small">
                            <?php vu_thumbnail("small")?>
                            <div>
                                <h3 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <a><span><?php echo get_the_date('d - m - Y'); ?></span></a>
                                <a><?php the_author(); ?></a>
                            </div>
                        </div>
                    <?php endwhile;
   wp_reset_postdata(); ?>
            </div> -->
            
            <?php
$servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "learningwordpress";

   // tạo kết nối
   $conn = new mysqli($servername, $username, $password, $dbname);
   // kiểm kết nối
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

   $sql = "SELECT id, title, imagee FROM t_products";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
       // Load dữ liệu lên website
       while($row = $result->fetch_assoc()) {
           // echo "id: " . $row["id"]. " - Tên: " . $row["title"]. " "
           // . $row["imagee"]."<br>";
           // }
           ?>
   
        <div class="card__small">
        <a href="">
    <img src="<?php echo $row["imagee"]; ?>">
    </a>
        
            <p class="title"><?php echo $row["title"] ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
<?php
       }
   } else {
       echo "0 results";
   }
   $conn->close();
   ?>
            <!-- <div class="card__news">
                    <div>
                        <h2 class="title">Cập nhật mới nhất <i class="fa-solid fa-caret-right"></i></h2>
                    </div>
                    <div>
                        <div class="card__news--content">
                            <div class="img">                        
                                <a href="">
                                    <img src="https://media.vov.vn/sites/default/files/styles/front_large/public/2022-10/u17_indonesia_1.jpeg" alt="">
                                </a>
                            </div>
                            
                            <div class="content__title">Trạm BOT Cai Lậy chính thức được thu phí trở lại</div>
                        </div>

                        <div class="card__news--content">
                        <div class="img">                        
                            <a href="">
                                <img src="https://media.vov.vn/sites/default/files/styles/front_large/public/2022-10/11-10_lanh_dao_tp_trao_quyet_dinh_va_tang_hoa_cac_ca_nhan.jpg" alt="">
                            </a>
                        </div>
                        
                        <div class="content__title">Trạm BOT Cai Lậy chính thức được thu phí trở lại</div>
                    </div>

                    <div class="card__news--content">
                        <div class="img">                        
                            <a href="">
                                <img src="https://media2.vov.vn/sites/default/files/styles/front_large_watermark/public/2022-10/cl1.jpg" alt="">
                            </a>
                        </div>
                        
                        <div class="content__title">Trạm BOT Cai Lậy chính thức được thu phí trở lại</div>
                    </div>

                </div>                   
                </div>
                <div>
                 
            </div>    -->
                
                 
        
            </main>

    
</body>
<!-- <script src="swiper.JS"></script> -->
</html>