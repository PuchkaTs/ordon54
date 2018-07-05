@extends('layouts.main')
@section('body')

<div class="row">
  <div class="col-sm-12">
    @if($content->photo)
  	<div class="content-banner">
    	<img style="width:100%;" src="/assets/content/{{$content->photo}}">
  	</div>
    @endif
    <div class="content-show">

        <h1>{{$content->title}}</h1>
        <div class="centered"><img src="/assets/border/orange.png"></div>
	        <section>
                @foreach($content->members as $member)
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

	            <p>{!!$content->body!!}</p>                 
	        </section>    
    </div>

  </div>

</div>

@endsection