@extends('layout/header')
@section('content')

<div class="main-content-wrapper">
    <div class="main-content">
        <div class="tuyn-dng">
            <main class="header">
              <section class="bg">

                    <div class="page-content">
                        <div class="vector-parent">
                        <h1 class="ti-liu5">Tuyển dụng </h1>
                        </div>
                    </div>  
                </section>
            </main>
        </div>
        <section class="filters">
            <div class="filters-container">
              <div class="filters-packs">
                <img
                  class="filters-packs-child"
                  alt=""
                  src="./public/frame-8-1.svg"
                />
  
                <div class="filters1">
                  <div class="search">
                    <div class="search1">
                      <div class="search-icon-container">
                        <img class="icons" alt="" src="./public/icons.svg" />
  
                        <input
                          class="search-placeholder"
                          placeholder="Tìm kiếm"
                          type="text"
                        />
                      </div>
                      <img
                        class="icons-search"
                        alt=""
                        src="./public/icons-search.svg"
                      />
                    </div>
                    <div class="drop">
                      <div class="tm-kim-gn">Tìm kiếm gần đây:</div>
                      <div class="items">
                        <div class="lastest-search">
                          <div class="content1">
                            <div class="content2">Công Viên Văn Hóa Đầm Sen</div>
                          </div>
                          <img class="icons1" alt="" src="./public/icons-1.svg" />
                        </div>
                        <div class="lastest-search1">
                          <div class="content3">
                            <div class="content4">KDLST Vàm Sát</div>
                          </div>
                          <img class="icons2" alt="" src="./public/icons-2.svg" />
                        </div>
                        <div class="lastest-search2">
                          <div class="content5">
                            <div class="content6">Công Viên Văn Hóa Đầm Sen</div>
                          </div>
                          <img class="icons3" alt="" src="./public/icons-3.svg" />
                        </div>
                        <div class="lastest-search3">
                          <div class="content7">
                            <div class="content8">Công Viên Văn Hóa Đầm Sen</div>
                          </div>
                          <img class="icons4" alt="" src="./public/icons-4.svg" />
                        </div>
                        <div class="lastest-search4">
                          <div class="content9">
                            <div class="content10">Công Viên Văn Hóa Đầm Sen</div>
                          </div>
                          <img class="icons5" alt="" src="./public/icons-5.svg" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <img class="divider-icon" alt="" src="./public/divider.svg" />
  
                  <div class="field-option-parent">
                    <div class="field-option">
                      <img
                        class="icons6"
                        loading="lazy"
                        alt=""
                        src="./public/icons-6.svg"
                      />
  
                      <h3 class="lnh-vc">Lĩnh vực</h3>
                      <div class="divider-wrapper">
                        <img
                          class="divider-icon1"
                          alt=""
                          src="./public/divider.svg"
                        />
                      </div>
                    </div>
                    <div class="chips-filter">
                      <div class="chips-container">
                        <div class="chips">
                          <div class="div">
                            <div class="text">Hướng dẫn viên</div>
                          </div>
                        </div>
                        <button class="chips1">
                          <div class="div1">
                            <div class="text1">Kinh doanh</div>
                          </div>
                        </button>
                      </div>
                      <div class="chips-container1">
                        <div class="chips2">
                          <div class="div2">
                            <div class="text2">Kĩ sư xây dựng</div>
                          </div>
                        </div>
                        <button class="chips3">
                          <div class="div3">
                            <div class="text3">Nhân viên kế toán</div>
                          </div>
                        </button>
                      </div>
                      <div class="chips-container2">
                        <button class="chips4">
                          <div class="div4">
                            <div class="text4">Nhân viên kĩ thuật</div>
                          </div>
                        </button>
                        <button class="chips5">
                          <div class="div5">
                            <div class="text5">Nhân viên phục vụ</div>
                          </div>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="filter-options">
                    <div class="work-type-option">
                      <img
                        class="icons7"
                        loading="lazy"
                        alt=""
                        src="./public/icons-7@2x.png"
                      />
  
                      <h3 class="hnh-thc-lm">Hình thức làm việc</h3>
                      <div class="divider-container">
                        <img
                          class="divider-icon2"
                          alt=""
                          src="./public/vector-6-1.svg"
                        />
                      </div>
                    </div>
                    <div class="chips-container-parent">
                      <div class="chips-container3">
                        <div class="chips6">
                          <div class="div6">
                            <div class="text6">Bán thời gian</div>
                          </div>
                        </div>
                        <div class="chips7">
                          <div class="div7">
                            <div class="text7">Nhân viên chính thức</div>
                          </div>
                        </div>
                      </div>
                      <div class="chips-container4">
                        <div class="chips8">
                          <div class="div8">
                            <div class="text8">Theo ca</div>
                          </div>
                        </div>
                        <div class="chips9">
                          <div class="div9">
                            <div class="text9">Thực tập</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="location-filter">
                  <img
                    class="icons8"
                    loading="lazy"
                    alt=""
                    src="./public/icons-8.svg"
                  />
  
                  <h3 class="ni-lm-vic">Nơi làm việc</h3>
                </div>
                <div class="chips-container-group">
                  <div class="chips-container5">
                    <div class="chips10">
                      <div class="div10">
                        <div class="text10">Cà Phê Vườn Đá</div>
                      </div>
                    </div>
                    <div class="chips11">
                      <div class="div11">
                        <div class="text11">NH Thủy Tạ Đầm Sen</div>
                      </div>
                    </div>
                  </div>
                  <div class="chips-container6">
                    <div class="chips12">
                      <div class="div12">
                        <div class="text12">CVVH Đầm Sen</div>
                      </div>
                    </div>
                    <div class="chips13">
                      <div class="div13">
                        <div class="text13">Khách sạn Ngọc Lan</div>
                      </div>
                    </div>
                  </div>
                  <div class="chips-container7">
                    <div class="chips14">
                      <div class="div14">
                        <div class="text14">Khách sạn Phú Thọ</div>
                      </div>
                    </div>
                    <div class="chips15">
                      <div class="div15">
                        <div class="text15">KDL Sinh Thái Vàm Sát</div>
                      </div>
                    </div>
                  </div>
                  <div class="chips-container8">
                    <div class="chips16">
                      <div class="div16">
                        <div class="text16">Trung tâm DVDL Đầm Sen</div>
                      </div>
                    </div>
                    <div class="chips17">
                      <div class="div17">
                        <div class="text17">VP Phuthotourist</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="job-cards">
                <div class="card-tuyen-dung">
                  <div class="listing-content-parent">
                    <div class="listing-content">
                      <div class="card-content">
                        <div class="wrapper-card-item">
                          <img
                            class="card-item-icon"
                            loading="lazy"
                            alt=""
                            src="./public/frame.svg"
                          />
                        </div>
                        <div class="listing-body">
                          <div class="job-info">
                            <h3 class="nhn-vin-thit">
                              Nhân viên thiết kế đồ họa
                            </h3>
                            <div class="nhn-vin-chnh">Nhân viên chính thức</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-parent">
                      <div class="company-location-parent">
                        <div class="company-location">
                          <div class="company-item">
                            <div class="company-elements">
                              <img
                                class="icons9"
                                loading="lazy"
                                alt=""
                                src="./public/icons-9.svg"
                              />
  
                              <div class="cvvh-m-sen">CVVH Đầm Sen</div>
                            </div>
                            <div class="icons-parent">
                              <img
                                class="icons10"
                                loading="lazy"
                                alt=""
                                src="./public/icons-10.svg"
                              />
  
                              <div class="tun-trc">2 tuần trước</div>
                            </div>
                          </div>
                        </div>
                        <div class="description-preview">
                          <div class="text18">Đang tuyển</div>
                        </div>
                      </div>
                      <div class="job-description">
                        <div class="m-t-cng">Mô tả công việc:</div>
                        <div class="trung-tm-dch">
                          Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên
                          kinh doanh lữ hành. Yêu cầu: Tốt nghiệp CĐ, ĐH chuyên
                          ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý
                          ...
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="card-button">
                    <div class="xem-thm">Xem chi tiết</div>
                  </button>
                </div>
                <div class="card-tuyen-dung1">
                  <div class="frame-group">
                    <div class="frame-wrapper">
                      <div class="wrapper-frame-parent">
                        <div class="wrapper-frame">
                          <img
                            class="frame-icon"
                            loading="lazy"
                            alt=""
                            src="./public/frame-1.svg"
                          />
                        </div>
                        <div class="frame-container">
                          <div class="nhn-vin-thit-k-ha-parent">
                            <h3 class="nhn-vin-thit1">
                              Nhân viên thiết kế đồ họa
                            </h3>
                            <div class="nhn-vin-chnh1">Nhân viên chính thức</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-div">
                      <div class="frame-wrapper1">
                        <div class="frame-parent1">
                          <div class="frame-wrapper2">
                            <div class="frame-parent2">
                              <div class="icons-group">
                                <img
                                  class="icons11"
                                  loading="lazy"
                                  alt=""
                                  src="./public/icons-11.svg"
                                />
  
                                <div class="cvvh-m-sen1">CVVH Đầm Sen</div>
                              </div>
                              <div class="icons-container">
                                <img
                                  class="icons12"
                                  alt=""
                                  src="./public/icons-12.svg"
                                />
  
                                <div class="tun-trc1">2 tuần trước</div>
                              </div>
                            </div>
                          </div>
                          <div class="description-preview1">
                            <div class="text19">Đã hết hạn</div>
                          </div>
                        </div>
                      </div>
                      <div class="m-t-cng-vic-parent">
                        <div class="m-t-cng1">Mô tả công việc:</div>
                        <div class="trung-tm-dch1">
                          Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên
                          kinh doanh lữ hành. Yêu cầu: Tốt nghiệp CĐ, ĐH chuyên
                          ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý
                          ...
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="card-button1">
                    <div class="xem-thm1">Xem chi tiết</div>
                  </button>
                </div>
                <div class="card-tuyen-dung2">
                  <div class="frame-parent3">
                    <div class="frame-wrapper3">
                      <div class="wrapper-frame-group">
                        <div class="wrapper-frame1">
                          <img
                            class="frame-icon1"
                            loading="lazy"
                            alt=""
                            src="./public/frame-2.svg"
                          />
                        </div>
                        <div class="frame-wrapper4">
                          <div class="nhn-vin-thit-k-ha-group">
                            <h3 class="nhn-vin-thit2">
                              Nhân viên thiết kế đồ họa
                            </h3>
                            <div class="nhn-vin-chnh2">Nhân viên chính thức</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-parent4">
                      <div class="frame-parent5">
                        <div class="frame-wrapper5">
                          <div class="frame-parent6">
                            <div class="icons-parent1">
                              <img
                                class="icons13"
                                alt=""
                                src="./public/icons-9.svg"
                              />
  
                              <div class="cvvh-m-sen2">CVVH Đầm Sen</div>
                            </div>
                            <div class="icons-parent2">
                              <img
                                class="icons14"
                                alt=""
                                src="./public/icons-10.svg"
                              />
  
                              <div class="tun-trc2">2 tuần trước</div>
                            </div>
                          </div>
                        </div>
                        <div class="div18">
                          <div class="text20">Đang tuyển</div>
                        </div>
                      </div>
                      <div class="m-t-cng-vic-group">
                        <div class="m-t-cng2">Mô tả công việc:</div>
                        <div class="trung-tm-dch2">
                          Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên
                          kinh doanh lữ hành. Yêu cầu: Tốt nghiệp CĐ, ĐH chuyên
                          ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý
                          ...
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="card-button2">
                    <div class="xem-thm2">Xem chi tiết</div>
                  </button>
                </div>
                <div class="card-tuyen-dung3">
                  <div class="frame-parent7">
                    <div class="frame-wrapper6">
                      <div class="wrapper-frame-container">
                        <div class="wrapper-frame2">
                          <img
                            class="frame-icon2"
                            loading="lazy"
                            alt=""
                            src="./public/frame.svg"
                          />
                        </div>
                        <div class="frame-wrapper7">
                          <div class="nhn-vin-thit-k-ha-container">
                            <h3 class="nhn-vin-thit3">
                              Nhân viên thiết kế đồ họa
                            </h3>
                            <div class="nhn-vin-chnh3">Nhân viên chính thức</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-parent8">
                      <div class="frame-parent9">
                        <div class="frame-wrapper8">
                          <div class="frame-parent10">
                            <div class="icons-parent3">
                              <img
                                class="icons15"
                                loading="lazy"
                                alt=""
                                src="./public/icons-9.svg"
                              />
  
                              <div class="cvvh-m-sen3">CVVH Đầm Sen</div>
                            </div>
                            <div class="icons-parent4">
                              <img
                                class="icons16"
                                loading="lazy"
                                alt=""
                                src="./public/icons-10.svg"
                              />
  
                              <div class="tun-trc3">2 tuần trước</div>
                            </div>
                          </div>
                        </div>
                        <div class="div19">
                          <div class="text21">Đang tuyển</div>
                        </div>
                      </div>
                      <div class="m-t-cng-vic-container">
                        <div class="m-t-cng3">Mô tả công việc:</div>
                        <div class="trung-tm-dch3">
                          Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên
                          kinh doanh lữ hành. Yêu cầu: Tốt nghiệp CĐ, ĐH chuyên
                          ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý
                          ...
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="card-button3">
                    <div class="xem-thm3">Xem chi tiết</div>
                  </button>
                </div>
                <div class="card-tuyen-dung4">
                  <div class="frame-parent11">
                    <div class="frame-wrapper9">
                      <div class="wrapper-frame-parent1">
                        <div class="wrapper-frame3">
                          <img
                            class="frame-icon3"
                            loading="lazy"
                            alt=""
                            src="./public/frame-1.svg"
                          />
                        </div>
                        <div class="frame-wrapper10">
                          <div class="nhn-vin-thit-k-ha-parent1">
                            <h3 class="nhn-vin-thit4">
                              Nhân viên thiết kế đồ họa
                            </h3>
                            <div class="nhn-vin-chnh4">Nhân viên chính thức</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-parent12">
                      <div class="frame-parent13">
                        <div class="frame-wrapper11">
                          <div class="frame-parent14">
                            <div class="icons-parent5">
                              <img
                                class="icons17"
                                loading="lazy"
                                alt=""
                                src="./public/icons-11.svg"
                              />
  
                              <div class="cvvh-m-sen4">CVVH Đầm Sen</div>
                            </div>
                            <div class="icons-parent6">
                              <img
                                class="icons18"
                                loading="lazy"
                                alt=""
                                src="./public/icons-12.svg"
                              />
  
                              <div class="tun-trc4">2 tuần trước</div>
                            </div>
                          </div>
                        </div>
                        <div class="div20">
                          <div class="text22">Đang tuyển</div>
                        </div>
                      </div>
                      <div class="m-t-cng-vic-parent1">
                        <div class="m-t-cng4">Mô tả công việc:</div>
                        <div class="trung-tm-dch4">
                          Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên
                          kinh doanh lữ hành. Yêu cầu: Tốt nghiệp CĐ, ĐH chuyên
                          ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý
                          ...
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="card-button4">
                    <div class="xem-thm4">Xem chi tiết</div>
                  </button>
                </div>
                <div class="card-tuyen-dung5">
                  <div class="frame-parent15">
                    <div class="frame-wrapper12">
                      <div class="wrapper-frame-parent2">
                        <div class="wrapper-frame4">
                          <img
                            class="frame-icon4"
                            loading="lazy"
                            alt=""
                            src="./public/frame-2.svg"
                          />
                        </div>
                        <div class="frame-wrapper13">
                          <div class="nhn-vin-thit-k-ha-parent2">
                            <h3 class="nhn-vin-thit5">
                              Nhân viên thiết kế đồ họa
                            </h3>
                            <div class="nhn-vin-chnh5">Nhân viên chính thức</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-parent16">
                      <div class="frame-wrapper14">
                        <div class="frame-parent17">
                          <div class="frame-wrapper15">
                            <div class="frame-parent18">
                              <div class="icons-parent7">
                                <img
                                  class="icons19"
                                  alt=""
                                  src="./public/icons-9.svg"
                                />
  
                                <div class="cvvh-m-sen5">CVVH Đầm Sen</div>
                              </div>
                              <div class="icons-parent8">
                                <img
                                  class="icons20"
                                  alt=""
                                  src="./public/icons-10.svg"
                                />
  
                                <div class="tun-trc5">2 tuần trước</div>
                              </div>
                            </div>
                          </div>
                          <button class="button">
                            <div class="text23">Đã hết hạn</div>
                          </button>
                        </div>
                      </div>
                      <div class="m-t-cng-vic-parent2">
                        <div class="m-t-cng5">Mô tả công việc:</div>
                        <div class="trung-tm-dch5">
                          Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên
                          kinh doanh lữ hành. Yêu cầu: Tốt nghiệp CĐ, ĐH chuyên
                          ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý
                          ...
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="card-button5">
                    <div class="xem-thm5">Xem chi tiết</div>
                  </button>
                </div>
                <div class="card-tuyen-dung6">
                  <div class="frame-parent19">
                    <div class="frame-wrapper16">
                      <div class="wrapper-frame-parent3">
                        <div class="wrapper-frame5">
                          <img
                            class="frame-icon5"
                            loading="lazy"
                            alt=""
                            src="./public/frame.svg"
                          />
                        </div>
                        <div class="frame-wrapper17">
                          <div class="nhn-vin-thit-k-ha-parent3">
                            <h3 class="nhn-vin-thit6">
                              Nhân viên thiết kế đồ họa
                            </h3>
                            <div class="nhn-vin-chnh6">Nhân viên chính thức</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-parent20">
                      <div class="frame-wrapper18">
                        <div class="frame-parent21">
                          <div class="frame-wrapper19">
                            <div class="frame-parent22">
                              <div class="icons-parent9">
                                <img
                                  class="icons21"
                                  loading="lazy"
                                  alt=""
                                  src="./public/icons-9.svg"
                                />
  
                                <div class="cvvh-m-sen6">CVVH Đầm Sen</div>
                              </div>
                              <div class="icons-parent10">
                                <img
                                  class="icons22"
                                  loading="lazy"
                                  alt=""
                                  src="./public/icons-10.svg"
                                />
  
                                <div class="tun-trc6">2 tuần trước</div>
                              </div>
                            </div>
                          </div>
                          <button class="button1">
                            <div class="text24">Đã hết hạn</div>
                          </button>
                        </div>
                      </div>
                      <div class="m-t-cng-vic-parent3">
                        <div class="m-t-cng6">Mô tả công việc:</div>
                        <div class="trung-tm-dch6">
                          Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên
                          kinh doanh lữ hành. Yêu cầu: Tốt nghiệp CĐ, ĐH chuyên
                          ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý
                          ...
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="card-button6">
                    <div class="xem-thm6">Xem chi tiết</div>
                  </button>
                </div>
                <div class="card-tuyen-dung7">
                  <div class="frame-parent23">
                    <div class="frame-wrapper20">
                      <div class="wrapper-frame-parent4">
                        <div class="wrapper-frame6">
                          <img
                            class="frame-icon6"
                            loading="lazy"
                            alt=""
                            src="./public/frame-1.svg"
                          />
                        </div>
                        <div class="frame-wrapper21">
                          <div class="nhn-vin-thit-k-ha-parent4">
                            <h3 class="nhn-vin-thit7">
                              Nhân viên thiết kế đồ họa
                            </h3>
                            <div class="nhn-vin-chnh7">Nhân viên chính thức</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-parent24">
                      <div class="frame-parent25">
                        <div class="frame-wrapper22">
                          <div class="frame-parent26">
                            <div class="icons-parent11">
                              <img
                                class="icons23"
                                loading="lazy"
                                alt=""
                                src="./public/icons-11.svg"
                              />
  
                              <div class="cvvh-m-sen7">CVVH Đầm Sen</div>
                            </div>
                            <div class="icons-parent12">
                              <img
                                class="icons24"
                                loading="lazy"
                                alt=""
                                src="./public/icons-12.svg"
                              />
  
                              <div class="tun-trc7">2 tuần trước</div>
                            </div>
                          </div>
                        </div>
                        <div class="div21">
                          <div class="text25">Đang tuyển</div>
                        </div>
                      </div>
                      <div class="m-t-cng-vic-parent4">
                        <div class="m-t-cng7">Mô tả công việc:</div>
                        <div class="trung-tm-dch7">
                          Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên
                          kinh doanh lữ hành. Yêu cầu: Tốt nghiệp CĐ, ĐH chuyên
                          ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý
                          ...
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="card-button7">
                    <div class="xem-thm7">Xem chi tiết</div>
                  </button>
                </div>
                <div class="card-tuyen-dung8">
                  <div class="frame-parent27">
                    <div class="frame-wrapper23">
                      <div class="wrapper-frame-parent5">
                        <div class="wrapper-frame7">
                          <img
                            class="frame-icon7"
                            loading="lazy"
                            alt=""
                            src="./public/frame-2.svg"
                          />
                        </div>
                        <div class="frame-wrapper24">
                          <div class="nhn-vin-thit-k-ha-parent5">
                            <h3 class="nhn-vin-thit8">
                              Nhân viên thiết kế đồ họa
                            </h3>
                            <div class="nhn-vin-chnh8">Nhân viên chính thức</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-parent28">
                      <div class="frame-wrapper25">
                        <div class="frame-parent29">
                          <div class="frame-wrapper26">
                            <div class="frame-parent30">
                              <div class="icons-parent13">
                                <img
                                  class="icons25"
                                  loading="lazy"
                                  alt=""
                                  src="./public/icons-9.svg"
                                />
  
                                <div class="cvvh-m-sen8">CVVH Đầm Sen</div>
                              </div>
                              <div class="icons-parent14">
                                <img
                                  class="icons26"
                                  loading="lazy"
                                  alt=""
                                  src="./public/icons-10.svg"
                                />
  
                                <div class="tun-trc8">2 tuần trước</div>
                              </div>
                            </div>
                          </div>
                          <button class="button2">
                            <div class="text26">Đã hết hạn</div>
                          </button>
                        </div>
                      </div>
                      <div class="m-t-cng-vic-parent5">
                        <div class="m-t-cng8">Mô tả công việc:</div>
                        <div class="trung-tm-dch8">
                          Trung tâm dịch vụ du lịch Đầm Sen cần tuyển 2 Nhân viên
                          kinh doanh lữ hành. Yêu cầu: Tốt nghiệp CĐ, ĐH chuyên
                          ngành Du lich, QT kinh doanh, Marketing. Am hiểu tâm lý
                          ...
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="card-button8">
                    <div class="xem-thm8">Xem chi tiết</div>
                  </button>
                </div>
              </div>
            </div>
          </section>
    </div>
</div>

@endsection