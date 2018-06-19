@extends('layouts.main')
@section('body')

<div class="row">
  <div class="col-sm-12">
    <div class="medee">
        <h1>{{$menu->title}}</h1>
        <div class="centered"><img src="/assets/border/orange.png"></div>
        @if(isset($news))
	        @foreach($news as $content)
	        <section>
	            <h2>{{$content->title}}</h2>
	            <p>{{$content->shorten(300)}}</p>
	            <p><a class="btn btn-secondary" href="/news/{{$content->id}}" role="button">Дэлгэрэнгүй »</a></p>                    
	        </section>
			@endforeach    

            <div class="textcenter">
                {!! $news->links() !!}         
            </div>                      
		@endif
    </div>

  </div>

</div>

@endsection