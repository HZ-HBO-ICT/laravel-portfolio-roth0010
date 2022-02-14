@extends('layout')

@section('meta')
    <title>My Blog</title>
    <meta name="description"
          content="A blog no one asked for and no one needed. But it's here now, and there's nothing you can do about it.">
@endsection

@section('content')
<div id="blogTitle">
    <h1 class="blogText">Welcome to the Blog</h1>
</div>
<article class="journey-art">
    <div class="journey-text">
        <p>Welcome to the landing page for my "blog," that will definitely get updates past the grading of this
            assignment... Feel free to look around.</p>
        <h4><a id="backinblack" href="blog\more-field-work">More ICT Field Work</a></h4>
        <p>I chose some more companies to talk about, and they're a lot more interesting this time.</p><br>
        <h4><a id="backinblack" href="blog\changelog">Changelog v1.1</a></h4>
        <p>A bunch of stuff was updated. Here's the rundown.</p><br>
        <h4><a id="backinblack" href="blog\pitch-feedback">Feedback from the Pitch</a></h4>
        <p>There was a bunch of stuff that could use changing with my website. Here's some of that.</p><br>
        <h4><a id="backinblack" href="blog\pitch">The First Pitch</a></h4>
        <p>My first `pitch` of the website happened in September. Here's how it went.</p><br>
        <h4><a id="backinblack" href="blog\motivation">My Motivation</a></h4>
        <p>At one time, this was on the homepage. It's way too long for that, so it lives here now.</p><br>
        <h4><a id="backinblack" href="blog\field-work">ICT Field Work</a></h4>
        <p>I write about the various options in the ICT field - some good, some bad, some ugly.</p><br>
        <h4><a id="backinblack" href="blog\u-swot-m8">Personal SWOT Analysis</a> </h4>
        <p>An analysis of my strengths and weaknesses</p><br>
        <h4><a id="backinblack" href="blog\first-feedback">First Feedback</a></h4>
        <p>I write a response to the feedback given on my first assignment</p><br>
        <h4><a id="backinblack" href="blog\experience">Programming Experience</a></h4>
        <p>I write about my limited experience with coding prior to starting the ICT program</p><br>
        <h4><a id="backinblack" href="blog\study-choice">Study Choice</a></h4>
        <p>I write about why I chose the program I did, and why I want to study in the Netherlands</p><br>
    </div>
    <div class="journey-pictures">
        <h6>An H5 Shinkansen exits the Seikan Tunnel heading toward Aomori (Grunty89).</h6>
    </div>
</article>
@endsection

@section('citation')
    <p>Grunty89. "H5 H1 Hayabusa Hokkaido 2016." Locomotive wiki,
        https://locomotive.fandom.com/wiki/H5_Series_Shinkansen?file=H5_H1_Hayabusa_Hokkaido_2016.jpg
@endsection
