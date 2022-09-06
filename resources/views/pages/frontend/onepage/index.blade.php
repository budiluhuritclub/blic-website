@extends('layouts.onepage')

@section('title')
    Budi Luhur IT Club
@endsection

@section('content')
    <div class="banner-section">
        <div class="content-banner container rounded text-center">
            <h1 class="white">Hi, Blutizen!</h1>
            <p>Welcome to our IT club Budi Luhur University</p>
        </div>
    </div>

    <div class="section-who-we-are">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <h3 class="mb-4">Who we are?</h3>
                    <p class="pe-3">Budi Luhur Information Technology Club or commonly known as BLIC was established
                        since end of August 2021. BLIC was established with the aim of being a center for developing the
                        potential of
                        Budi Luhur University students in the field of Information Technology</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ url('./images/universitasbudiluhur.jpeg') }}" alt="" class="image-who-we-are">
                </div>
            </div>
        </div>
    </div>

    <div class="section-history">
        <div class="container">
            <div class="text-center">
                <h3>Our story</h3>
                <p class="mb-4">The story where we begins and where it's started</p>
            </div>
            <p>
                Budi Luhur IT Club or commonly referred to as BLIC is a forum that is engaged in Information Technology.
                Rylan, Umar, Hafizh, and Fadillah is the founder of this club. The reason for the establishment of BLIC
                is
                because of the lack of support in learning in the field of Information Technology in developing the
                interests and talents of Budi Luhur's students. Therefore, we established BLIC as a forum to facilitate
                students in developing their potential in the field of Information Technology. BLIC is focuses based on
                study-case or real-project learning with the hope that students will be able to compete in the
                competition
                as well as in the industrial world and understand the workflow in the industrial world.
            </p>
        </div>
    </div>

    <div class="section-visi-misi">
        <div class="container mt-3 mb-3">
            <div class="header text-center mb-5">
                <h3 class="mb-2">Our Vision and Mission</h3>
                <p class="mb-5">Integrity make us strong.</p>
            </div>
            <div class="header text-center">
                <h4>Visi</h4>
            </div>
            <p>
                Making the Budi Luhur IT Club a forum in the field of technology to develop the knowledge, interests,
                and talents of Budi Luhur University students so they can compete in competitions and industry.
            </p>
            <div class="header text-center mt-5">
                <h4>Misi</h4>
            </div>
            <p>
            <ul>
                <li>Creating creative and innovative students.</li>
                <li>Compete in the competition in the field of technology.</li>
                <li>Provide a forum or space for students to develop interests and talents in a structured manner</li>
                <li>Provide wider knowledge of technology to students.</li>
                <li>Provide learning about broader development to students.</li>
                <li>Cooperate with internal and external parties in building interests and talents.</li>
            </ul>
            </p>
        </div>
    </div>

    <div class="section-division">
        <div class="container mt-3 mb-3">
            <div class="header text-center">
                <h3 class="mb-2">Our division</h3>
                <p class="mb-5">We have various division that you could learn and discuss with.</p>
            </div>
            <!-- Web programming -->
            <div class="card px-4 py-4 my-4">
                <div class="d-flex">
                    <img src="" alt="" class="rounded">
                    <h4 class="ms-2">Web programming</h4>
                </div>
                <p class="description">
                    Web programming is an attempt to build a website-based application that can provide information for
                    internet users and is easy to access. In website development, just like with mobile-based programming,
                    website development also requires and uses a programming language to create a website. In each
                    development, it is usually divided into two, namely front-end and back-end. each of these two types
                    requires its own programming language, but they are related to each other.
                </p>
            </div>
            <!-- Mobile programming -->
            <div class="card px-4 py-4 my-4">
                <div class="d-flex">
                    <img src="" alt="" class="rounded">
                    <h4 class="ms-2">Mobile programming</h4>
                </div>
                <p class="description">
                    Mobile programming is a process of making a mobile-based application for certain platforms such as
                    Android, iOS, and Windows phones. In the manufacturing process, this mobile-based application uses a
                    programming language that is devoted to creating mobile applications such as Java, Kotlin, Dart, Swift,
                    and so on. But for now, we only have development for the Android platform.
                </p>
            </div>
            <!-- Data mining -->
            <div class="card px-4 py-4 my-4">
                <div class="d-flex">
                    <img src="" alt="" class="rounded">
                    <h4 class="ms-2">Data mining</h4>
                </div>
                <p class="description">
                    In short, data mining is the study of methods for extracting knowledge or finding patterns from a large
                    and multiple dataset. Data mining activities include collecting, using historical data to find
                    regularities, patterns, and relationships in large data sets
                </p>
            </div>
            <!-- Cyber Security -->
            <div class="card px-4 py-4 my-4">
                <div class="d-flex">
                    <img src="" alt="" class="rounded">
                    <h4 class="ms-2">Cyber Security</h4>
                </div>
                <p class="description">
                    Cyber security is an action taken in an effort to protect a computer system from attacks or illegal
                    access. Referring to the International Telecommunications Union (ITU), these cyber security measures
                    include tools, policies, security concepts, etc., that can be used to protect organizations, and user
                    assets. Cyber security leads to security and ensures that data is confidential and has the properties of
                    Confidentials, Integrity, and Availability which are the three points of the CIA Triad.
                </p>
            </div>
        </div>
    </div>

    <div class="section-conclusion">
        <div class="container">
            <div class="header text-center">
                <h3 class="mb-2">Last but not least</h3>
                <p class="mb-5">Before you decide it as your own will.</p>
            </div>
            <p>
                From some of the explanations above, Budi Luhur IT Club is a place for students to discuss and learn from
                each other related to certain fields and is also expected to be a place that can help students develop
                knowledge, ideas, and innovations related to technology.
            </p>
        </div>
    </div>

    <div class="contact-us-section">
        <div class="container">
            <div class="card px-4 py-4 white bg-primary-dark">
                <div class="row">
                    <div class="col-md-8 col-sm-6 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="white">So, what are you waiting for?</h5>
                            Come join us and let’s growing together!
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="">
                            <button class="btn btn-primary w-100 mt-4">Register Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
