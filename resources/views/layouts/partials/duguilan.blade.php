@inject('duguilanTag', 'App\Duguilantag')
<div class="row">
<a name="duguilan"></a>

  <div class="col-sm-12">
    <div class="duguilan-container">
        <h1>Дугуйлан</h1>
        <div class="centered"><img src="/assets/border/white.png"></div>
        @foreach($duguilanTag->orderBy('position', 'asc')->with('contents')->get() as $tag)
            <section>
                <div class="linetext"><span>{{$tag->title}}</span></div>
                <div class="row">
                    <div class="col-sm-12 duguilan-section">
                        <div class="d-flex justify-content-center flex-wrap">
                                @foreach($tag->contents as $content)
                                <div class="duguilan">
                                    <a href="/content/{{$content->id}}">
                                        <div class="zoom-wrap">
                                            <img src="/assets/icons/{{$content->icon}}" alt="..." class="rounded-circle mx-auto d-block zoom-in">
                                        </div>
                                    </a> 
                                    <p class="subtitle">{{$content->title}}</p>
                                </div>
                                @endforeach
                          </div>                             
                    </div>
                </div>
            </section>
        @endforeach
    </div>
  </div>
</div>