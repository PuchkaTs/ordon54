<div class="row margin0">
    <div class="col-3 members-left">
        <div class="logo-square"><img src="/assets/logo_square.png">
        </div>

        <div class="about-us">
            <div class="" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link my-btn-header" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Бидний тухай
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <a class="nav-link" href="/mission">Зорилго</a>
                    <a class="nav-link" href="/about">Танилцуулга</a>
                    <a class="nav-link" href="/head">Удирдлага</a>
                    <a class="nav-link" href="/teachers">Багш нар</a>
                    <a class="nav-link" href="/workers">Ажилчид</a>
            </div>
        </div>

        <div class="courses">
            <div class="" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link my-btn-header" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Дугуйлан
                </button>
              </h5>
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <a class="nav-link" href="/courses">Төвийн дугуйлан</a>
                    <a class="nav-link" href="/branch-courses">Салбар дугуйлан</a>
            </div>
        </div>

        <div class="courses">
            <div class="" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link my-btn-header" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Уралдаан, наадмууд
                </button>
              </h5>
            </div>

            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <a class="nav-link" href="/courses">Дотоод</a>
                    <a class="nav-link" href="/branch-courses">Гадаад</a>
            </div>
        </div>

        <div class="courses">
            <div class="" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link my-btn-header" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <a href="#bottom" class="">Холбоо барих</a>
                </button>
              </h5>
            </div>
        </div>



    </div>

    <div class="col-9 members-right">
        <div class="">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h1 class="centered">Зорилго</h1>
            <div class="centered"><img class="zigzag" src="/assets/border/blue.png"></div>
                @if(isset($zorilgo))
                {!!
                    $zorilgo->body
                !!}    
                @endif                                      
            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h1 class="centered">Танилцуулга</h1>
                <div class="centered"><img class="zigzag" src="/assets/border/blue.png"></div>
                @if(isset($tanilcuulga))
                {!!
                    $tanilcuulga->body
                !!}    
                @endif  
            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h1 class="centered">Удирдлага</h1>
                <div class="centered"><img class="zigzag" src="/assets/border/blue.png"></div>
                @if(isset($udirdlaga))
                @foreach($udirdlaga->members as $member)
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
                @endif
            </div>

            <div class="tab-pane fade " id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h1 class="centered">Багш нар</h1>
                <div class="centered"><img class="zigzag" src="/assets/border/blue.png"></div>
                @if(isset($bagsh))
                @foreach($bagsh->members as $member)
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
                @endif
            </div>
          </div>
        </div>
    </div>
</div>
