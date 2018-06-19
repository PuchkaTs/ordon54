@inject('news', 'App\News')

<div class="row">
  <div class="col-sm-12">
    <div class="medee">
        <h1>Мэдээ мэдээлэл</h1>
        <div class="centered"><img src="/assets/border/orange.png"></div>
            @foreach($news->latest()->limit(3)->get() as $content)
                <section>
                    <h2>{{$content->title}}</h2>
                    <p>{{$content->shorten(300)}}</p>
                    <p><a class="btn btn-secondary" href="/news/{{$content->id}}" role="button">Дэлгэрэнгүй »</a></p>                    
                </section>
            @endforeach                              
    </div>

  </div>

</div>