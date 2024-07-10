<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open Sans:wght@700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Helvetica Neue:ital,wght@0,700;1,400&display=swap" />
    
{{-- <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}" /> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{ url('css/global.css') }}" /> --}}
<link rel="stylesheet" type="text/css" href="{{('/frontend/css/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{('/frontend/css/global.css')}}" />
<link rel="stylesheet" type="text/css" href="{{('/frontend/css/tailieu.css')}}" />
{{-- <link rel="stylesheet" type="text/css" href="{{('/frontend/css/styleguides.css')}}" /> --}}

      <style>
      body {
            zoom: 80%; 
        }
        
      </style>
    </head>
    <body>
      
    <div class="trang-ch">
      
      <main class="bg-group">
        <section class="bg1">
          <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
          @include('video_background')
          <div class="vid-overlay"></div>
        </div>
    </div> <!-- End Video Background -->
          <header class="navigation1">
            <img class="material-symbolsmenu-rounded-icon1" alt="">
            
            <div class="nav-item-container">
              <div class="component-131" id="component13Container">
                <a class="ti-liu" href="/main" >Trang chủ</a>
              </div>
            </div>
            <div class="nav-item-container1">
              <div class="nav-bar-item3">
                {{-- <a class="ti-liu">Bài viết</a> --}}
                <a class="ti-liu" href="/posts">Bài viết</a>
              </div>
            </div>
            <div class="logo-ngang2" id="logoNgangContainer">
              {{-- <img class="logo-ngang-child" loading="lazy" alt="" src="./public/frame-8.svg"> --}}
              <svg xmlns="http://www.w3.org/2000/svg" width="115" height="73" viewBox="0 0 115 73" fill="none">
                <path d="M93.9478 36.096C93.9478 56.0312 77.7871 72.1919 57.8518 72.1919C37.9166 72.1919 21.7559 56.0312 21.7559 36.096C21.7559 16.1607 37.9166 0 57.8518 0C77.7871 0 93.9478 16.1607 93.9478 36.096Z" fill="#0054A6"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M57.8518 70.5697C76.8911 70.5697 92.3255 55.1353 92.3255 36.096C92.3255 17.0567 76.8911 1.62229 57.8518 1.62229C38.8125 1.62229 23.3782 17.0567 23.3782 36.096C23.3782 55.1353 38.8125 70.5697 57.8518 70.5697ZM57.8518 72.1919C77.7871 72.1919 93.9478 56.0312 93.9478 36.096C93.9478 16.1607 77.7871 0 57.8518 0C37.9166 0 21.7559 16.1607 21.7559 36.096C21.7559 56.0312 37.9166 72.1919 57.8518 72.1919Z" fill="white"/>
                <path d="M41.608 24.3649L1 46.0225L35.7424 35.1937L73.1919 48.2785L114.251 26.6209L79.0575 37.9009L41.608 24.3649Z" fill="white" stroke="#0054A6" stroke-width="0.811145" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="nav-item-container2">
              <div class="nav-bar-item4">
                <a class="ti-liu" href="/doc">Tài liệu</a>
              </div>
            </div>
            <div class="nav-item-container3">
              <div class="nav-bar-item5">
                <a class="ti-liu">Tuyển dụng</a>
              </div>
            </div>
          </header>
        
            @yield('content')

      <footer class="footer1">
        <div class="logo-ngang-group">
          <div class="logo-ngang4">
            {{-- <img class="logo-ngang-inner" alt="" src="./public/frame-8-1.svg"> --}}
            <svg class="logo-ngang-inner" xmlns="http://www.w3.org/2000/svg" width="142" height="89" viewBox="0 0 142 89" fill="none">
              <path d="M115.588 44.5C115.588 69.0767 95.6646 89 71.0879 89C46.5112 89 26.5879 69.0767 26.5879 44.5C26.5879 19.9233 46.5112 0 71.0879 0C95.6646 0 115.588 19.9233 115.588 44.5Z" fill="#0054A6"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M71.0879 87C94.56 87 113.588 67.9721 113.588 44.5C113.588 21.0279 94.56 2 71.0879 2C47.6158 2 28.5879 21.0279 28.5879 44.5C28.5879 67.9721 47.6158 87 71.0879 87ZM71.0879 89C95.6646 89 115.588 69.0767 115.588 44.5C115.588 19.9233 95.6646 0 71.0879 0C46.5112 0 26.5879 19.9233 26.5879 44.5C26.5879 69.0767 46.5112 89 71.0879 89Z" fill="white"/>
              <path d="M51.0625 30.0376L1 56.7376L43.8312 43.3876L90 59.5189L140.619 32.8188L97.2312 46.7251L51.0625 30.0376Z" fill="white" stroke="#0054A6" stroke-linejoin="round"/>
            </svg>
            <div class="cng-ty-c-phn-dch-v-du-lc-container">
              <b class="cng-ty-c10">CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH PHÚ THỌ</b>
            </div>
            <b class="phuthotourist3">PHUTHOTOURIST</b>
          </div>
          <div class="copyright-group">
            <div class="copyright1">Copyright</div>
            {{-- <img class="vuesaxlinearcopyright-icon1" loading="lazy" alt="" src="./public/vuesaxlinearcopyright1.svg"> --}}
            <svg class="vuesaxlinearcopyright-icon1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M7.99967 14.6668C4.31967 14.6668 1.33301 11.6802 1.33301 8.00016C1.33301 4.32016 4.31967 1.3335 7.99967 1.3335C11.6797 1.3335 14.6663 4.32016 14.6663 8.00016C14.6663 11.6802 11.6797 14.6668 7.99967 14.6668Z" stroke="white" stroke-width="1.14286" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.91984 10.0002C9.44651 10.4135 8.83316 10.6668 8.15983 10.6668C6.6865 10.6668 5.49316 9.4735 5.49316 8.00016C5.49316 6.52683 6.6865 5.3335 8.15983 5.3335C8.83316 5.3335 9.44651 5.58683 9.91984 6.00016" stroke="white" stroke-width="1.14286" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            <div class="cng-ty-c11">Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Phuthotourist)</div>
            <div class="twittervuvietduccom-group">
              <img class="twittervuvietduccom-icon1" alt="">
              
              <img class="facebookvuvietduccom-icon2" alt="">
              
              <img class="googlevuvietduccom-icon1" alt="">
              
              <img class="pinterestvuvietduccom-icon1" alt="">
              
              <img class="linkedinvuvietduccom-icon1" alt="">
              
              <img class="phone-call-icon1" alt="">
              
              <img class="redditvuvietduccom-icon1" alt="">
              
              <img class="tiktokvuvietduccom-icon1" alt="">
              
              <img class="whatsappvuvietduccom-icon1" alt="">
              
            </div>
          </div>
        </div>
        <div class="lin-h-group">
          <b class="lin-h1">LIÊN HỆ</b>
          <div class="frame-parent23">
            <div class="icons-group">
              {{-- <img class="icons23" loading="lazy" alt="" src="./public/icons-20.svg"> --}}
              <svg class="icons23" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M21.7183 8.19024C20.5352 3.2322 15.9944 1 12.0056 1H11.9944C8.01689 1 3.46477 3.22146 2.28167 8.17951C0.963353 13.7171 4.52393 18.4068 7.74647 21.358C8.88869 22.411 10.416 22.9998 12.0056 23C13.538 23 15.0704 22.4527 16.2535 21.358C19.4761 18.4068 23.0366 13.7278 21.7183 8.19024ZM12.0056 13.5668C11.5395 13.5668 11.078 13.4794 10.6474 13.3095C10.2168 13.1396 9.82548 12.8906 9.4959 12.5767C9.16631 12.2628 8.90487 11.8901 8.7265 11.48C8.54813 11.0699 8.45633 10.6303 8.45633 10.1863C8.45633 9.74241 8.54813 9.30282 8.7265 8.89269C8.90487 8.48255 9.16631 8.10988 9.4959 7.79598C9.82548 7.48207 10.2168 7.23306 10.6474 7.06318C11.078 6.89329 11.5395 6.80585 12.0056 6.80585C12.947 6.80585 13.8497 7.16201 14.5154 7.79598C15.181 8.42994 15.5549 9.28978 15.5549 10.1863C15.5549 11.0829 15.181 11.9427 14.5154 12.5767C13.8497 13.2107 12.947 13.5668 12.0056 13.5668Z" fill="white"/>
              </svg>
              <p class="ng-s-2-container1">
                <span class="ng-s-21">15 Đường số 2, Cư xá Lữ Gia,</span>
                <span class="phng-15-qun1">Phường 15, Quận 11, TP. HCM </span>
              </p>
            </div>
            <div class="icons-container">
              {{-- <img class="icons24" alt="" src="./public/icons-1.svg"> --}}
              <svg class="icons24" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path d="M21.97 18.9965C21.97 19.3565 21.89 19.7265 21.72 20.0865C21.55 20.4465 21.33 20.7865 21.04 21.1065C20.55 21.6465 20.01 22.0365 19.4 22.2865C18.8 22.5365 18.15 22.6665 17.45 22.6665C16.43 22.6665 15.34 22.4265 14.19 21.9365C13.04 21.4465 11.89 20.7865 10.75 19.9565C9.58811 19.1066 8.49169 18.1706 7.47 17.1565C6.45877 16.1385 5.5261 15.0454 4.68 13.8865C3.86 12.7465 3.2 11.6065 2.72 10.4765C2.24 9.3365 2 8.2465 2 7.2065C2 6.5265 2.12 5.8765 2.36 5.2765C2.6 4.6665 2.98 4.1065 3.51 3.6065C4.15 2.9765 4.85 2.6665 5.59 2.6665C5.87 2.6665 6.15 2.7265 6.4 2.8465C6.66 2.9665 6.89 3.1465 7.07 3.4065L9.39 6.6765C9.57 6.9265 9.7 7.1565 9.79 7.3765C9.88 7.5865 9.93 7.7965 9.93 7.9865C9.93 8.2265 9.86 8.4665 9.72 8.6965C9.59 8.9265 9.4 9.1665 9.16 9.4065L8.4 10.1965C8.29 10.3065 8.24 10.4365 8.24 10.5965C8.24 10.6765 8.25 10.7465 8.27 10.8265C8.3 10.9065 8.33 10.9665 8.35 11.0265C8.53 11.3565 8.84 11.7865 9.28 12.3065C9.73 12.8265 10.21 13.3565 10.73 13.8865C11.27 14.4165 11.79 14.9065 12.32 15.3565C12.84 15.7965 13.27 16.0965 13.61 16.2765C13.66 16.2965 13.72 16.3265 13.79 16.3565C13.87 16.3865 13.95 16.3965 14.04 16.3965C14.21 16.3965 14.34 16.3365 14.45 16.2265L15.21 15.4765C15.46 15.2265 15.7 15.0365 15.93 14.9165C16.16 14.7765 16.39 14.7065 16.64 14.7065C16.83 14.7065 17.03 14.7465 17.25 14.8365C17.47 14.9265 17.7 15.0565 17.95 15.2265L21.26 17.5765C21.52 17.7565 21.7 17.9665 21.81 18.2165C21.91 18.4665 21.97 18.7165 21.97 18.9965Z" fill="white"/>
              </svg>
              <div class="div26">02838650921</div>
            </div>
            <div class="icons-parent1">
              {{-- <img class="icons25" alt="" src="./public/icons-23@2x.png"> --}}
              <svg class="icons25" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 17.3335H15C18 17.3335 20 15.8335 20 12.3335V5.3335C20 1.8335 18 0.333496 15 0.333496H5C2 0.333496 0 1.8335 0 5.3335V12.3335C0 15.8335 2 17.3335 5 17.3335ZM15.4681 6.41951C15.7917 6.16101 15.8445 5.68908 15.586 5.36543C15.3275 5.04178 14.8556 4.98897 14.5319 5.24748L11.4029 7.74673L11.4025 7.74699C10.6462 8.34886 9.3446 8.349 8.58797 7.7474L5.46898 5.24821C5.14573 4.9892 4.67372 5.04127 4.41471 5.36452C4.1557 5.68776 4.20778 6.15977 4.53102 6.41878L7.65102 8.91878L7.65287 8.92026C8.95626 9.95791 11.0337 9.95791 12.3371 8.92026L12.3381 8.91951L15.4681 6.41951Z" fill="white"/>
              </svg>
              <div class="vanphongdamsenparkvn1">vanphong@damsenpark.vn</div>
            </div>
            <div class="frame-parent24">
              <div class="facebookvuvietduccom-wrapper">
                {{-- <img class="facebookvuvietduccom-icon3" alt="" src="./public/facebookvuvietduccom-1@2x.png"> --}}
                <svg class="facebookvuvietduccom-icon3 xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.469111 2.24594C0 3.14902 0 4.33546 0 6.70833V13.2917C0 15.6645 0 16.851 0.469111 17.7541C0.864425 18.5151 1.48493 19.1356 2.24594 19.5309C3.14902 20 4.33546 20 6.70833 20L8.33336 20V12.7778H5.83336V10H8.33336V7.77778C8.33336 5.27778 9.94447 3.88889 12.2222 3.88889C12.9445 3.88889 13.7222 4 14.4445 4.11111V6.66667H13.1667C11.9445 6.66667 11.6667 7.27778 11.6667 8.05556V10H14.3334L13.8889 12.7778H11.6667V20L13.2917 20C15.6645 20 16.851 20 17.7541 19.5309C18.5151 19.1356 19.1356 18.5151 19.5309 17.7541C20 16.851 20 15.6645 20 13.2917V6.70833C20 4.33546 20 3.14902 19.5309 2.24594C19.1356 1.48493 18.5151 0.864425 17.7541 0.469111C16.851 0 15.6645 0 13.2917 0H6.70833C4.33546 0 3.14902 0 2.24594 0.469111C1.48493 0.864425 0.864425 1.48493 0.469111 2.24594Z" fill="white"/>
                </svg>
              </div>
              <div class="phuthotourist4">Phuthotourist</div>
            </div>
          </div>
        </div>
        <div class="cc-n-v-cng-h-thng-phuth-group">
          <h3 class="cc-n-v1">CÁC ĐƠN VỊ CÙNG HỆ THỐNG PHUTHOTOURIST</h3>
          <div class="link-desktop-parent">
            <div class="link-desktop5">
              <div class="main6">
                <div class="main-inner3">
                  <div class="frame-child15">
                  </div>
                </div>
                <div class="unit-name-wrapper">
                  <div class="unit-name">Công viên Văn hóa Đầm Sen</div>
                </div>
              </div>
            </div>
            <div class="link-desktop6">
              <div class="main7">
                <div class="main-inner4">
                  <div class="frame-child16">
                  </div>
                </div>
                <div class="text-wrapper2">
                  <div class="text16">Khu du lịch sinh thái Vàm Sát</div>
                </div>
              </div>
            </div>
            <div class="link-desktop7">
              <div class="main8">
                <div class="main-inner5">
                  <div class="frame-child17">
                  </div>
                </div>
                <div class="text-wrapper3">
                  <div class="text17">Khách sạn Ngọc Lan (Quận 1)</div>
                </div>
              </div>
            </div>
            <div class="link-desktop8">
              <div class="main9">
                <div class="main-inner6">
                  <div class="frame-child18">
                  </div>
                </div>
                <div class="text-wrapper4">
                  <div class="text18">Khách sạn Phú Thọ (Quận 11)</div>
                </div>
              </div>
            </div>
            <div class="link-desktop9">
              <div class="main10">
                <div class="main-inner7">
                  <div class="frame-child19">
                  </div>
                </div>
                <div class="text-wrapper5">
                  <div class="text19">Trung tâm Du lịch Đầm Sen</div>
                </div>
              </div>
            </div>
          </div>
          <a
              href="{{ route('login') }}"
              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Admin Log in
          </a>

        </div>
        <div class="footer-item">
          
        </div>
      </footer>
    </div>
    

    
    
    <script>
      var component13Container = document.getElementById("component13Container");
      if (component13Container) {
        component13Container.addEventListener("click", function (e) {
          window.location.href = "./trang-ch.html";
        });
      }
      
      var logoNgangContainer = document.getElementById("logoNgangContainer");
      if (logoNgangContainer) {
        logoNgangContainer.addEventListener("click", function (e) {
          window.location.href = "./trang-ch.html";
        });
      }
      
      var iMG3Container = document.getElementById("iMG3Container");
      if (iMG3Container) {
        iMG3Container.addEventListener("click", function (e) {
          // Please sync "2.1 Chi tiết bài viết" to the project
        });
      }
      </script></body>
  </html>