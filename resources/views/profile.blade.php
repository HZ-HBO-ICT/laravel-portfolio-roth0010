@extends('layout')

@section('meta')
    <title>My Profile</title>
    <meta name="description" content="A brief look at who I am and what I like.">
@endsection

@section('content')
    <h2>Personal Information</h2>
    <p>My name is Noah Roth</p>
    <div>
        <ul id="details" type="circle">
            <li &bull id="details">I'm 19 Years Old</li>
            <li &bull id="details">I went to Molalla High School on the west coast of the US</li>
            <li &bull id="details">I'm fairly introverted until I get talking about something I'm interested in</li>
            <li &bull id="details">I'm very motivated to succeed in school for numerous reasons, such as the fact that I
                can't stay
                if I fail...
            </li>
        </ul>
    </div>

    <p> Most of my limited coding experience comes from engineering, math and science classes taken at Molalla High
        School.
    </p>
    <h2>Extra-Curricular Activities</h2>
    <p>I was really hoping to continue my competitive running "career" in the Netherlands, but I haven't found a club
        team in the area that I could run for. I'm still doing a lot of running and biking though, in hopes that I
        somehow
        didn't search hard enough.</p>
    <p>I'm especially interested in City Planning, Planes, Boats, and Motorsport, but my biggest interest would be
        Trains. Specifically, I find Japanese and European trains the most interesting.</p>
    <img id="e6" src="https://upload.wikimedia.org/wikipedia/commons/4/43/Akita_Shinkansen_-_E6_series.jpg"
         alt="An E6 Shinkansen in the Snow" width="465" height="301">
    <img src="https://img.fotocommunity.com/thalys-tgv-f1746c1c-0923-43d8-9942-5a35a3f9d72c.jpg?height=1080"
         alt="A TGV Thalys" width="527" height="301">
    <h6>Left, a JR East E6 Shinkansen (Laborde); Right, a Thalys TGV (Stefan 1978-1)</h6>
    <p>My interest in city planning is how I came to like the Netherlands, and the fiets paden that connect the
        country are why I decided to move across the world.
        I like biking to begin with, and I really enjoy the Dutch style of biking. I was actually surprised how quickly
        I was comfortable riding without a helmet!
    </p>
    <p>I want to continue doing my hobbies, such as video production and sim racing, but these have mostly been
        put aside as I put time into learning Nederlands.</p>
    <p>Once I feel like I've gotten an understanding of the workload for this program, I'll evaluate whether I have
        time to get a job. At the moment though, I am enjoying life and making YouTube videos in my limited free time.
    </p>
@endsection

@section('citation')
            <p>Stefan1978-1. "Thalys (TGV)." fotocommunity,
                https://www.fotocommunity.de/photo/thalys-tgv-stefan1978-1/33224723
            <p>Laborde, Jerome. "A JR East E6 series Shinkansen set near Akita on an Akita Shinkansen Super Komachi
                service."</p>
            <p>Wikimedia, 19 February 2014, https://commons.wikimedia.org/wiki/File:Akita_Shinkansen_-_E6_series.jpg</p>
@endsection
