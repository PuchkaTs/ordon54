@inject('mainBanner', 'App\Mainbanner')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!--     <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol> -->
    <div class="carousel-inner">
    @foreach($mainBanner->getBanners() as $key=>$aban)
      @if($key == 0)
      <div class="carousel-item active">
        <img class="first-slide" src="/assets/banners/{{$aban->photo}}" alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>{{$aban->title}}</h1>
            <p>{{$aban->description}}</p>
            <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
          </div>
        </div>
      </div>
      @endif
      @if($key != 0)
        <div class="carousel-item">
          <img class="first-slide" src="/assets/banners/{{$aban->photo}}" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>{{$aban->title}}</h1>
              <p>{{$aban->description}}</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
            </div>
          </div>
        </div>
      @endif
    @endforeach
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Өмнөх</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Дараахи</span>
    </a>
  </div>