@extends('layout')

@section('meta')
    <title>FAQ</title>
    <meta name="description"
          content="A collection of Frequently Asked Questions about HZ University of Applied Sciences, and a few more.">
@endsection

@section('content')
    <div id="faqTitle">
        <h1 class="faqText">Frequently Asked Questions*</h1>
    </div>
    <article>
        <h6>An N700S Shinkansen running along the coast (ErbosSan).</h6>
        <h4>*About the Netherlands, not me!</h4>
        @foreach($faqs as $faq)
            <h5>Q: {{ $faq->question }}?</h5>
            <p id="answer">A: {{ $faq->answer }}</p>
        @endforeach
    </article>
@endsection

@section('citation')
        <p>ErbosSan. "First online tests of Shinkansen N700S." denshaotaku, 5 June 2018,
            http://www.denshaotaku365.com/archives/2018/06/05/36463761.html</p>
@endsection
