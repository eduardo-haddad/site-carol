<!-- Referência visual: https://themes.jessengatai.com/crush/wp/minimal/ -->

<!DOCTYPE html>
<html>

<head>

  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title>pagina do primo da carol</title>

  <!--  Styles  -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="{{asset('js/script.js')}}"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,300,400,700|Roboto+Slab:400,700" rel="stylesheet">
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

</head>

<body>
  <div id="container-geral">

    <div id="menu_mobile"><img src="{{asset('img/btn_menu.png')}}" /></div>


    <!-- Menu -->
  <div id="menu-esquerdo">

    <div id="container-menu">

      <div id="logo">
        <h1>Lz.</h1>
      </div>
      <div id="opcoes">
        <h4>Alfafa</h4>
        <ul>
          <li><a href='https://youtu.be/PzP1XC51kro?t=1m39s'>anel</a></li>
          <li><a href='https://youtu.be/sx6jVNk-Qbs?t=45s'>orelha</a></li>
          <li><a href='https://youtu.be/N3nluyoGTDo'>esquerda</a></li>
        </ul>
      </div>
      <div id="opcoes">
        <h4>Boinas</h4>
        <ul>
          <li><a href='#'>benenas</a></li>
          <li><a href='#'>bassouras</a></li>
          <li><a href='#'>bezorros</a></li>
          <li><a href='#'>menines</a></li>
        </ul>
      </div>
      <div id="opcoes">
        <h4>Coisas</h4>
        <ul>
          <li><a href='#'>cones</a></li>
          <li><a href='#'>cunete</a></li>
          <li><a href='#'>corolho</a></li>
        </ul>
      </div>
   </div>
  </div>

    @yield('content')

  </div> 
</body>

</html>