@extends('layout')

@section('meta')
    <title>Changelog v1.1</title>
    <meta name="description" content="I made some big changes. Here's all that went down.">
@endsection

@section('content')
<h1 id="welcome">Blog 9: Changelog V1.1</h1>
<h4>10 October 2021</h4>
<article class="journey-art">
    <div class="journey-text">
        <h4>Making changes</h4>
        <p>
            The first version of the website is dead, long live version 1.1! Changes have been made here to actually
            use the feedback given and overall improve the website. The most prominent change is one of colour
            scheme: The E6 colorscheme has unfortunately gone, instead the colorscheme of the equally modern E7
            Shinkansen has painted the website. The logo for the website now stays inline with the navigation
            buttons at all times, and the buttons are rounded. I've added an underline of sorts to the bottom of the
            navbar, attempting to mirror the design of the E7 in some regards. The footer's have also changed - for
            the record graders, that was a solid 2.5 seconds to change, literally change the colour code and reload
            the page after saving. Done, mark that one off your checklist. The Homepage is undergoing a massive
            rework, as you are now greeted with a massive picture of an E7 Shinkansen, and a lot less text on that
            page - less is more. Lots of pages got pictures that span the whole page, accenting the titles, and
            those that didn't get new backgrounds as an experiment. The blogs were padded out with new
            entries, the motivation moved to the blogs, and the entire thing was generally given a makeover. That's
            been the latest with the upgrades here on the website.</p>
    </div>
    <div class="journey-pictures">
        <img src="/img/meme.jpg" alt="A programming meme (dopl3r)" class="imgsize">
        <h6>The current state of my code (dopl3r)</h6>
    </div>
</article>
@endsection

@section('citation')
    <p>dopl3r. "When your program is a complete mess but it does its job".
        "https://en.dopl3r.com/memes/dank/when-your-program-is-a-complete-mess-but-it-does-its-job/924850"
    </p>
@endsection
