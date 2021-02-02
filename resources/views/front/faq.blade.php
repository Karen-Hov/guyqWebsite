@extends('layouts.site')
@section('content')
<div class="faqPage myContainer">
	<div class="accordion">
        @if($faq)
            @foreach($faq as $item )
    <div class="accordion-item">
      <a>
      	<span>{{ $item->faqTranslate[0]->title}}</span>
      	<span>&#709;</span>
      </a>

      <div class="content">
          {!!   $item->faqTranslate[0]->desc!!}
      </div>
    </div>

     @endforeach
            @endif
  </div>
</div>

@endsection
