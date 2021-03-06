@inject('deedmenu', 'App\Deedmenu')
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="/assets/logo.png" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="/contents">Дугуйлан</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/events">Уралдаан</a>
        </li>

        @foreach($deedmenu->getMenus() as $key=>$deedmenu)

          @if($deedmenu->deedmenusub->count())
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             {{$deedmenu->title}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach($deedmenu->deedmenusub as $subMenu)
                <a class="dropdown-item" href="/msmenu/{{$subMenu->id}}">{{$subMenu->title}}</a>
              @endforeach
            </div>
          </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="/mmenu/{{$deedmenu->id}}">{{$deedmenu->title}}</a>
            </li>
          @endif
        @endforeach
        <li class="nav-item">
          <a class="nav-link" href="http://shilendans.gov.mn/org/4314">Шилэн данс</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#bottom">Холбоо барих</a>
        </li>
      </ul>
    </div>
  </nav>
</header>