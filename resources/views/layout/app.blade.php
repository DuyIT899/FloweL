<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/9fd8e6636e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ExamTest</title>
</head>
    <style>
        .header1{
            background-color: #3da77c;
            height: 40px !important;
        }
        .header1 a{
            color: aliceblue !important;
        }
        .header2 {
            
        }
        .logo{
            font-size: 28px;
        }
        .header2 a{
            color: black !important;
        }
        .submenu{
            padding: 15px !important;
        }
        .footer1{
            background-color: #3b3b3e;
            color: aliceblue;
            text-decoration: none;
        }
        .content{
            height: 100em;
        }
    </style>

<body>   
   @include('layout.header')
   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/VNE-Five-1-2815-1644399716.jpg" class="" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/Red_panda_Two_Sleep_504997.jpg" class="" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/148-1489129_hinh-anh-bong-hoa-nam-canh-clipart.png" class="" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
   @yield('content')
   @include('layout.footer')
</body>

</html>
