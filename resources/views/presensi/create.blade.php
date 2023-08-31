 @extends('layouts.presensi')

 <style>
     .webcam-capture, 
     .webcam-capture video{
        display: inline-block;
         width: 100% !important;
         margin: auto;
         height: auto !important;
         border-radius: 15px;
     }
 </style>

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
 @section('content')
     <div class="row" style="margin-top: 70px">
         <div class="col">
             <div class="webcam-capture">

             </div>
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
     </script>
 @endpush
