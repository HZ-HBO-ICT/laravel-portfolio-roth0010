<!DOCTYPE html>
<html lang=en>

<head>
    <!--Setting up settings, I think-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Title for the page on the tab thingy-->
    @yield('meta')
    <link rel="stylesheet" href="\css\style.css">
</head>

<body>
<nav id="flex">
    <h1 id="heading">ノア・ロス【Noah Roth】</h1>
    <ul>
        <li id="font">
            <a class="{{ Request::is('blog*') ? 'current' : ''}}" href="\blog">Blog</a>
        </li>
        <li id="font">
            <a class="{{ Request::is('faq') ? 'current' : ''}}" href="\faq">FAQ</a>
        </li>
        <li id="font">
            <a class="{{ Request::is('dashboard') ? 'current' : ''}}" href="\dashboard">Dashboard</a>
        </li>
        <li id="font">
            <a class="{{ Request::is('profile') ? 'current' : ''}}" href="\profile">Profile</a>
        </li>
        <li id="font" >
            <a class="{{ Request::is('about') ? 'current' : ''}}" href="\about">My Story</a>
        </li>
        <li id="font">
            <a class="{{ Request::is('/') ? 'current' : ''}}" href="\">Home</a>
        </li>
    </ul>
</nav>

@yield('content')

<aside>
    <!--This is technically just a footer, but the requirements want me to use the aside for this section. It'll be gone at the first opportunity following grading.-->
    <footer class="move" id="font">
        <!--Title for the section-->
        <h3>"Useful" Links</h3>
        <!--Horizontal list of links-->
        <ul class="useful">
            <li><a id="backinblack" href="https://learn.hz.nl/course/view.php?id=21135#section-0" target="_blank"
                   rel="noopener noreferrer">HZ Learn</a></li>
            <li><a id="backinblack"
                   href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf"
                   target="_blank" rel="noopener noreferrer">HZ Course & Exam Regulations</a></li>
            <li><a id="backinblack" href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank"
                   rel="noopener noreferrer">Study Progress</a></li>
            <li><a id="backinblack" href="https://github.com/HZ-HBO-ICT" target="_blank"
                   rel="noopener noreferrer">HZ Gimp
                    Account</a></li>
            <li><a id="backinblack"
                   href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf"
                   target="_blank" rel="noopener noreferrer">HZ ICT Implementation Regulations</a></li><br>
            <li><a class="hz" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"
                   rel="noopener noreferrer"><img class="hz" src="/img/hz-logo.png" alt="HZ University Logo"
                                                  height=50></a></li>
        </ul>
        <!--A list of citations so I don't get arrested for plagiarism or copyright violation-->
        <h3>Works Cited</h3>
        @yield('citation')
    </footer>
</aside>
</body>

</html>
