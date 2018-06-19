@extends('layouts.main')
@section('body')

<div class="row">
  <div class="col-sm-12">
    <div class="duguilan">
        <h1>Дугуйлан</h1>
        <div class="centered"><img src="/assets/border/white.png"></div>
        <section>
        <div class="linetext"><span>Урлаг</span></div>
        <div class="row">
            <div class="col-sm-12 duguilan-section">
                <div class="d-flex justify-content-between bd-highlight">
                    @if(isset($urlag))
                        @foreach($urlag->contents as $content)
                        <div class="p-2 bd-highlight"><a href="/content/{{$content->id}}"><img src="/assets/icons/{{$content->icon}}" alt="..." class="rounded-circle"></a> <p class="subtitle">{{$content->title}}</p></div>
                        @endforeach
                    @endif
                  </div>                             
            </div>
        </div>
        </section>

        <section>
        <div class="linetext"><span>Уран бүтээл</span></div>
        <div class="row">
            <div class="col-sm-12 duguilan-section">
                <div class="d-flex justify-content-between bd-highlight">
                    @if(isset($uranButeel))
                        @foreach($uranButeel->contents as $content)
                        <div class="p-2 bd-highlight"><a href="/content/{{$content->id}}"><img src="/assets/icons/{{$content->icon}}" alt="..." class="rounded-circle"></a> <p class="subtitle">{{$content->title}}</p></div>
                        @endforeach
                    @endif
                  </div>                              
            </div>
        </div>
        </section>

                            <section>
        <div class="linetext"><span>Гадаад хэл</span></div>
        <div class="row">
            <div class="col-sm-12 duguilan-section">
                <div class="d-flex justify-content-between bd-highlight">
                    @if(isset($hel))
                        @foreach($hel->contents as $content)
                        <div class="p-2 bd-highlight"><a href="/content/{{$content->id}}"><img src="/assets/icons/{{$content->icon}}" alt="..." class="rounded-circle"></a> <p class="subtitle">{{$content->title}}</p></div>
                        @endforeach
                    @endif
                  </div>                              
            </div>
        </div>
        </section>
    </div>
  </div>
</div>

@endsection