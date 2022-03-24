@extends('layouts.main')
@section('container')

<body>
  <div class="wrapper">

  

    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home"></h1>
    
       
          <h1 style="font-weight:bold; font-size:50px;">Popular anime</h1>
          <div class="box">
          @foreach ($films as $film)
         
       
          <a href="/detail/{{ ($film->id) }}"><img src="{{asset('storage/'.$film->image)}}" alt=""></a>
          
          @endforeach
          
          
           
            
           
          </div>
      </div>
      

      <h1 id="myList" style="font-weight:bold; font-size:50px;">Trending Anime</h1>
      <div class="box">
      
      @foreach ($films->shuffle() as $film)
      <a href="/detail/{{ ($film->id) }}"><img src="{{asset('storage/'.$film->image)}}" alt=""></a>
            @endforeach
                      
      </div>
      
      <h1 id="tvShows" style="font-weight:bold; font-size:50px;">TV Shows</h1>
      <div class="box" style="font-weight:bold; font-size:50px;">
      @foreach ($films->shuffle() as $film)
      <a href="/detail/{{ ($film->id) }}"><img src="{{asset('storage/'.$film->image)}}" alt=""></a>
            @endforeach             
      </div>
      

      <h1 id="movies" style="font-weight:bold; font-size:50px;">Blockbuster Action & Adventure</h1>
      <div class="box">
      @foreach ($films->shuffle() as $film)
      <a href="/detail/{{ ($film->id) }}"><img src="{{asset('storage/'.$film->image)}}" alt=""></a>
            @endforeach  
      </div>

      <h1 id="originals" style="font-weight:bold; font-size:50px;">Netflix Originals</h1>
      <div class="box">
      @foreach ($films->shuffle() as $film)
      <a href="/detail/{{ ($film->id) }}"><img src="{{asset('storage/'.$film->image)}}" alt=""></a>
            @endforeach             
      </div>
    
    <!-- END OF MAIN CONTAINER

    <!-- LINKS -->
    
  
    <!-- END OF LINKS -->
 <script>
   
 </script>
    <!-- FOOTER -->
    <footer>
     
   
    </footer>
  </div>
</body>
</html>