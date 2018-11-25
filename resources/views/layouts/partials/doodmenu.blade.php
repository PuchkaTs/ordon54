@inject('doodmenu', 'App\Doodmenu')
<div class="row margin0">
    <div class="col-3 members-left">
        <div class="logo-square"><img src="/assets/logo_square.png">
        </div>
	    @foreach($doodmenu->getMenus() as $key=>$doodMenu)

        <div class="">
            <div class="" id="heading{{$doodMenu->id}}">
              <h5 class="mb-0">
                <button class="btn btn-link my-btn-header" type="button" data-toggle="collapse" data-target="#collapse{{$doodMenu->id}}" aria-expanded="false" aria-controls="collapse{{$doodMenu->id}}">
                  {{$doodMenu->title}}
                </button>
              </h5>
            </div>

            <div id="collapse{{$doodMenu->id}}" class="collapse" aria-labelledby="heading{{$doodMenu->id}}" data-parent="#accordionExample">
            	@foreach($doodMenu->doodmenusub as $subMenu)
                    <a class="nav-link hoverOrange" href="/submenu/{{$subMenu->id}}" id="submenu-{{$subMenu->id}}">{{$subMenu->title}}</a>
                @endforeach
            </div>
        </div>
        @endforeach

<!--         <div class="">
            <div class="" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link my-btn-header" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <a href="#bottom" class="">Холбоо барих</a>
                </button>
              </h5>
            </div>
        </div> -->



    </div>

    <div class="col-9 members-right">
        @if(isset($doodmedee))
            <div>
                <h1 class="centered">{{$doodmedee->title}}</h1>
                <div class="centered"><img class="zigzag" src="/assets/border/blue.png"></div>
                {!!
                    $doodmedee->body
                !!} 

                @foreach($doodmedee->members as $member)
                <div class="row member">
                    <div class="col-md-4 centered">
                        <img src="/assets/members/{{$member->photo}}" class="avatar rounded-circle">
                        <p class="ovog">{{$member->lastName}}</p>
                        <p class="ner">{{$member->firstName}}</p>
                    </div>
                    <div class="col-md-8 portfolio">
                        {!! $member->body !!}                           
                    </div>
                </div>
                @endforeach   
            </div>

        @endif
    </div>
</div>
