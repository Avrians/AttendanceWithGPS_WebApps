 @extends('layouts.presensi')

 @section('header')
     <div class="appHeader bg-primary text-light">
         <div class="left">
             <a href="javascript:;" class="headerButton goBack">
                 <ion-icon name="chevron-back-outline"></ion-icon>
             </a>
         </div>
         <div class="pageTitle">E-Presensi</div>
         <div class="right"></div>
     </div>
 @endsection

 <style>
     .webcam-capture,
     .webcam-capture video {
         display: inline-block;
         width: 100% !important;
         margin: auto;
         height: auto !important;
         border-radius: 15px;
     }
 </style>

 @section('content')
     <div class="row" style="margin-top: 70px">
         <div class="col">
             <input type="hidden" id="lokasi">
             <div class="webcam-capture">

             </div>
         </div>
     </div>
     <div class="row">
         <div class="col">
             <button id="takeabsen" class="btn btn-primary btn-block mt-1">
                 <ion-icon name="camera-outline"></ion-icon>
                 Absen Masuk</button>
         </div>
     </div>
 @endsection

 @push('myscript')
     <script>
         $(document).ready(function() {
             Webcam.set({
                 width: 640,
                 height: 480,
                 image_format: 'jpeg',
                 jpeg_quality: 80
             });
             Webcam.attach('.webcam-capture');
         });
         var lokasi = document.getElementById('lokasi');
         if (navigator.geolocation) {
             navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
         }

         function successCallback(position) {
             lokasi.value = position.coords.latitude + "," + position.coords.longitude;
         }

         function errorCallback(position) {

         }
     </script>
 @endpush
