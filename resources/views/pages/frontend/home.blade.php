@extends('layouts.frontend')

@section('title')
    Home - Budi Luhur IT Club
@endsection

@section('content')
    <div class="banner-section">
        <div class="content-banner container rounded">
            <h1 class="white">Hi, Bluetizen!</h1>
            <p>Welcome to our IT club at Budi Luhur University</p>
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
                    <img src="{{ url('/public/images/universitasbudiluhur.jpeg') }}" alt=""
                        class="image-who-we-are">
                </div>
            </div>
        </div>
    </div>

    <div class="section-division">
        <div class="container mt-3 mb-3">
            <h3 class="text-center mb-2">Our division</h3>
            <p class="text-center mb-5">We have various division that you could learn and discuss with.</p>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="">
                        <div class="card px-5 py-5">
                            <h4>Web programming</h4>
                            <p class="description">
                                Web programming is an attempt to build a website-based application that
                                can provide
                                information for
                                internet users and is easy to access. In website development, just like with mobile-based
                                programming,
                                website development also requires and uses a programming language to create a website. In
                                each
                                development, it is usually divided into two, namely front-end and back-end. each of these
                                two types
                                requires its own programming language, but they are related to each other.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="">
                        <div class="card px-5 py-5">
                            <h4>Mobile programming</h4>
                            <p class="description">Mobile programming is a process of making a mobile-based application for
                                certain platforms
                                such as
                                Android, iOS, and Windows phones. In the manufacturing process, this mobile-based
                                application uses a
                                programming language that is devoted to creating mobile applications such as Java, Kotlin,
                                Dart, Swift,
                                and so on. But for now, we only have development for the Android platform.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="">
                        <div class="card px-5 py-5">
                            <h4>UI/UX</h4>
                            <p class="description">UI/ux design is an activity that creates and designs a design concept for
                                software, whether
                                it is website-based or mobile-based. UI and UX itself have their own meaning, definition,
                                and function, but they are related to each other. UI stands for User Interface which is the
                                visual part of a software. While UX stands for User Experience which is the user experience
                                in using a software or system.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="">
                        <div class="card px-5 py-5">
                            <h4>Data mining</h4>
                            <p class="description">In short, data mining is the study of methods for extracting knowledge or
                                finding patterns
                                from a large
                                and multiple dataset. Data mining activities include collecting, using historical data to
                                find
                                regularities, patterns, and relationships in large data sets</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="">
                        <div class="card px-5 py-5">
                            <h4>Cyber security</h4>
                            <p class="description">Cyber security is an action taken in an effort to protect a computer
                                system from attacks or
                                illegal
                                access. Referring to the International Telecommunications Union (ITU), these cyber security
                                measures
                                include tools, policies, security concepts, etc., that can be used to protect organizations,
                                and user
                                assets. Cyber security leads to security and ensures that data is confidential and has the
                                properties of
                                Confidentials, Integrity, and Availability which are the three points of the CIA Triad.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="most-fav-book-section">
        <div class="section-faq">
            <div class="accordion-1">
                <div class="container">
                    <div class="row my-5">
                        <div class="col-md-6 mx-auto text-center">
                            <h3>Frequently Asked Questions</h3>
                            <p>A lot of people don't appreciate the moment until it's passed. Try to ask if you don't know
                                to survive in life.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="accordion" id="accordionRental">
                                <div class="accordion-item mb-3">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-bottom font-weight-bold text-sm collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            How do I join?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionRental" style="">
                                        <div class="accordion-body text-sm opacity-8">
                                            You can call our support for join our club. Indeed, you can go to the
                                            registration member's page to input your data, and our spv will contact you
                                            after we proceed your form.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button border-bottom font-weight-bold text-sm"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            When are the learning activities held?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm opacity-8">
                                            Learning activities will be held once a week per division, funds for training
                                            activities will be carried out per case session. one case session can take up to
                                            a month.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button border-bottom font-weight-bold text-sm"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Can I follow the learning path as learning way?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm opacity-8">
                                            Yes you can! You can follow the path that we've created. But if you want to get
                                            more and download the module for each material. You need joined as member, then
                                            you can download the module that we've been created.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us-section">
        <div class="container">
            <div class="card px-4 py-4 white bg-primary-dark">
                <div class="row">
                    <div class="col-md-8 col-sm-6 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="white">Have something to tell?</h5>
                            Send us message about what you think or you need.
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="mb-3">
                            <label for="name" class="form-label white" aria-autocomplete="none">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Write your name">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label white">Message</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
