<?php 
    if(isset($_GET['id']))
    {
        require '../config/db.php';
        $sql = "SELECT * FROM view_tour WHERE tour_id = ".$_GET['id'];
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class="container-fluid fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a href="/" class="h-logo navbar-brand"><svg viewBox="0 0 24 24" class="MuiSvgIcon-root jss7"
                        focusable="false" aria-hidden="true">
                        <path
                            d="M22 11.5c0-1-.2-1.9-.6-2.8-1.4-4.2-5.6-7-10-6.8h-.1c-1.7.2-3.4.7-4.9 1.8-4.6 3-5.8 9.2-2.8 13.9v.1c.2.2.3.6.6.8l.1.1c1.9 2.2 4.7 3.6 7.7 3.6h8.7c.8 0 1.3-.6 1.3-1.3v-9.4z">
                        </path>
                        <path fill="#FFF"
                            d="M16.9 16.8c-.7.9-1.7 1.4-2.8 1.5-.5 0-1-.1-1.4-.5-.3-.3-.5-.8-.4-1.2 0-.2 0-.4.1-.6 0-.2.1-.5.2-.8l1-3.8c-.2.3-.4.5-.6.8-.9 1.8-1.7 3.7-2.4 5.6 0 .1-.1.3-.2.4h-.1c-.1.1-.3.2-.5.2s-.4-.1-.5-.2c-.3-.2-.4-.4-.5-.6-.1-.3-.2-.5-.2-.8s0-.5.1-.8l2.5-9.9c0-.1.1-.2.2-.2l1.7-.5h.1c.1 0 .1.1.1.2l-3.1 12v.2c0-.1.1-.2.2-.5l.3-.9c.2-.7.5-1.4.7-2s.5-1.3.8-1.9c.3-.6.6-1.1 1.1-1.6.1-.1.2-.2.3-.2v-.1s0-.1.1-.1v-.1h.2c.3 0 .5.1.7.3.2.3.2.6.2.9 0 .4-.1.8-.2 1.2l-.3 3.2c-.1.4-.1.8-.1 1.2.1.2.3.3.8.2.7-.2 1.3-.5 1.8-.9.1 0 .2.2.1.3z">
                        </path>
                    </svg>
                </a>
                <ul class="h-menu navbar-nav justify-content-center">
                    <li class="nav-item">
                        <a href="/" class="h-menu-logo nav-link">
                            <div class="h-menu-logo-icon">
                                <div class="background-icon"></div>
                                <i class="bi bi-newspaper"></i>
                            </div>
                            Bảng tin
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="h-menu-logo nav-link">
                            <div class="h-menu-logo-icon">
                                <div class="background-icon"></div>
                                <i class="bi bi-binoculars"></i>
                            </div>
                            Trải nghiệm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="h-menu-logo nav-link">
                            <div class="h-menu-logo-icon">
                                <div class="background-icon"></div>
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            Tour
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="h-menu-logo nav-link">
                            <div class="h-menu-logo-icon">
                                <div class="background-icon"></div>
                                <i class="bi bi-building"></i>
                            </div>
                            Khách sạn
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="h-menu-logo nav-link">
                            <div class="h-menu-logo-icon">
                                <div class="background-icon"></div>
                                <i class="bi bi-ticket"></i>
                            </div>
                            Vé máy bay
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="h-menu-logo nav-link">
                            <div class="h-menu-logo-icon">
                                <div class="background-icon"></div>
                                <i class="bi bi-newspaper"></i>
                            </div>
                            Bảng tin
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="h-menu-logo nav-link">
                            <div class="h-menu-logo-icon">
                                <div class="background-icon"></div>
                                <i class="bi bi-bag"></i>
                            </div>
                            Mua sắm
                        </a>
                    </li>
                </ul>
                <ul class="h-user navbar-nav justify-content-end">
                    <li class="nav-item"><span class="h-user-iteam">
                            <i class="bi bi-cart3"></i>
                        </span></li>
                    <li class="nav-item"><span class="h-user-iteam">
                            <i class="bi bi-wallet2"></i>
                        </span></li>
                    <li class="nav-item"><span class="h-user-iteam">
                            <i class="bi bi-arrow-down-circle"></i>
                        </span></li>
                    <li class="nav-item"><img id="img" class="style-scope yt-img-shadow" alt="Hình ảnh đại diện"
                            height="32" width="32"
                            src="https://yt3.ggpht.com/yti/APfAmoFV39QFrpgQ605BDJUj7quJ-JIHmqaWYE59wro_EQ=s88-c-k-c0x00ffffff-no-rj-mo">
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container container1 mt-5">
        <div class="card" style="width: 900px; height: 2560px; border-radius: 10px;">
            <div class="card-body">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner m-img-tour">
                        <div class="carousel-item active">
                            <img src="https://media.hahalolo.com/2021/12/20/08/44/74b74e715ae2512ec3b319068dc09e68-1639989886_640xauto_high.jpg.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://media.hahalolo.com/2021/12/20/08/44/0de2cce1faac9951dc5d321f013885a1-1639989886_640xauto_high.jpg.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://media.hahalolo.com/2021/12/20/08/44/74b74e715ae2512ec3b319068dc09e68-1639989886_640xauto_high.jpg.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>

                <div class="m-img-tour1 mt-2">   
                </div>

                <div class="ct-tour-name mt-3">
                    <?php echo $data['category_name'] ?>
                </div>              
                <h6 class="ct-tour-schedule mt-2">
                    <?php echo $data['tour_name'] ?>
                </h6>
                <div class="ct-startend">
                    <div class="ct-start">
                        <p class="ct-start1">
                            điểm khởi hành
                        </p>
                        <div>
                            <button class="ct-start2">    
                                <i class="bi bi-geo-alt"></i>
                            </button>
                            
                        </div>
                        <p>
                            Thành phố Cần Thơ, Vietnam
                        </p>
                        <p class="ct-startend-time">
                            02/04/2022
                        </p>
                    </div>
                    <div class="ct-end">
                        <p class="ct-end1">
                            điểm kết thúc
                        </p>
                        <div>
                            <button class="ct-end2">
                                <i class="bi bi-flag"></i>
                            </button>
                        </div>
                        <p>
                            Thành phố Cần Thơ, Vietnam
                        </p>
                        <p class="ct-startend-time">
                            02/04/2022
                        </p>
                    </div>
                </div>
                <div class="ct-Tourcode mt-4">
                    <div class="ct-tourcode">
                        <ul class="ct-tourcode1">
                            <li class="ct-tourcode1-1">
                                <span>Mã tour:</span>
                                <p class="mt-3">Tổng số ngày:</p>
                            </li>                                        
                        </ul>
                        <ul class="ct-tourcode1">
                            <li class="ct-tourcode1-1">
                                <p>T-020831071221-UPNWII</p>
                                <div class="mt-3">
                                    1
                                </div>
                            </li>                 
                        </ul>
                    </div>
                    <div class="ct-tourcode">
                        <ul class="ct-tourcode1">
                            <li class="ct-tourcode1-1">
                                <span>Ngày khởi hành:</span>
                                <p class="mt-3">Ngày kết thúc:</p>
                            </li>                                        
                        </ul>
                        <ul class="ct-tourcode1">
                            <li class="ct-tourcode1-1">
                                <div class="ct-changedate">
                                    <p>02/04/2022</p>
                                    <button class="ct-changedate-btn">Thay đổi ngày</button>                                                
                                </div>
                                <p class="mt-3">02/04/2022</p>
                            </li>                 
                        </ul>
                    </div>
                </div>
                <hr class="mt-2 mb-5">        
                <hr class="mt-3">

                <div class="ct-muitab">  
                    <button class="ct-muitab-btn">
                        Chi tiết
                    </button>
                    <button class="ct-muitab-btn">
                        Quy định riêng
                    </button>
                    <button class="ct-muitab-btn">
                        Khuyến mãi
                    </button>
                    <button class="ct-muitab-btn">
                        Chính sách riêng tư
                    </button>
                    <button class="ct-muitab-btn">
                        Liên hệ
                    </button>
                </div>
                <hr>
                <div>   
                    <div class="ct-detail mt-3">
                        <button class="ct-detail-icon"> 
                            <i class="bi bi-geo-alt"></i>
                        </button>
                        <span class="ct-detail-font">
                            Ngày 1: ĐÀ NẴNG - SƠN TRÀ - BIỂN MỸ KHÊ
                        </span>
                        <div class="ct-detail-vehicle">
                            <i class="bi bi-truck"></i>
                        </div>
                    </div>
                    
                    <div class="ct-detail mt-5">
                        <button class="ct-detail-icon ct-detail-icon1"> 
                            <i class="bi bi-geo-alt"></i>
                        </button>
                        <span class="ct-detail-font">
                            Ngày 2: ĐÀ NẴNG - RỪNG DỪA 7 MẪU - HỘI AN
                        </span>
                        <div class="ct-detail-vehicle">
                            <i class="bi bi-truck"></i>
                            <i class="bi bi-truck-flatbed"></i>
                        </div>
                    </div>
                    <div class="ct-detail mt-5">
                        <button class="ct-detail-icon ct-detail-icon1"> 
                            <i class="bi bi-geo-alt"></i>
                        </button>
                        <span class="ct-detail-font">
                            Ngày 3: BÀ NÀ HILLS - CẦU VÀNG BÀN TAY
                        </span>
                        <div class="ct-detail-vehicle">
                            <i class="bi bi-truck"></i>
                            <i class="bi bi-truck-flatbed"></i>
                            <i class="bi bi-bezier"></i>
                        </div>
                    </div>
                    <div class="ct-detail mt-5">
                        <button class="ct-detail-icon ct-detail-icon2"> 
                            <i class="bi bi-flag"></i>
                        </button>
                        <span class="ct-detail-font">
                            Ngày 4: ĐÀ NẴNG CITY - TIỄN KHÁCH
                        </span>
                        <div class="ct-detail-vehicle">
                            <i class="bi bi-truck"></i>
                            <i class="bi bi-bezier"></i>
                        </div>
                    </div>
                    <hr class="mt-5">
                    <div class="mt-3">
                        <h5>
                            Chọn tháng khởi hành
                        </h5>
                    </div>
                    <button class="ct-departuremonth mt-3"> 
                        12/2021
                    </button>
                    <div class="mt-4">
                        <h5>
                            Lịch khởi hành sắp tới
                        </h5>
                    </div>

                    <div class="ct-departureschedule mt-3">
                        <div class="ct-time-start mt-2">
                            <p>
                                Khởi hành
                            </p>
                            <h6>
                                Thứ 3, 21/12/2021
                            </h6>
                        </div>
                        <div class="ct-departureschedule-icon mt-4">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                        <div class="ct-time-end mt-2">
                            <p>
                                Kết thúc
                            </p>
                            <h6>
                                Thứ 6, 24/12/2021
                            </h6>
                        </div>
                        <h6 class="ct-price mt-2">
                            1.760.000 ₫                    
                        </h6>
                        <div class="ct-Booknow mt-2">
                            <button class="ct-booknow">
                                Đặt ngay
                            </button>
                        </div>
                    </div>
                    <div class="ct-departureschedule mt-3">
                        <div class="ct-time-start mt-2">
                            <p>
                                Khởi hành
                            </p>
                            <h6>
                                Thứ 3, 21/12/2021
                            </h6>
                        </div>
                        <div class="ct-departureschedule-icon mt-4">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                        <div class="ct-time-end mt-2">
                            <p>
                                Kết thúc
                            </p>
                            <h6>
                                Thứ 6, 24/12/2021
                            </h6>
                        </div>
                        <h6 class="ct-price mt-2">
                            1.760.000 ₫                    
                        </h6>
                        <div class="ct-Booknow mt-2">
                            <button class="ct-booknow">
                                Đặt ngay
                            </button>
                        </div>
                    </div>
                    <div class="ct-departureschedule mt-3">
                        <div class="ct-time-start mt-2">
                            <p>
                                Khởi hành
                            </p>
                            <h6>
                                Thứ 3, 21/12/2021
                            </h6>
                        </div>
                        <div class="ct-departureschedule-icon mt-4">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                        <div class="ct-time-end mt-2">
                            <p>
                                Kết thúc
                            </p>
                            <h6>
                                Thứ 6, 24/12/2021
                            </h6>
                        </div>
                        <h6 class="ct-price mt-2">
                            1.760.000 ₫                    
                        </h6>
                        <div class="ct-Booknow mt-2">
                            <button class="ct-booknow">
                                Đặt ngay
                            </button>
                        </div>
                    </div>
                    <div class="ct-departureschedule mt-3">
                        <div class="ct-time-start mt-2">
                            <p>
                                Khởi hành
                            </p>
                            <h6>
                                Thứ 3, 21/12/2021
                            </h6>
                        </div>
                        <div class="ct-departureschedule-icon mt-4">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                        <div class="ct-time-end mt-2">
                            <p>
                                Kết thúc
                            </p>
                            <h6>
                                Thứ 6, 24/12/2021
                            </h6>
                        </div>
                        <h6 class="ct-price mt-2">
                            1.760.000 ₫                    
                        </h6>
                        <div class="ct-Booknow mt-2">
                            <button class="ct-booknow">
                                Đặt ngay
                            </button>
                        </div>
                    </div>
                    <div class="ct-departureschedule mt-3">
                        <div class="ct-time-start mt-2">
                            <p>
                                Khởi hành
                            </p>
                            <h6>
                                Thứ 3, 21/12/2021
                            </h6>
                        </div>
                        <div class="ct-departureschedule-icon mt-4">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                        <div class="ct-time-end mt-2">
                            <p>
                                Kết thúc
                            </p>
                            <h6>
                                Thứ 6, 24/12/2021
                            </h6>
                        </div>
                        <h6 class="ct-price mt-2">
                            1.760.000 ₫                    
                        </h6>
                        <div class="ct-Booknow mt-2">
                            <button class="ct-booknow">
                                Đặt ngay
                            </button>
                        </div>
                    </div>
                    <div class="ct-departureschedule mt-3">
                        <div class="ct-time-start mt-2">
                            <p>
                                Khởi hành
                            </p>
                            <h6>
                                Thứ 3, 21/12/2021
                            </h6>
                        </div>
                        <div class="ct-departureschedule-icon mt-4">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                        <div class="ct-time-end mt-2">
                            <p>
                                Kết thúc
                            </p>
                            <h6>
                                Thứ 6, 24/12/2021
                            </h6>
                        </div>
                        <h6 class="ct-price mt-2">
                            1.760.000 ₫                    
                        </h6>
                        <div class="ct-Booknow mt-2">
                            <button class="ct-booknow">
                                Đặt ngay
                            </button>
                        </div>
                    </div>
                    <div class="ct-departureschedule mt-3">
                        <div class="ct-time-start mt-2">
                            <p>
                                Khởi hành
                            </p>
                            <h6>
                                Thứ 3, 21/12/2021
                            </h6>
                        </div>
                        <div class="ct-departureschedule-icon mt-4">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                        <div class="ct-time-end mt-2">
                            <p>
                                Kết thúc
                            </p>
                            <h6>
                                Thứ 6, 24/12/2021
                            </h6>
                        </div>
                        <h6 class="ct-price mt-2">
                            1.760.000 ₫                    
                        </h6>
                        <div class="ct-Booknow mt-2">
                            <button class="ct-booknow">
                                Đặt ngay
                            </button>
                        </div>
                    </div>
                    <div class="ct-departureschedule mt-3">
                        <div class="ct-time-start mt-2">
                            <p>
                                Khởi hành
                            </p>
                            <h6>
                                Thứ 3, 21/12/2021
                            </h6>
                        </div>
                        <div class="ct-departureschedule-icon mt-4">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                        <div class="ct-time-end mt-2">
                            <p>
                                Kết thúc
                            </p>
                            <h6>
                                Thứ 6, 24/12/2021
                            </h6>
                        </div>
                        <h6 class="ct-price mt-2">
                            1.760.000 ₫                    
                        </h6>
                        <div class="ct-Booknow mt-2">
                            <button class="ct-booknow">
                                Đặt ngay
                            </button>
                        </div>
                    </div>
                    <div class="ct-departureschedule mt-3">
                        <div class="ct-time-start mt-2">
                            <p>
                                Khởi hành
                            </p>
                            <h6>
                                Thứ 3, 21/12/2021
                            </h6>
                        </div>
                        <div class="ct-departureschedule-icon mt-4">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                        <div class="ct-time-end mt-2">
                            <p>
                                Kết thúc
                            </p>
                            <h6>
                                Thứ 6, 24/12/2021
                            </h6>
                        </div>
                        <h6 class="ct-price mt-2">
                            1.760.000 ₫                    
                        </h6>
                        <div class="ct-Booknow mt-2">
                            <button class="ct-booknow">
                                Đặt ngay
                            </button>
                        </div>
                    </div>
                    <div class="ct-departureschedule mt-3">
                        <div class="ct-time-start mt-2">
                            <p>
                                Khởi hành
                            </p>
                            <h6>
                                Thứ 3, 21/12/2021
                            </h6>
                        </div>
                        <div class="ct-departureschedule-icon mt-4">
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                        <div class="ct-time-end mt-2">
                            <p>
                                Kết thúc
                            </p>
                            <h6>
                                Thứ 6, 24/12/2021
                            </h6>
                        </div>
                        <h6 class="ct-price mt-2">
                            1.760.000 ₫                    
                        </h6>
                        <div class="ct-Booknow mt-2">
                            <button class="ct-booknow">
                                Đặt ngay
                            </button>
                        </div>
                    </div>


                </div>

            </div>

        </div>
        <div>
            <button class="ct-btn-changesearch mx-5">Thay đổi tìm kiếm</button>
            <div class="card mx-5 mt-3" style="width: 296px; height: 52px; border-radius: 10px 10px 0 0 ;">
                <div class="card-body">
                    <div>
                        <b>
                            Tuấn Dũng Travel
                        </b>
                    </div>
                </div>
            </div>
            <div class="card mx-5" style="width: 296px; height: 88px; border-radius: 0px 0px 10px 10px ;">
                <div class="card-body">
                    <div class="ct-interactive mt-3">
                        <i class="bi bi-emoji-heart-eyes"></i>
                        <span>
                            <b>
                                80 
                            </b> 
                            người Haha trang này
                        </span>
                    </div>
                </div>
            </div>
            <div class="card mx-5 mt-3" style="width: 296px; height: 52px; border-radius: 10px 10px 0 0;">
                <div class="card-body">
                    <div class="ct-introduce">
                        <div>
                            <b>
                                Giới thiệu
                            </b>
                        </div>
                        <div class="ct-introduce1">
                            <span >
                                Chi tiết trang
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mx-5" style="width: 296px; height: 92px; border-radius: 0px 0px 10px 10px;">
                <div class="card-body">
                    <div class="ct-radiosgrid mt-3">
                        <i class="bi bi-ui-radios-grid"></i>
                        <span> 
                            người Haha trang này
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer>
        <div class="container-fluid">
            <div class="footer-Bottom">
                <div class="footer-bottom1">
                    <div style="margin-left: 30vh;">
                        <p class = "text-left">
                            <b>Giá chỉ từ</b>
                        </p>
                            <div>
                        <h6 class="price-tour-footer">1.690.000 ₫</h6>
                    </div>
                    </div>
                </div>
                <div class ="footer-bottom2" style="margin-right: 38vh;">
                    <div>
                        <button class="btn-booknow ct-booknow">
                            Đặt ngay
                        </button>
                    </div>
                    <div>
                        <button class="btn-start-day">
                            Các ngày khởi hành khác
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>
</html>

<?php
        }
        else require '..template/error/404.php';
    }
    else require '..template/error/404.php';
?>