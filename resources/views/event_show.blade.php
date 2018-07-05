@extends('layouts.main')
@section('body')
<div class="row">
  <div class="col-sm-12">
      @if(($content->photo))
  
  	<div class="content-banner">
    	<img style="width:100%;" src="/assets/content/{{$content->photo}}">
  	</div>
      @endif

    <div class="content-show">

        <h1>{{$content->title}}</h1>
        <div class="centered"><img src="/assets/border/orange.png"></div>
	        <section>
	            <p>{!!$content->body!!}</p>                 
	        </section>    
    </div>

  </div>

</div>

@endsection