@extends('layouts.main')
@section('container')

<body>
  <div class="wrapper">

  

    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home"></h1>
    
       
          <h1>Popular anime</h1>
          <div class="box">
          @foreach ($films as $film)
         
       
          <a href="/detail/{{ ($film->id) }}"><img src="{{asset('storage/'.$film->image)}}" alt=""></a>
          
          @endforeach
          
          
           
            
           
          </div>
      </div>
      

      <h1 id="myList">Trending Anime</h1>
      <div class="box">
      
      @foreach ($films->shuffle() as $film)
      <a href="/detail/{{ ($film->id) }}"><img src="{{asset('storage/'.$film->image)}}" alt=""></a>
            @endforeach
                      
      </div>
      
      <h1 id="tvShows">TV Shows</h1>
      <div class="box">
      @foreach ($films->shuffle() as $film)
      <a href="/detail/{{ ($film->id) }}"><img src="{{asset('storage/'.$film->image)}}" alt=""></a>
            @endforeach             
      </div>
      

      <h1 id="movies">Blockbuster Action & Adventure</h1>
      <div class="box">
      @foreach ($films->shuffle() as $film)
      <a href="/detail/{{ ($film->id) }}"><img src="{{asset('storage/'.$film->image)}}" alt=""></a>
            @endforeach  
      </div>

      <h1 id="originals">Netflix Originals</h1>
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