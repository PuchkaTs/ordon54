@inject('faqModel', 'App\Faq')
<article class="faq-container row justify-content-md-center">
  <div class="col-md-8">
    <h1>Асуулт & Хариулт</h1>
    <div class="centered"><img src="/assets/border/orange.png"></div>
    <div class="accordion" id="accordionExample2">
      @foreach($faqModel->getLatestFaqs() as $faq)
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-{{$faq->id}}" aria-expanded="true" aria-controls="collapse-{{$faq->id}}">
              {{$faq->question}}
            </button>
          </h5>
        </div>

        <div id="collapse-{{$faq->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample2">
          <div class="card-body">
            {!!$faq->answer!!}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</article>