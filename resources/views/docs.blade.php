@extends('layout/header')
@section('content')
    <div class="ti-liu">
      <main class="bg-parent">
        <section class="bg">
          
          <div class="main-content-wrapper">
            <div class="main-content">
              <div class="page-content">
                <div class="vector-parent">
                  <h1 class="ti-liu5">Tài liệu</h1>
                </div>
              </div>
              <div class="document-parent">
                {{-- -------------------------------------------------------- --}}
       
        
                <div class="document">
                  <img class="img-icon" alt="" src="{{ ('/frontend/img/img14.jpeg') }}" />

                  <div class="content">
                    <div class="document-titles">
                      <svg xmlns="http://www.w3.org/2000/svg" width="104" height="103" viewBox="0 0 104 103" fill="none">
                        <g clip-path="url(#clip0_3384_169)">
                        <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_3384_169">
                        <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </div>
                    <div class="title">
                      <b class="bo-co-ti-container">
                        <p class="bo-co-ti">{{ Str::limit($doc1st->title, 15, '...') }}</p>
                        <p class="nm-2022-2023">Năm 2022-2023</p>
                      </b>
                    </div>
                  </div>
                </div>

                {{-- ---------------------------------------------------------------- --}}
                <div class="document1">
                  <img class="img-icon1" alt="" src="{{ ('/frontend/img/img15.jpeg') }}" />

                  <div class="content1">
                    <div class="files-wrapper">
                      <svg xmlns="http://www.w3.org/2000/svg" width="104" height="103" viewBox="0 0 104 103" fill="none">
                        <g clip-path="url(#clip0_3384_169)">
                        <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_3384_169">
                        <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </div>
                    <div class="title1">
                      <b class="bo-co-ti-container1">
                        <p class="bo-co-ti1">{{ Str::limit($doc2nd->title, 15, '...') }}</p>
                        <p class="nm-2022-20231">năm 2022-2023</p>
                      </b>
                    </div>
                  </div>
                </div>
                {{-- ----------------------------------------------------------------- --}}
                <div class="document2">
                  <img class="img-icon2" alt="" src="{{ ('/frontend/img/img16.jpeg') }}" />
                  <div class="content2">
                    <div class="files-container">
                      <svg xmlns="http://www.w3.org/2000/svg" width="104" height="103" viewBox="0 0 104 103" fill="none">
                        <g clip-path="url(#clip0_3384_169)">
                        <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_3384_169">
                        <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </div>
                    <div class="title2">
                      <b class="bo-co-ti-container2">
                        <p class="bo-co-ti2">{{ Str::limit($doc3rd->title, 15, '...') }}</p>
                        <p class="nm-2022-20232">năm 2022-2023</p>
                      </b>
                    </div>
                  </div>
                </div>
                {{-- --------------------------------------------------------------------- --}}
                <div class="document3">
                  <img class="img-icon3" alt="" src="{{ ('/frontend/img/img13.jpeg') }}" />

                  <div class="content3">
                    <div class="files-frame">
                      <svg xmlns="http://www.w3.org/2000/svg" width="104" height="103" viewBox="0 0 104 103" fill="none">
                        <g clip-path="url(#clip0_3384_169)">
                        <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_3384_169">
                        <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </div>
                    <div class="title3">
                      <b class="bo-co-ti-container3">
                        <p class="bo-co-ti3">{{ Str::limit($doc4th->title, 15, '...') }}</p>
                        <p class="nm-2022-20233">năm 2022-2023</p>
                      </b>
                    </div>
                  </div>
                </div>
                {{-- --------------------------------------------------------------------- --}}

                <div class="document4">
                  <img class="img-icon4" alt="" src="{{ ('/frontend/img/img19.jpeg') }}" />

                  <div class="content4">
                    <div class="frame-div">
                      <svg xmlns="http://www.w3.org/2000/svg" width="104" height="103" viewBox="0 0 104 103" fill="none">
                        <g clip-path="url(#clip0_3384_169)">
                        <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_3384_169">
                        <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </div>
                    <div class="title4">
                      <b class="bo-co-ti-container4">
                        <p class="bo-co-ti4">{{ Str::limit($doc5th->title, 15, '...') }}</p>
                        <p class="nm-2022-20234">năm 2022-2023</p>
                      </b>
                    </div>
                  </div>
                </div>
                 {{-- --------------------------------------------------------------------- --}}
                <div class="document5">
                  <img class="img-icon5" alt="" src="{{ ('/frontend/img/img20.jpeg') }}" />

                  <div class="content5">
                    <div class="files-wrapper1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="104" height="103" viewBox="0 0 104 103" fill="none">
                        <g clip-path="url(#clip0_3384_169)">
                        <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_3384_169">
                        <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </div>
                    <div class="title5">
                      <b class="bo-co-ti-container5">
                        <p class="bo-co-ti5">{{ Str::limit($doc6th->title, 15, '...') }}</p>
                        <p class="nm-2022-20235">năm 2022-2023</p>
                      </b>
                    </div>
                  </div>
                </div>
                 {{-- --------------------------------------------------------------------- --}}
                <div class="document6">
                  <img class="img-icon6" alt="" src="{{ ('/frontend/img/img18.jpeg') }}" />

                  <div class="content6">
                    <div class="files-wrapper2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="104" height="103" viewBox="0 0 104 103" fill="none">
                        <g clip-path="url(#clip0_3384_169)">
                        <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_3384_169">
                        <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </div>
                    <div class="title6">
                      <b class="bo-co-ti-container6">
                        <p class="bo-co-ti6">{{ Str::limit($doc7th->title, 15, '...') }}</p>
                        <p class="nm-2022-20236">Năm 2022-2023</p>
                      </b>
                    </div>
                  </div>

                </div>
                {{-- --------------------------------------------------------------------- --}}

                <div class="document7">
                  <img class="img-icon7" alt="" src="{{ ('/frontend/img/img14.jpeg') }}" />
                  <div class="content7">
                    <div class="files-wrapper3">
                      <svg xmlns="http://www.w3.org/2000/svg" width="104" height="103" viewBox="0 0 104 103" fill="none">
                        <g clip-path="url(#clip0_3384_169)">
                        <path d="M32.5029 25.7449V16.0905C32.5029 15.2371 32.842 14.4185 33.4455 13.815C34.049 13.2115 34.8675 12.8724 35.721 12.8724H67.9022L83.9927 28.963V74.0166C83.9927 74.8701 83.6537 75.6886 83.0502 76.2921C82.4467 76.8956 81.6281 77.2347 80.7746 77.2347H71.1203" fill="#E1E1E1"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.9021 90.1071H22.8485C21.995 90.1071 21.1764 89.7681 20.5729 89.1646C19.9694 88.561 19.6304 87.7425 19.6304 86.889V28.963C19.6304 28.1095 19.9694 27.291 20.5729 26.6874C21.1764 26.0839 21.995 25.7449 22.8485 25.7449H55.0296L71.1202 41.8354V86.889C71.1202 87.7425 70.7811 88.561 70.1776 89.1646C69.5741 89.7681 68.7556 90.1071 67.9021 90.1071ZM33.5015 61.1441C33.5015 59.9184 34.4952 58.9247 35.7209 58.9247H55.0296C56.2553 58.9247 57.249 59.9184 57.249 61.1441C57.249 62.3698 56.2553 63.3635 55.0296 63.3635H35.7209C34.4952 63.3635 33.5015 62.3698 33.5015 61.1441ZM35.7209 71.7972C34.4952 71.7972 33.5015 72.7908 33.5015 74.0166C33.5015 75.2423 34.4952 76.2359 35.7209 76.2359H55.0296C56.2553 76.2359 57.249 75.2423 57.249 74.0166C57.249 72.7908 56.2553 71.7972 55.0296 71.7972H35.7209Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_3384_169">
                        <rect width="102.98" height="102.98" fill="white" transform="translate(0.321777)"/>
                        </clipPath>
                        </defs>
                        </svg>
                    </div>
                    <div class="title7">
                      <b class="bo-co-ti-container7">
                        <p class="bo-co-ti7">{{ Str::limit($doc8th->title, 15, '...') }}</p>
                        <p class="nm-2022-20237">Năm 2022-2023</p>
                      </b>
                    </div>
                  </div>
                </div>
                {{-- --------------------------------------------------------------------- --}}

              </div>
              <div class="mdiarrow-up-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none">
                  <path d="M24.5 12L13 22L1.5 12" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M24.5 2L13 12L1.5 2" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </div>
            </div>
          </div>
        </section>
        <section class="main-wrapper">
          <div class="main">
            <form class="user-action-elements">
              <div class="search-and-table">
                <div class="label-parent">
                  <div class="label">
                    <b class="tn-ng-nhp">Ngày tạo</b>
                    <img class="vector-icon" alt="" />
                  </div>
                  <div class="date-picker">
                    <div class="date-picker1">
                      <div class="date-picker-separators">
                        <div class="date-picker-separator">10/10/2021</div>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                      </svg>
                    </div>
                    <img
                      class="vector-icon1"
                      alt=""
                      src="./public/vector.svg"
                    />

                    <div class="date-picker2">
                      <div class="wrapper">
                        <div class="div">10/10/2021</div>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="t-kha-parent">
                  <b class="t-kha">Từ khóa</b>
                  <div class="search">
                    <div class="search1">
                      <div class="search-input">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>

                        <input
                          class="search-input-child"
                          placeholder="Tìm kiếm"
                          type="text"
                        />
                      </div>
                      {{-- <img class="icons-search" alt="" /> --}}
                    </div>
                    <div class="drop">
                      <div class="tm-kim-gn">Tìm kiếm gần đây:</div>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="table">
                <table class="table-ngun-tin">
                    <thead class="table-title">
                        <tr>
                            <th>STT</th>
                            <th>Tên tài liệu</th>
                            <th>Ngày Tạo</th>
                            <th>Tải tài liệu</th>
                        </tr>
                    </thead>
                    <tbody class="table-content">
                      @php $i = 0; @endphp
                        @foreach ($doc10first ?? [] as $doc)
                            @php $i++; @endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $doc->title }}</td>
                            <td>{{ $doc->updated_at }}</td>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                              <path d="M12 16.075C11.8667 16.075 11.7417 16.0543 11.625 16.013C11.5083 15.9717 11.4 15.9007 11.3 15.8L7.7 12.2C7.51667 12.0167 7.425 11.7833 7.425 11.5C7.425 11.2167 7.51667 10.9833 7.7 10.8C7.88333 10.6167 8.121 10.521 8.413 10.513C8.705 10.505 8.94234 10.5923 9.125 10.775L11 12.65V5.5C11 5.21667 11.096 4.979 11.288 4.787C11.48 4.595 11.7173 4.49934 12 4.5C12.2833 4.5 12.521 4.596 12.713 4.788C12.905 4.98 13.0007 5.21734 13 5.5V12.65L14.875 10.775C15.0583 10.5917 15.296 10.504 15.588 10.512C15.88 10.52 16.1173 10.616 16.3 10.8C16.4833 10.9833 16.575 11.2167 16.575 11.5C16.575 11.7833 16.4833 12.0167 16.3 12.2L12.7 15.8C12.6 15.9 12.4917 15.971 12.375 16.013C12.2583 16.055 12.1333 16.0757 12 16.075ZM6 20.5C5.45 20.5 4.979 20.304 4.587 19.912C4.195 19.52 3.99934 19.0493 4 18.5V16.5C4 16.2167 4.096 15.979 4.288 15.787C4.48 15.595 4.71733 15.4993 5 15.5C5.28333 15.5 5.521 15.596 5.713 15.788C5.905 15.98 6.00067 16.2173 6 16.5V18.5H18V16.5C18 16.2167 18.096 15.979 18.288 15.787C18.48 15.595 18.7173 15.4993 19 15.5C19.2833 15.5 19.521 15.596 19.713 15.788C19.905 15.98 20.0007 16.2173 20 16.5V18.5C20 19.05 19.804 19.521 19.412 19.913C19.02 20.305 18.5493 20.5007 18 20.5H6Z" fill="#0054A6"/>
                              </svg></td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
            </form>
            <img class="vector-icon2" alt="" />

            <div class="paging">
              <div class="hien-thi">
                <div class="hin-th">Hiển thị</div>
                <div class="display-count">
                  <b class="b">10</b>
                </div>
                <div class="cu-tr-li">câu trả lời trong mỗi trang</div>
              </div>
              <div class="page-navigation">
                <img class="icons18" alt="" src="./public/icons-18.svg" />

                <div class="page-numbers">
                  <div class="page">
                    <b class="page-number-items">1</b>
                  </div>
                  <div class="page1">
                    <div class="div1">2</div>
                  </div>
                  <div class="page2">
                    <div class="div2">3</div>
                  </div>
                  <div class="page3">
                    <div class="div3">4</div>
                  </div>
                  <div class="page4">
                    <div class="div4">5</div>
                  </div>
                  <div class="page5">
                    <div class="div5">...</div>
                  </div>
                  <div class="page6">
                    <div class="div6">10</div>
                  </div>
                </div>
                <img class="icons19" alt="" src="./public/icons-19.svg" />
              </div>
            </div>
          </div>
        </section>
      </main>
     
    </div>
@endsection