@inject('temceen', 'App\Temceen')

<div class="row">
    <div class="col-sm-12">
        <div class="temceen">

            <h1>Тэмцээн үралдаан</h1>
            <div class="centered"><img src="/assets/border/white.png"></div>
                @foreach($temceen->latest()->limit(4)->get() as $key=>$content)
                  @if($key == 0)
                  <section>
                      <h2>{{$content->title}}</h2>
                      <div class="row">
                          <div class="col-sm-6"><a href="/event/{{$content->id}}"><img src="/assets/content/{{$content->photo}}"></a></div>
                          <div class="col-sm-6"><p>{{$content->shorten(200)}}</p>

                          <!-- <span class="big-date float-left"></span> -->
                          <a href="/event/{{$content->id}}">
                          <button type="button" class="btn btn-primary btn-lg">Дэлгэрэнгүй</button>
                          </a>
                          </div>
                      </div>
                  </section>
                  @endif
                @endforeach

            <section>
                <h2>Удахгүй болох тэмцээн уралдаан</h2>
                <div class="row">
                @foreach($temceen->latest()->limit(4)->get() as $key=>$content)
                  @if($key > 0)
                            <div class="col-md-4">
                              <div class="card mb-4 box-shadow">
                                <a href="/event/{{$content->id}}"><img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="width: 100%; display: block;" src="/assets/content/{{$content->photo}}" data-holder-rendered="true"></a>
                                <div class="card-body">
                                  <h6 class="card-text">{{$content->title}}</h6>
                                  <p class="card-text" style="overflow: hidden;">{!!$content->shorten(100)!!}</p>
                                  <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                      <a href="/event/{{$content->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">Дэлгэрэнгүй</button></a>
                                    </div>
                                    <small class="text-muted"></small>
                                  </div>
                                </div>
                              </div>
                            </div>

                  @endif
                @endforeach
                </div>
            </section>


            
        </div>
    </div>
</div>