@extends('layout')

@section('meta')
    <title>ノア・ロス【Noah Roth】</title>
    <meta name="description"
        content="A website of an aspiring Software Engineer made for an aspiring Software Engineer made by an aspiring Software Engineer.">
@endsection

@section('content')
    <div id=indexTitle>
        <h1 class="indexText1"> ノア・ロス【Noah Roth】</h1>
        <h3 class="indexText2">When the going gets tough, I fight on.</h3>
    </div>
    <div class="journey-pictures">
        <a href="https://en.wikipedia.org/wiki/E7_and_W7_Series_Shinkansen" target="_blank" rel="noopener noreferrer">
            <h6>A W7 Shinkansen operating on the Hokuriku Shinkansen line (Japan Rail & Travel).</h6>
        </a>
    </div>
    <article class="journey-art">
        <!--Subtitle text-->
        <div class="journeyTextIndex">
            <h1 id="textLeft" class="title">Inspired</h1>
            <h3 id=textLeft>My interests in trains, planes, racing and whatever else I find inspires my work everyday.</h3>
            <h1 id="textRight" class="title">Motivated to Succeed</h1>
            <h3 id="textRight">When your need to succeed is greater than your need to breathe, you will succeed.</h3>
            <h1 id="textLeft" class="title">The Dynamo</h1>
            <h3 id=textLeft>A fitting nickname given by my Cross Country coach, I always have the will to push forward.</h3>
            <h1 id="textRight" class="title">A Wanna-be Dutchman</h1>
            <h3 id=textRight>I've long wanted to live in the Netherlands; Software Engineering is my best chance to make that happen.</h3>
            <h1 id="textLeft" class="title">Disciplined</h1>
            <h3 id="textLeft">I always put effort into my projects - no partial work here.</h3>
            <br>
            <p>This will be a website for keeping up to date with the various projects I undertake in ICT. On this
                webpage you'll find:</p>
            <ul id="details">
                <li id="details">An entire autobiography</li>
                <li id="details">A dashboard to keep track of my progress with my classes</li>
                <li id="details">A profile page that acts as an "about me" page</li>
                <li id="details">Some frequently asked questions</li>
                <li id="details">The beginnings of a blog</li>
            </ul>
            <p>...and far too many train pictures! Look around, don't break anything and enjoy!</p>
        </div>
        <div class="journey-pictures">
            <a href="https://en.wikipedia.org/wiki/E6_Series_Shinkansen" target="_blank" rel="noopener noreferrer">
                <img src="img/e6-snow.jpg" alt="An E6 Shinkansen racing through the snow" class="imgsize">
            </a>
            <h6>An E6 Shinkansen racing through the snow (Tomori).</h6>
        </div>
    </article>
@endsection

@section('citation')
    <p>Tomori, Teruhide. Akita Shinkansen KOMACHI. E6 Series Bullet Train.
        "https://www.flickr.com/photos/kamomebird/39239086411/in/photostream/"</p>
    <p>Japan Rail & Travel. W7 Series Shinkansen.
        "https://japanrailandtravel.com/trains/jr-west/kagayaki-e7-w7-series/"</p>
@endsection
