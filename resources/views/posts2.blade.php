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
{{-- <link rel="stylesheet" type="text/css" href="{{('/frontend/css/style.css')}}" /> --}}
<link rel="stylesheet" type="text/css" href="{{('/frontend/css/global2.css')}}" />
{{-- <link rel="stylesheet" type="text/css" href="{{('/frontend/css/tailieu.css')}}" /> --}}
<link rel="stylesheet" type="text/css" href="{{('/frontend/css/styleguides.css')}}" />

      <style>
      body {
            zoom: 80%; 
        }
        
      </style>
    </head>
    
  <body>
    <div class="bi-vit">
      <div class="bg"></div>
      <div class="frame-parent">
        <div class="container-fluid remove-vid-marg">
          <div class="vid-parent">
            @include('video_background')
            <div class="vid-overlay"></div>
          </div>
        </div>
        <div class="vector-parent">
          {{-- <img class="frame-child" alt="" src="./public/polygon-1.svg" /> --}}
          <div class="container-fluid remove-vid-marg">
            
        </div>
          <b class="bi-vit1">Bài viết</b>
        </div>
        <div class="footer-parent">
          <div class="footer">
            <div class="logo-ngang-parent">
              <div class="logo-ngang">
                <svg class="logo-ngang-inner" xmlns="http://www.w3.org/2000/svg" width="142" height="89" viewBox="0 0 142 89" fill="none">
                  <path d="M115.588 44.5C115.588 69.0767 95.6646 89 71.0879 89C46.5112 89 26.5879 69.0767 26.5879 44.5C26.5879 19.9233 46.5112 0 71.0879 0C95.6646 0 115.588 19.9233 115.588 44.5Z" fill="#0054A6"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M71.0879 87C94.56 87 113.588 67.9721 113.588 44.5C113.588 21.0279 94.56 2 71.0879 2C47.6158 2 28.5879 21.0279 28.5879 44.5C28.5879 67.9721 47.6158 87 71.0879 87ZM71.0879 89C95.6646 89 115.588 69.0767 115.588 44.5C115.588 19.9233 95.6646 0 71.0879 0C46.5112 0 26.5879 19.9233 26.5879 44.5C26.5879 69.0767 46.5112 89 71.0879 89Z" fill="white"/>
                  <path d="M51.0625 30.0376L1 56.7376L43.8312 43.3876L90 59.5189L140.619 32.8188L97.2312 46.7251L51.0625 30.0376Z" fill="white" stroke="#0054A6" stroke-linejoin="round"/>
                </svg>

                <b class="cng-ty-c">CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH PHÚ THỌ</b>
                <b class="phuthotourist">PHUTHOTOURIST</b>
              </div>
              <div class="copyright-parent">
                <div class="copyright">Copyright</div>
                <svg class="vuesaxlinearcopyright-icon1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M7.99967 14.6668C4.31967 14.6668 1.33301 11.6802 1.33301 8.00016C1.33301 4.32016 4.31967 1.3335 7.99967 1.3335C11.6797 1.3335 14.6663 4.32016 14.6663 8.00016C14.6663 11.6802 11.6797 14.6668 7.99967 14.6668Z" stroke="white" stroke-width="1.14286" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M9.91984 10.0002C9.44651 10.4135 8.83316 10.6668 8.15983 10.6668C6.6865 10.6668 5.49316 9.4735 5.49316 8.00016C5.49316 6.52683 6.6865 5.3335 8.15983 5.3335C8.83316 5.3335 9.44651 5.58683 9.91984 6.00016" stroke="white" stroke-width="1.14286" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>

                <div class="copyright">
                  Công ty Cổ phần Dịch vụ Du lịch Phú Thọ (Phuthotourist)
                </div>
                <div class="twittervuvietduccom-parent">
                  <img
                    class="twittervuvietduccom-icon"
                    alt=""
                    src="./public/twittervuvietduccom.svg"
                  />

                  <img
                    class="facebookvuvietduccom-icon"
                    alt=""
                    src="./public/facebookvuvietduccom@2x.png"
                  />

                  <img
                    class="twittervuvietduccom-icon"
                    alt=""
                    src="./public/googlevuvietduccom.svg"
                  />

                  <img
                    class="pinterestvuvietduccom-icon"
                    alt=""
                    src="./public/pinterestvuvietduccom.svg"
                  />

                  <img
                    class="twittervuvietduccom-icon"
                    alt=""
                    src="./public/linkedinvuvietduccom.svg"
                  />

                  <img
                    class="pinterestvuvietduccom-icon"
                    alt=""
                    src="./public/phonecall.svg"
                  />

                  <img
                    class="pinterestvuvietduccom-icon"
                    alt=""
                    src="./public/redditvuvietduccom.svg"
                  />

                  <img
                    class="pinterestvuvietduccom-icon"
                    alt=""
                    src="./public/tiktokvuvietduccom.svg"
                  />

                  <img
                    class="twittervuvietduccom-icon"
                    alt=""
                    src="./public/whatsappvuvietduccom.svg"
                  />
                </div>
              </div>
            </div>
            <div class="lin-h-parent">
              <b class="copyright">LIÊN HỆ</b>
              <div class="frame-group">
                <div class="icons-parent">
                  <svg class="icons23" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M21.7183 8.19024C20.5352 3.2322 15.9944 1 12.0056 1H11.9944C8.01689 1 3.46477 3.22146 2.28167 8.17951C0.963353 13.7171 4.52393 18.4068 7.74647 21.358C8.88869 22.411 10.416 22.9998 12.0056 23C13.538 23 15.0704 22.4527 16.2535 21.358C19.4761 18.4068 23.0366 13.7278 21.7183 8.19024ZM12.0056 13.5668C11.5395 13.5668 11.078 13.4794 10.6474 13.3095C10.2168 13.1396 9.82548 12.8906 9.4959 12.5767C9.16631 12.2628 8.90487 11.8901 8.7265 11.48C8.54813 11.0699 8.45633 10.6303 8.45633 10.1863C8.45633 9.74241 8.54813 9.30282 8.7265 8.89269C8.90487 8.48255 9.16631 8.10988 9.4959 7.79598C9.82548 7.48207 10.2168 7.23306 10.6474 7.06318C11.078 6.89329 11.5395 6.80585 12.0056 6.80585C12.947 6.80585 13.8497 7.16201 14.5154 7.79598C15.181 8.42994 15.5549 9.28978 15.5549 10.1863C15.5549 11.0829 15.181 11.9427 14.5154 12.5767C13.8497 13.2107 12.947 13.5668 12.0056 13.5668Z" fill="white"/>
                  </svg>

                  <div class="ng-s-2-container">
                    <p class="phng-15-qun">15 Đường số 2, Cư xá Lữ Gia,</p>
                    <p class="phng-15-qun">Phường 15, Quận 11, TP. HCM</p>
                  </div>
                </div>
                <div class="icons-group">
                  <svg class="icons24" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path d="M21.97 18.9965C21.97 19.3565 21.89 19.7265 21.72 20.0865C21.55 20.4465 21.33 20.7865 21.04 21.1065C20.55 21.6465 20.01 22.0365 19.4 22.2865C18.8 22.5365 18.15 22.6665 17.45 22.6665C16.43 22.6665 15.34 22.4265 14.19 21.9365C13.04 21.4465 11.89 20.7865 10.75 19.9565C9.58811 19.1066 8.49169 18.1706 7.47 17.1565C6.45877 16.1385 5.5261 15.0454 4.68 13.8865C3.86 12.7465 3.2 11.6065 2.72 10.4765C2.24 9.3365 2 8.2465 2 7.2065C2 6.5265 2.12 5.8765 2.36 5.2765C2.6 4.6665 2.98 4.1065 3.51 3.6065C4.15 2.9765 4.85 2.6665 5.59 2.6665C5.87 2.6665 6.15 2.7265 6.4 2.8465C6.66 2.9665 6.89 3.1465 7.07 3.4065L9.39 6.6765C9.57 6.9265 9.7 7.1565 9.79 7.3765C9.88 7.5865 9.93 7.7965 9.93 7.9865C9.93 8.2265 9.86 8.4665 9.72 8.6965C9.59 8.9265 9.4 9.1665 9.16 9.4065L8.4 10.1965C8.29 10.3065 8.24 10.4365 8.24 10.5965C8.24 10.6765 8.25 10.7465 8.27 10.8265C8.3 10.9065 8.33 10.9665 8.35 11.0265C8.53 11.3565 8.84 11.7865 9.28 12.3065C9.73 12.8265 10.21 13.3565 10.73 13.8865C11.27 14.4165 11.79 14.9065 12.32 15.3565C12.84 15.7965 13.27 16.0965 13.61 16.2765C13.66 16.2965 13.72 16.3265 13.79 16.3565C13.87 16.3865 13.95 16.3965 14.04 16.3965C14.21 16.3965 14.34 16.3365 14.45 16.2265L15.21 15.4765C15.46 15.2265 15.7 15.0365 15.93 14.9165C16.16 14.7765 16.39 14.7065 16.64 14.7065C16.83 14.7065 17.03 14.7465 17.25 14.8365C17.47 14.9265 17.7 15.0565 17.95 15.2265L21.26 17.5765C21.52 17.7565 21.7 17.9665 21.81 18.2165C21.91 18.4665 21.97 18.7165 21.97 18.9965Z" fill="white"/>
                  </svg>

                  <div class="ng-s-2-container">02838650921</div>
                </div>
                <div class="icons-group">
                  <svg class="icons25" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 17.3335H15C18 17.3335 20 15.8335 20 12.3335V5.3335C20 1.8335 18 0.333496 15 0.333496H5C2 0.333496 0 1.8335 0 5.3335V12.3335C0 15.8335 2 17.3335 5 17.3335ZM15.4681 6.41951C15.7917 6.16101 15.8445 5.68908 15.586 5.36543C15.3275 5.04178 14.8556 4.98897 14.5319 5.24748L11.4029 7.74673L11.4025 7.74699C10.6462 8.34886 9.3446 8.349 8.58797 7.7474L5.46898 5.24821C5.14573 4.9892 4.67372 5.04127 4.41471 5.36452C4.1557 5.68776 4.20778 6.15977 4.53102 6.41878L7.65102 8.91878L7.65287 8.92026C8.95626 9.95791 11.0337 9.95791 12.3371 8.92026L12.3381 8.91951L15.4681 6.41951Z" fill="white"/>
                  </svg>

                  <div class="ng-s-2-container">vanphong@damsenpark.vn</div>
                </div>
                <div class="icons-group">
                  <div class="facebookvuvietduccom-wrapper">
                    <svg class="facebookvuvietduccom-icon3 xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.469111 2.24594C0 3.14902 0 4.33546 0 6.70833V13.2917C0 15.6645 0 16.851 0.469111 17.7541C0.864425 18.5151 1.48493 19.1356 2.24594 19.5309C3.14902 20 4.33546 20 6.70833 20L8.33336 20V12.7778H5.83336V10H8.33336V7.77778C8.33336 5.27778 9.94447 3.88889 12.2222 3.88889C12.9445 3.88889 13.7222 4 14.4445 4.11111V6.66667H13.1667C11.9445 6.66667 11.6667 7.27778 11.6667 8.05556V10H14.3334L13.8889 12.7778H11.6667V20L13.2917 20C15.6645 20 16.851 20 17.7541 19.5309C18.5151 19.1356 19.1356 18.5151 19.5309 17.7541C20 16.851 20 15.6645 20 13.2917V6.70833C20 4.33546 20 3.14902 19.5309 2.24594C19.1356 1.48493 18.5151 0.864425 17.7541 0.469111C16.851 0 15.6645 0 13.2917 0H6.70833C4.33546 0 3.14902 0 2.24594 0.469111C1.48493 0.864425 0.864425 1.48493 0.469111 2.24594Z" fill="white"/>
                    </svg>
                  </div>
                  <div class="ng-s-2-container">Phuthotourist</div>
                </div>
              </div>
            </div>
            <div class="cc-n-v-cng-h-thng-phuth-parent">
              <b class="copyright">CÁC ĐƠN VỊ CÙNG HỆ THỐNG PHUTHOTOURIST</b>
              <div class="frame-group">
                <div class="link-desktop">
                  <div class="icons-group">
                    <div class="main-child"></div>
                    <div class="text-wrapper">
                      <div class="ng-s-2-container">
                        Công viên Văn hóa Đầm Sen
                      </div>
                    </div>
                  </div>
                </div>
                <div class="link-desktop">
                  <div class="icons-group">
                    <div class="main-child"></div>
                    <div class="text-wrapper">
                      <div class="ng-s-2-container">
                        Khu du lịch sinh thái Vàm Sát
                      </div>
                    </div>
                  </div>
                </div>
                <div class="link-desktop">
                  <div class="icons-group">
                    <div class="main-child"></div>
                    <div class="text-wrapper">
                      <div class="ng-s-2-container">
                        Khách sạn Ngọc Lan (Quận 1)
                      </div>
                    </div>
                  </div>
                </div>
                <div class="link-desktop">
                  <div class="icons-group">
                    <div class="main-child"></div>
                    <div class="text-wrapper">
                      <div class="ng-s-2-container">
                        Khách sạn Phú Thọ (Quận 11)
                      </div>
                    </div>
                  </div>
                </div>
                <div class="link-desktop4">
                  <div class="icons-group">
                    <div class="main-child"></div>
                    <div class="text-wrapper">
                      <div class="ng-s-2-container">
                        Trung tâm Du lịch Đầm Sen
                      </div>
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
            <div class="footer-child"></div>
          </div>
          <div class="group-div">
            {{-- <div class="row row-cols-4 row-cols-md-4 g-4"> --}}
            <div class="frame-parent1">
              <div class="frame-parent2">
                <div class="instance-parent">
                  @foreach ($post12first as $post)
                  <a href="{{ URL::to('/postDetail/'.$post->postID) }}">
                  <div class="img-parent">
                    <div class="img">
                      <img class="img-icon" alt="" src="./public/img@2x.png" />

                      <div class="img-child"></div>
                    </div>
                    <div class="frame-parent3">
                      <div class="admin-parent">
                        <div class="copyright">Admin</div>
                        <div class="frame-item"></div>
                      </div>
                      <b class="thng-bo-u"
                        >{{ $post -> title }}</b
                      >
                      <div class="div1">
                        @foreach($category as $cate)
                            @if($post->categoryID == $cate->categoryID)

                              <div class="div2">
                                <b class="m-thc"> {{ $cate -> name }} </b>
                              </div>
                            @endif
                            
                          @endforeach
                        
                      </div>
                      <div class="icons-group">
                        <div class="n-lt-xem-wrapper">
                          <div class="copyright">10N lượt xem</div>
                        </div>
                        <div class="day-child"></div>
                        <div class="wrapper">
                          <div class="copyright">{{ \Carbon\Carbon::parse($post->updated_at)->format('d/m/Y') }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="post-card">
                    <img src="path/to/image.jpg" alt="Post Image">
                    <div class="post-content">
                        <div class="post-header">
                            <span class="author">Admin •</span>
                            <span class="views">10N lượt xem</span>
                        </div>
                        <h2 class="post-title">{{ $post -> title }}</h2>
                        <div class="post-tags">
                            <span class="tag">Sự kiện</span>
                            <span class="tag">Thông báo</span>
                            <span class="tag">Tin tức</span>
                        </div>
                        <div class="post-date">{{ \Carbon\Carbon::parse($post->updated_at)->format('d/m/Y') }}</div>
                    </div>
                   </div> --}}
                   </a>
                  @endforeach
                  {{-- -------------------------------------------------------- --}}
                  
                </div>
              </div>
              <div class="frame-wrapper">
                <div class="icons-parent1">
                  <img class="icons3" alt="" src="./public/icons3.svg" />

                  <div class="icons-group">
                    <div class="page">
                      <b class="copyright">1</b>
                    </div>
                    <div class="page1">
                      <div class="div61">2</div>
                    </div>
                    <div class="page1">
                      <div class="div61">3</div>
                    </div>
                    <div class="page1">
                      <div class="div61">...</div>
                    </div>
                    <div class="page1">
                      <div class="div61">10</div>
                    </div>
                  </div>
                  <img class="icons3" alt="" src="./public/icons4.svg" />
                </div>
              </div>
            </div>
            <div class="filters-packs">
              <div class="filters-packs-inner">
                <div class="frame-parent15">
                  <div class="icons-parent2">
                    <img class="icons" alt="" src="./public/icons5.svg" />

                    <b class="copyright">Bộ lọc</b>
                  </div>
                  <img class="icons6" alt="" src="./public/icons6.svg" />
                </div>
              </div>
              <b class="ch-bi">Chủ đề bài viết</b>
              <div class="ch-parent">
                <div class="ch">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12.1207 19.2331C11.5219 19.2331 10.9136 19.2424 10.3149 19.2331C9.76359 19.2238 9.3834 18.935 9.29786 18.432C9.07926 17.1931 8.46146 16.1872 7.62506 15.2557C5.44851 12.8339 5.69563 9.16387 8.14781 7.01217C10.4954 4.96294 14.0882 5.05608 16.3408 7.2171C18.5838 9.36879 18.7454 12.927 16.6639 15.2277C15.8085 16.1685 15.1812 17.1838 14.9626 18.4413C14.877 18.9443 14.4874 19.2144 13.9266 19.2331C13.3183 19.2424 12.7195 19.2331 12.1207 19.2331Z" fill="white"/>
                    <path d="M12.1636 20.0976C12.7339 20.0976 13.3042 20.089 13.8745 20.0976C14.4887 20.1062 14.673 20.3128 14.6993 20.8983C14.7256 21.5527 14.6554 22.1296 13.8921 22.3965C13.7956 22.4309 13.7517 22.6548 13.7078 22.8011C13.5411 23.335 13.3305 23.5072 12.769 23.5158C12.3478 23.5158 11.9179 23.5244 11.4967 23.5158C10.9527 23.5072 10.707 23.3436 10.5842 22.8356C10.514 22.5514 10.3912 22.3706 10.1016 22.2501C9.74189 22.0951 9.59272 21.7593 9.57518 21.3719C9.52253 20.2267 9.6366 20.1062 10.7948 20.1062C11.2598 20.0976 11.7161 20.0976 12.1636 20.0976Z" fill="white"/>
                    <path d="M15.797 2.37749C15.9607 2.09679 16.117 1.81183 16.2879 1.53539C16.4794 1.22387 16.8069 1.13274 17.1036 1.29629C17.4002 1.45983 17.5042 1.80254 17.3316 2.11557C17.0075 2.68825 16.6721 3.26368 16.3334 3.82783C16.142 4.13935 15.8039 4.21494 15.5154 4.03736C15.2269 3.85978 15.1367 3.5439 15.3175 3.21683C15.4665 2.9276 15.6375 2.65117 15.797 2.37749Z" fill="white" stroke="white"/>
                    <path d="M6.84528 2.9861C6.67344 2.71035 6.49443 2.43907 6.32978 2.15883C6.14365 1.84413 6.21598 1.51194 6.49911 1.32594C6.78225 1.13994 7.13388 1.20795 7.33008 1.5068C7.68523 2.06073 8.03748 2.62604 8.37826 3.18892C8.56438 3.50363 8.47339 3.83788 8.18167 4.01009C7.88994 4.1823 7.56846 4.11465 7.36366 3.802C7.17746 3.5352 7.01281 3.25497 6.84528 2.9861Z" fill="white" stroke="white"/>
                    <path d="M2.51119 9.64324C2.20306 9.54015 1.89225 9.44509 1.58682 9.33397C1.24286 9.20996 1.08699 8.90783 1.18674 8.58408C1.28649 8.26034 1.60086 8.08876 1.94249 8.19413C2.56912 8.39486 3.20078 8.6062 3.82204 8.82298C4.166 8.94699 4.3088 9.26261 4.19364 9.5812C4.07848 9.89979 3.78757 10.0524 3.43054 9.94191C3.11705 9.85488 2.81161 9.74376 2.51119 9.64324Z" fill="white" stroke="white"/>
                    <path d="M21.8664 9.62785C22.1759 9.52899 22.4879 9.4382 22.7949 9.33128C23.1405 9.212 23.3005 8.91203 23.2052 8.58695C23.1099 8.26187 22.7979 8.08599 22.4549 8.18666C21.8255 8.37878 21.191 8.58144 20.5669 8.78969C20.2212 8.90897 20.0741 9.22259 20.1849 9.54273C20.2957 9.86287 20.5845 10.0195 20.943 9.91388C21.2576 9.83115 21.5646 9.72423 21.8664 9.62785Z" fill="white" stroke="white"/>
                    <path d="M3.46403 15.7904C3.76081 15.6272 4.05368 15.457 4.35437 15.3009C4.71091 15.1235 5.00555 15.2025 5.17382 15.5086C5.33425 15.8004 5.23607 16.1139 4.89869 16.3087C4.30904 16.6421 3.7229 16.9643 3.12543 17.2835C2.77281 17.468 2.41017 17.3708 2.26457 17.0708C2.1268 16.785 2.24765 16.4776 2.58112 16.2757C2.60337 16.2635 2.63305 16.2472 2.65531 16.2349C2.92241 16.0881 3.18951 15.9413 3.46403 15.7904Z" fill="white" stroke="white"/>
                    <path d="M20.9867 15.7904C20.6899 15.6272 20.397 15.457 20.0963 15.3009C19.7398 15.1235 19.4451 15.2025 19.2769 15.5086C19.1164 15.8004 19.2146 16.1139 19.552 16.3087C20.1416 16.6421 20.7278 16.9643 21.3252 17.2835C21.6779 17.468 22.0405 17.3708 22.1861 17.0708C22.3239 16.785 22.203 16.4776 21.8696 16.2757C21.8473 16.2635 21.8176 16.2472 21.7954 16.2349C21.5283 16.0881 21.2612 15.9413 20.9867 15.7904Z" fill="white" stroke="white"/>
                  </svg>

                  <b class="copyright">Giới thiệu</b>
                </div>
                <div class="ch1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6 17H11V15H6V17ZM16 17H18V15H16V17ZM6 13H11V11H6V13ZM16 13H18V7H16V13ZM6 9H11V7H6V9ZM4 21C3.45 21 2.979 20.804 2.587 20.412C2.195 20.02 1.99934 19.5493 2 19V5C2 4.45 2.196 3.979 2.588 3.587C2.98 3.195 3.45067 2.99934 4 3H20C20.55 3 21.021 3.196 21.413 3.588C21.805 3.98 22.0007 4.45067 22 5V19C22 19.55 21.804 20.021 21.412 20.413C21.02 20.805 20.5493 21.0007 20 21H4Z" fill="#0054A6"/>
                  </svg>

                  <div class="m-thc">Tin tức</div>
                </div>
                <div class="ch1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M19 4H17V2H15V4H9V2H7V4H5C3.897 4 3 4.897 3 6V20C3 21.103 3.897 22 5 22H19C20.103 22 21 21.103 21 20V6C21 4.897 20.103 4 19 4ZM18 19H12V13H18V19ZM19 9H5V7H19V9Z" fill="#0054A6"/>
                  </svg>

                  <div class="m-thc">Sự kiện</div>
                </div>
                <div class="ch1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M14.9998 19C15 19.5046 14.8094 19.9906 14.4664 20.3605C14.1233 20.7305 13.653 20.9572 13.1498 20.995L12.9998 21H10.9998C10.4953 21.0002 10.0093 20.8096 9.6393 20.4665C9.26932 20.1234 9.04269 19.6532 9.00485 19.15L8.99985 19H14.9998ZM11.9998 2C13.8148 1.99997 15.5589 2.70489 16.8641 3.96607C18.1693 5.22726 18.9336 6.94609 18.9958 8.76L18.9998 9V12.764L20.8218 16.408C20.9014 16.567 20.9412 16.7429 20.9378 16.9206C20.9345 17.0984 20.8881 17.2727 20.8027 17.4286C20.7173 17.5845 20.5953 17.7174 20.4473 17.8158C20.2993 17.9143 20.1297 17.9754 19.9528 17.994L19.8378 18H4.16185C3.98401 18.0001 3.80882 17.957 3.65127 17.8745C3.49372 17.792 3.35853 17.6725 3.25727 17.5264C3.156 17.3802 3.0917 17.2116 3.06985 17.0351C3.04801 16.8586 3.06928 16.6795 3.13185 16.513L3.17785 16.408L4.99985 12.764V9C4.99985 7.14348 5.73735 5.36301 7.0501 4.05025C8.36286 2.7375 10.1433 2 11.9998 2Z" fill="#0054A6"/>
                  </svg>

                  <div class="m-thc">Thông báo</div>
                </div>
                <div class="ch1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6 12H18V10H6V12ZM6 16H14V14H6V16ZM4 20C3.45 20 2.979 19.804 2.587 19.412C2.195 19.02 1.99934 18.5493 2 18V6C2 5.45 2.196 4.979 2.588 4.587C2.98 4.195 3.45067 3.99934 4 4H10L12 6H20C20.55 6 21.021 6.196 21.413 6.588C21.805 6.98 22.0007 7.45067 22 8V18C22 18.55 21.804 19.021 21.412 19.413C21.02 19.805 20.5493 20.0007 20 20H4Z" fill="#0054A6"/>
                  </svg>

                  <div class="m-thc">Tin cổ đông</div>
                </div>
                <div class="ch1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 4.5C12.9283 4.5 13.8185 4.86875 14.4749 5.52513C15.1313 6.1815 15.5 7.07174 15.5 8C15.5 8.92826 15.1313 9.8185 14.4749 10.4749C13.8185 11.1313 12.9283 11.5 12 11.5C11.0717 11.5 10.1815 11.1313 9.52513 10.4749C8.86875 9.8185 8.5 8.92826 8.5 8C8.5 7.07174 8.86875 6.1815 9.52513 5.52513C10.1815 4.86875 11.0717 4.5 12 4.5ZM5 7C5.56 7 6.08 7.15 6.53 7.42C6.38 8.85 6.8 10.27 7.66 11.38C7.16 12.34 6.16 13 5 13C4.20435 13 3.44129 12.6839 2.87868 12.1213C2.31607 11.5587 2 10.7956 2 10C2 9.20435 2.31607 8.44129 2.87868 7.87868C3.44129 7.31607 4.20435 7 5 7ZM19 7C19.7956 7 20.5587 7.31607 21.1213 7.87868C21.6839 8.44129 22 9.20435 22 10C22 10.7956 21.6839 11.5587 21.1213 12.1213C20.5587 12.6839 19.7956 13 19 13C17.84 13 16.84 12.34 16.34 11.38C17.2119 10.2544 17.6166 8.8362 17.47 7.42C17.92 7.15 18.44 7 19 7ZM5.5 17.25C5.5 15.18 8.41 13.5 12 13.5C15.59 13.5 18.5 15.18 18.5 17.25V19H5.5V17.25ZM0 19V17.5C0 16.11 1.89 14.94 4.45 14.6C3.86 15.28 3.5 16.22 3.5 17.25V19H0ZM24 19H20.5V17.25C20.5 16.22 20.14 15.28 19.55 14.6C22.11 14.94 24 16.11 24 17.5V19Z" fill="#0054A6"/>
                  </svg>

                  <div class="m-thc">Hoạt động đoàn thể</div>
                </div>
                {{-- <div class="icons-parent3">
                  <img class="icons" alt="" src="./public/icons12.svg" />

                  <div class="m-thc">Ẩm thực</div>
                </div> --}}
              </div>
              <img
                class="filters-packs-child"
                alt=""
                src="./public/frame-81.svg"
              />
            </div>
            <div class="filters-packs1">
              <div class="search">
                <div class="search1">
                  <div class="div65">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M17.2959 17.3333L21.2959 21.3333" stroke="#0054A6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M19.2959 11.3333C19.2959 15.7516 15.7142 19.3333 11.2959 19.3333C6.87762 19.3333 3.2959 15.7516 3.2959 11.3333C3.2959 6.91497 6.87762 3.33325 11.2959 3.33325C15.7142 3.33325 19.2959 6.91497 19.2959 11.3333Z" stroke="#0054A6" stroke-width="2"/>
                    </svg>

                    <div class="tm-kim">Tìm kiếm</div>
                  </div>
                  <img
                    class="icons-search"
                    alt=""
                    src="./public/icons-search.svg"
                  />
                </div>
                <div class="drop">
                  <div class="m-thc">Tìm kiếm gần đây:</div>
                  <div class="items">
                    <div class="lastest-search">
                      <div class="content">
                        <div class="content1">Công Viên Văn Hóa Đầm Sen</div>
                      </div>
                      <img class="icons" alt="" src="./public/icons14.svg" />
                    </div>
                    <div class="lastest-search">
                      <div class="content">
                        <div class="content1">KDLST Vàm Sát</div>
                      </div>
                      <img class="icons" alt="" src="./public/icons15.svg" />
                    </div>
                    <div class="lastest-search">
                      <div class="content">
                        <div class="content1">Công Viên Văn Hóa Đầm Sen</div>
                      </div>
                      <img class="icons" alt="" src="./public/icons16.svg" />
                    </div>
                    <div class="lastest-search">
                      <div class="content">
                        <div class="content1">Công Viên Văn Hóa Đầm Sen</div>
                      </div>
                      <img class="icons" alt="" src="./public/icons17.svg" />
                    </div>
                    <div class="lastest-search">
                      <div class="content">
                        <div class="content1">Công Viên Văn Hóa Đầm Sen</div>
                      </div>
                      <img class="icons" alt="" src="./public/icons18.svg" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="sort">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M7 4V20M7 20L3 16M7 20L11 16M17 4V20M17 4L21 8M17 4L13 8" stroke="#0054A6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <div class="m-thc">A đến Z</div>
              </div>
              <div class="thi-gian-parent">
                <div class="thi-gian">Thời gian</div>
                <div class="date-picker">
                  <div class="date-picker1">
                    <div class="n-lt-xem-wrapper">
                      <div class="ng-s-2-container">10/10/2021</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M16.75 3.33783V1.75904C16.75 1.3441 16.41 1 16 1C15.59 1 15.25 1.3441 15.25 1.75904V3.27711H8.75V1.75904C8.75 1.3441 8.41 1 8 1C7.59 1 7.25 1.3441 7.25 1.75904V3.33783C4.55 3.59084 3.24 5.22024 3.04 7.63904C3.02 7.93253 3.26 8.17542 3.54 8.17542H20.46C20.75 8.17542 20.99 7.92241 20.96 7.63904C20.76 5.22024 19.45 3.59084 16.75 3.33783ZM20 9.69349H4C3.45 9.69349 3 10.1489 3 10.7055V16.9398C3 19.9759 4.5 22 8 22H16C19.5 22 21 19.9759 21 16.9398V10.7055C21 10.1489 20.55 9.69349 20 9.69349ZM9.21 18.1643C9.16 18.2048 9.11 18.2554 9.06 18.2858C9 18.3263 8.94 18.3566 8.88 18.3769C8.82 18.4072 8.76 18.4275 8.7 18.4376C8.63 18.4477 8.57 18.4578 8.5 18.4578C8.37 18.4578 8.24 18.4275 8.12 18.3769C7.99 18.3263 7.89 18.2554 7.79 18.1643C7.61 17.972 7.5 17.7089 7.5 17.4458C7.5 17.1827 7.61 16.9195 7.79 16.7272C7.89 16.6361 7.99 16.5653 8.12 16.5147C8.3 16.4337 8.5 16.4135 8.7 16.454C8.76 16.4641 8.82 16.4843 8.88 16.5147C8.94 16.5349 9 16.5653 9.06 16.6058L9.21 16.7272C9.39 16.9195 9.5 17.1827 9.5 17.4458C9.5 17.7089 9.39 17.972 9.21 18.1643ZM9.21 14.6222C9.02 14.8043 8.76 14.9157 8.5 14.9157C8.24 14.9157 7.98 14.8043 7.79 14.6222C7.61 14.4299 7.5 14.1667 7.5 13.9036C7.5 13.6405 7.61 13.3773 7.79 13.1851C8.07 12.9017 8.51 12.8106 8.88 12.9725C9.01 13.0231 9.12 13.094 9.21 13.1851C9.39 13.3773 9.5 13.6405 9.5 13.9036C9.5 14.1667 9.39 14.4299 9.21 14.6222ZM12.71 18.1643C12.52 18.3465 12.26 18.4578 12 18.4578C11.74 18.4578 11.48 18.3465 11.29 18.1643C11.11 17.972 11 17.7089 11 17.4458C11 17.1827 11.11 16.9195 11.29 16.7272C11.66 16.3528 12.34 16.3528 12.71 16.7272C12.89 16.9195 13 17.1827 13 17.4458C13 17.7089 12.89 17.972 12.71 18.1643ZM12.71 14.6222L12.56 14.7436C12.5 14.7841 12.44 14.8145 12.38 14.8347C12.32 14.8651 12.26 14.8853 12.2 14.8954C12.13 14.9055 12.07 14.9157 12 14.9157C11.74 14.9157 11.48 14.8043 11.29 14.6222C11.11 14.4299 11 14.1667 11 13.9036C11 13.6405 11.11 13.3773 11.29 13.1851C11.38 13.094 11.49 13.0231 11.62 12.9725C11.99 12.8106 12.43 12.9017 12.71 13.1851C12.89 13.3773 13 13.6405 13 13.9036C13 14.1667 12.89 14.4299 12.71 14.6222ZM16.21 18.1643C16.02 18.3465 15.76 18.4578 15.5 18.4578C15.24 18.4578 14.98 18.3465 14.79 18.1643C14.61 17.972 14.5 17.7089 14.5 17.4458C14.5 17.1827 14.61 16.9195 14.79 16.7272C15.16 16.3528 15.84 16.3528 16.21 16.7272C16.39 16.9195 16.5 17.1827 16.5 17.4458C16.5 17.7089 16.39 17.972 16.21 18.1643ZM16.21 14.6222L16.06 14.7436C16 14.7841 15.94 14.8145 15.88 14.8347C15.82 14.8651 15.76 14.8853 15.7 14.8954C15.63 14.9055 15.56 14.9157 15.5 14.9157C15.24 14.9157 14.98 14.8043 14.79 14.6222C14.61 14.4299 14.5 14.1667 14.5 13.9036C14.5 13.6405 14.61 13.3773 14.79 13.1851C14.89 13.094 14.99 13.0231 15.12 12.9725C15.3 12.8916 15.5 12.8713 15.7 12.9118C15.76 12.9219 15.82 12.9422 15.88 12.9725C15.94 12.9928 16 13.0231 16.06 13.0636L16.21 13.1851C16.39 13.3773 16.5 13.6405 16.5 13.9036C16.5 14.1667 16.39 14.4299 16.21 14.6222Z" fill="#0054A6"/>
                    </svg>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8" fill="none">
                    <path d="M5.51129 3.13807L3.96467 2.01241L1.44455 0.178209C0.910697 -0.20463 0 0.0696425 0 0.618188V4.17802V7.38359C0 7.93213 0.910697 8.20641 1.44455 7.81785L5.51129 4.85799C6.1629 4.38944 6.1629 3.61233 5.51129 3.13807Z" fill="#0054A6"/>
                  </svg>

                  <div class="date-picker1">
                    <div class="n-lt-xem-wrapper">
                      <div class="ng-s-2-container">10/10/2021</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M16.75 3.33783V1.75904C16.75 1.3441 16.41 1 16 1C15.59 1 15.25 1.3441 15.25 1.75904V3.27711H8.75V1.75904C8.75 1.3441 8.41 1 8 1C7.59 1 7.25 1.3441 7.25 1.75904V3.33783C4.55 3.59084 3.24 5.22024 3.04 7.63904C3.02 7.93253 3.26 8.17542 3.54 8.17542H20.46C20.75 8.17542 20.99 7.92241 20.96 7.63904C20.76 5.22024 19.45 3.59084 16.75 3.33783ZM20 9.69349H4C3.45 9.69349 3 10.1489 3 10.7055V16.9398C3 19.9759 4.5 22 8 22H16C19.5 22 21 19.9759 21 16.9398V10.7055C21 10.1489 20.55 9.69349 20 9.69349ZM9.21 18.1643C9.16 18.2048 9.11 18.2554 9.06 18.2858C9 18.3263 8.94 18.3566 8.88 18.3769C8.82 18.4072 8.76 18.4275 8.7 18.4376C8.63 18.4477 8.57 18.4578 8.5 18.4578C8.37 18.4578 8.24 18.4275 8.12 18.3769C7.99 18.3263 7.89 18.2554 7.79 18.1643C7.61 17.972 7.5 17.7089 7.5 17.4458C7.5 17.1827 7.61 16.9195 7.79 16.7272C7.89 16.6361 7.99 16.5653 8.12 16.5147C8.3 16.4337 8.5 16.4135 8.7 16.454C8.76 16.4641 8.82 16.4843 8.88 16.5147C8.94 16.5349 9 16.5653 9.06 16.6058L9.21 16.7272C9.39 16.9195 9.5 17.1827 9.5 17.4458C9.5 17.7089 9.39 17.972 9.21 18.1643ZM9.21 14.6222C9.02 14.8043 8.76 14.9157 8.5 14.9157C8.24 14.9157 7.98 14.8043 7.79 14.6222C7.61 14.4299 7.5 14.1667 7.5 13.9036C7.5 13.6405 7.61 13.3773 7.79 13.1851C8.07 12.9017 8.51 12.8106 8.88 12.9725C9.01 13.0231 9.12 13.094 9.21 13.1851C9.39 13.3773 9.5 13.6405 9.5 13.9036C9.5 14.1667 9.39 14.4299 9.21 14.6222ZM12.71 18.1643C12.52 18.3465 12.26 18.4578 12 18.4578C11.74 18.4578 11.48 18.3465 11.29 18.1643C11.11 17.972 11 17.7089 11 17.4458C11 17.1827 11.11 16.9195 11.29 16.7272C11.66 16.3528 12.34 16.3528 12.71 16.7272C12.89 16.9195 13 17.1827 13 17.4458C13 17.7089 12.89 17.972 12.71 18.1643ZM12.71 14.6222L12.56 14.7436C12.5 14.7841 12.44 14.8145 12.38 14.8347C12.32 14.8651 12.26 14.8853 12.2 14.8954C12.13 14.9055 12.07 14.9157 12 14.9157C11.74 14.9157 11.48 14.8043 11.29 14.6222C11.11 14.4299 11 14.1667 11 13.9036C11 13.6405 11.11 13.3773 11.29 13.1851C11.38 13.094 11.49 13.0231 11.62 12.9725C11.99 12.8106 12.43 12.9017 12.71 13.1851C12.89 13.3773 13 13.6405 13 13.9036C13 14.1667 12.89 14.4299 12.71 14.6222ZM16.21 18.1643C16.02 18.3465 15.76 18.4578 15.5 18.4578C15.24 18.4578 14.98 18.3465 14.79 18.1643C14.61 17.972 14.5 17.7089 14.5 17.4458C14.5 17.1827 14.61 16.9195 14.79 16.7272C15.16 16.3528 15.84 16.3528 16.21 16.7272C16.39 16.9195 16.5 17.1827 16.5 17.4458C16.5 17.7089 16.39 17.972 16.21 18.1643ZM16.21 14.6222L16.06 14.7436C16 14.7841 15.94 14.8145 15.88 14.8347C15.82 14.8651 15.76 14.8853 15.7 14.8954C15.63 14.9055 15.56 14.9157 15.5 14.9157C15.24 14.9157 14.98 14.8043 14.79 14.6222C14.61 14.4299 14.5 14.1667 14.5 13.9036C14.5 13.6405 14.61 13.3773 14.79 13.1851C14.89 13.094 14.99 13.0231 15.12 12.9725C15.3 12.8916 15.5 12.8713 15.7 12.9118C15.76 12.9219 15.82 12.9422 15.88 12.9725C15.94 12.9928 16 13.0231 16.06 13.0636L16.21 13.1851C16.39 13.3773 16.5 13.6405 16.5 13.9036C16.5 14.1667 16.39 14.4299 16.21 14.6222Z" fill="#0054A6"/>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a href="{{ URL::to('/postDetail/'.$firstPost->postID) }}">
          <div class="sliders">
            
            <div class="text41"></div>
            <div class="img12">
              <img class="icon" alt="" src="{{ ('/frontend/img/img01.png') }}" />

              <img class="icon1" alt="" src="./public/9@2x.png" />

              <img class="icon2" alt="" src="./public/8@2x.png" />

              <img class="icon3" alt="" src="./public/10@2x.png" />

              <img class="icon4" alt="" src="./public/7@2x.png" />

              <img class="icon5" alt="" src="./public/11@2x.png" />
            </div>
            <div class="btn">
              <img
                class="vuesaxlinearcopyright-icon"
                alt=""
                src="./public/01.svg"
              />

              <div class="div68"></div>
              <div class="div68"></div>
              <div class="div68"></div>
            </div>
            <div class="prev-next-icon-parent">
              <img
                class="prev-next-icon"
                alt=""
                src="./public/prev-next-icon.svg"
              />

              <img
                class="prev-next-icon"
                alt=""
                src="./public/prev-next-icon1.svg"
              />
            </div>
            <div class="thng-bo-mi-cho-gi-cnh-tr-parent">
              <b class="thng-bo-mi">{{ $firstPost ->title }}</b
              >
              <div class="thng-bo-mi1">
                {{ $firstPost ->content }}
              </div>
            </div>
          </div>
        </a>
          <div class="frame-parent16">
            <div class="frame-wrapper1">
              <div class="frame-parent15">
                <div class="icons-parent2">
                  <img class="icons" alt="" src="./public/icons21.svg" />

                  <b class="copyright">Bộ lọc</b>
                </div>
                <img class="icons6" alt="" src="./public/icons22.svg" />
              </div>
            </div>
            <b class="bi-mi-nht">Bài mới nhất</b>

            
            <div class="mini-tag-parent" id="frameContainer1">
              @foreach($allPost as $post)
              <a href="{{ URL::to('/postDetail/'.$post->postID) }}">
                <div class="mini-tag">
                  <img class="img-icon12" alt="" src="./public/img@2x.png" />

                  <div class="content10">
                    <b class="title">{{ $post->title }}</b>
                    <div class="frame-parent18">
                      <div class="n-lt-xem-wrapper">
                        <div class="copyright">10k views</div>
                      </div>
                      <div class="day-child"></div>
                      <div class="wrapper">
                        <div class="copyright">{{ \Carbon\Carbon::parse($post->updated_at)->format('d/m/Y') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              @endforeach
              
            </div>
            <div class="frame-child19"></div>
          </div>
        </div>
      </div>
      <div class="navigation">
        <img
          class="material-symbolsmenu-rounded-icon"
          alt=""
          src="./public/materialsymbolsmenurounded.svg"
        />

        <div class="component-13">
          <a class="ti-liu" href="/main">Trang chủ</a>
        </div>
        <div class="nav-bar-item" id="navBarItemContainer">
          <a class="ti-liu" href="/posts2" >Bài viết<a>
        </div>
        <div class="logo-ngang1" id="logoNgangContainer">
          <svg xmlns="http://www.w3.org/2000/svg" width="115" height="73" viewBox="0 0 115 73" fill="none">
            <path d="M93.9478 36.096C93.9478 56.0312 77.7871 72.1919 57.8518 72.1919C37.9166 72.1919 21.7559 56.0312 21.7559 36.096C21.7559 16.1607 37.9166 0 57.8518 0C77.7871 0 93.9478 16.1607 93.9478 36.096Z" fill="#0054A6"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M57.8518 70.5697C76.8911 70.5697 92.3255 55.1353 92.3255 36.096C92.3255 17.0567 76.8911 1.62229 57.8518 1.62229C38.8125 1.62229 23.3782 17.0567 23.3782 36.096C23.3782 55.1353 38.8125 70.5697 57.8518 70.5697ZM57.8518 72.1919C77.7871 72.1919 93.9478 56.0312 93.9478 36.096C93.9478 16.1607 77.7871 0 57.8518 0C37.9166 0 21.7559 16.1607 21.7559 36.096C21.7559 56.0312 37.9166 72.1919 57.8518 72.1919Z" fill="white"/>
            <path d="M41.608 24.3649L1 46.0225L35.7424 35.1937L73.1919 48.2785L114.251 26.6209L79.0575 37.9009L41.608 24.3649Z" fill="white" stroke="#0054A6" stroke-width="0.811145" stroke-linejoin="round"/>
          </svg>        </div>
        <div class="nav-bar-item1">
          <a class="ti-liu" href="/docs">Tài liệu</a>
        </div>
        <div class="nav-bar-item2">
          <a class="ti-liu" href="/rec">Tuyển dụng</a>
        </div>
      </div>
    </div>


    <script>
      var frameContainer1 = document.getElementById("frameContainer1");
      if (frameContainer1) {
        frameContainer1.addEventListener("click", function (e) {
          // Please sync "2.1 Chi tiết bài viết" to the project
        });
      }
      
      var navBarItemContainer = document.getElementById("navBarItemContainer");
      if (navBarItemContainer) {
        navBarItemContainer.addEventListener("click", function (e) {
          window.location.href = "bi-vit.html";
        });
      }
      
      var logoNgangContainer = document.getElementById("logoNgangContainer");
      if (logoNgangContainer) {
        logoNgangContainer.addEventListener("click", function (e) {
          // Please sync "1. Trang chủ" to the project
        });
      }
      </script>
</html>

