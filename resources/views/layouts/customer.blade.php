<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>@yield('title')</title>
     <script src="https://kit.fontawesome.com/3babc5211c.js" crossorigin="anonymous"></script>
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"/>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

 
    
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> --}}
    <style>
      *{
        font-family: 'Montserrat', sans-serif;
    }
    .cartblack i
    {
      color: white !important;
    }
  

      .carousel-item{
    height: 30rem;
    color: white;
} 
.carousel-item img{
    height: 100%;
    color: white;
}
a
    {
        text-decoration: none !important;
        color: white;

    }
    
    .video
    {
      filter: brightness(40%) !important;
      object-fit: fill !important;
      background-size: cover !important;
    }
 


 .fixed-top 
{
  height: 4.5rem !important;
  z-index: 5000 !important;
}
.navbar>.container-fluid a
{
  color: white !important;
  font-size: 15px !important;
  font-weight: 600;
}

.container-fluid {
  text-decoration: none;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: auto;
  margin-right: auto;
  padding: 0px 7.5px 1px 7.5px;
  gap: 160px;
  flex-shrink: 0;
  background: #411F20;
  box-shadow: -0.25px 3.75px 0px 0.25px rgba(0, 0, 0, 0.01) inset;
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
  font-size: 12px;
}

.navbar-nav {
  text-decoration: none;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  gap: 30px;
  flex-shrink: 0;
  padding: 4px:
}

.navbar-brand {
  display: flex;
  justify-content: flex-end;
  align-items: flex-start;
  gap: 30px;
  flex-shrink: 0;
  padding: 9px 0px 9px 0px;
}

.zoom:hover
{
  cursor: pointer;
  transform: scale(1.05);
  transition: all 0.3s linear;
}
.zoom img
{
  filter: brightness(40%) !important;
}
.notbtn
{
  width: 150px !important;
  height: 50px !important;
  padding: 10px !important;
  transition: all 0.5s;
  outline: none; 
  border-style: none;
}
.notbtn:hover
{
  background: transparent !important;
  color: white !important;
  border: 2px solid white;

}
.hello-card
{
  cursor: pointer;
  transition: all 0.5s;
}
.hello-card:hover{
  transform: scale(1.04);
}
*
{
  scroll-behavior: smooth;
}

.rowfooter, .rowindex {
  display: flex;
  justify-content: space-evenly;
  margin-bottom: 10px;
  font-weight: 600;
  padding: 20px;
}

ul {
  list-style-type: none;
  padding: 0;
  text-align: start;
}

li {
  margin-bottom: 20px;
  margin-top: 20px;
}

li a {
  font-size: 22px;
}

li a:hover {
  color: #A35D26;
}

.social-icons .h4 {
  font-size: 32px;
}

.bg-custom-color {
  background-color: #411F20;
}

.backgroundfooter
{
  background: #411F20 !important;
}
.backgroundofroutes
{
  background:#411F20 !important;
  color: white !important;
}
.backgroundofroutes a
{
  color: white !important;
  font-weight: 500;
}
 .hello 
{
 width: 200px !important; 
}
.hello input
{
  color:rgba(234,88,11,255) !important;
}
.btn:focus,.btn:active {
   outline: none !important;
   box-shadow: none;
}
.hello input::placeholder
{
  color: white  !important;
} 
#loginblack
    {
      color: white !important;
      padding-top: 10px:
    }

    </style>
 

    @yield('css')
</head>
<body >
 
    @include('layouts.inc.frontNavBar')
  
  <div class="content">
    @yield('content')
  </div>
  @include('layouts.inc.frontFooter')

  {{-- <div class="loaders">
    <div class="wrapper">
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="shadow"></div>
      <div class="shadow"></div>
      <div class="shadow"></div>
      <span>Loading</span>
  </div>
  </div> --}}


  @if (session('status'))
  <script>
    swal("Done!", "{{session('status')}}", "success");
  </script>
  @endif
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @yield('scripts')
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




<script>
  

</script>
     <script>
        $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll < 50){
            $('.fixed-top').css('background', '#411F20');
        } else{
            $('.fixed-top').css('background', '#411F20');
            $('.navbar>.container-fluid a').css('color', 'rgba(37,33,34,255)');
        }
    });
      
       </script>
   <script>
    $( function() {
      var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
      ];
      $( "#search_product" ).autocomplete({
        source: availableTags
      });
    } );
    </script>

{{-- <script>
  window.addEventListener("load" , () => {
    document.querySelector('.loaders').classList.add("loader--hidden")
    document.querySelector('.loaders').addEventListener("transitioned", () => {
      document.body.removeChild(document.querySelector('.loaders'));
    })
  })
</script> --}}

</html>
