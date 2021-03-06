<?php get_header();

/*
    Template Name: Home
*/ ?>
    <section id="home-main">
        <div class="container-fluid">
            <div class="row flex-row">
                <div class="jumbotron">
                    <div class="visible-xs visible-sm hero-mobile">
                        <img src="<?= IMGURL ?>bg-hero-mobile.jpg" alt="" class="visible-xs" />
                    </div>
                    <div class="jumbo-content waypoint text-center">
                        <div class="fade-down">
                            <h1>Countertops, Cabinets, & Remodeling <span class="br">from <strong>Magic Stone Granite, LLC</strong></span>
                            </h1>
                        </div>
                        <a class="hidden-xs" href="<?= SITEURL ?>/contact-us/" >
                            <button class="btn btn-lrg btn-default">Contact Us</button>
                        </a>
                        <a href="<?= SITEURL ?>/contact-us/">
                            <button class="btn btn-lrg btn-primary">Free Estimates</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div> <!-- end home-bg -->

        <section class="mid-row">
            <div class="container">
                <ul class="flex-row">
                    <li class="flex-col">
                        <a href="<?= SITEURL; ?>/granite-countertops-el-paso/">
                            Countertops
                        </a>
                    </li>
                    <li class="flex-col">
                        <a href="<?= SITEURL; ?>/cabinets/">
                            Cabinets
                        </a>
                    </li>
                    <li class="flex-col">
                        <a href="<?= SITEURL; ?>/bathroom-remodeling/">
                            Remodeling
                        </a>
                    </li>

                </ul>
            </div>
        </section>
    </section>

    <section class="home-module-1">
        <div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="extra-padding">
                            <div class="text-center">
                                <h2>Our homes are <span class="br-xs">rarely <span class="brand">stagnant.</span></span></h2>
                                <p class="blurb">We’re always changing, cleaning, and improving them—<span class="br-md">updating them to match our growing families and to keep up with the hottest design trends, rearranging furniture and <span class="br-md">adding decor to every bit of wall space available, even remodeling entire sections of it.</span></span></p>

                                <p>If you’re constantly updating your home, it only makes sense that you give your countertops and cabinets a bit of <span class="br-md">TLC as well. We specialize in remodeling, countertops, cabinets, and more!</span></p>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

<section class="home-module-2">


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="extra-padding"><h2>What We Can Do For You</h2>

                    <p>We spend a lot of time in our kitchens and bathrooms, so we <span class="br-md">want to be sure they look great.</span></p>
                <p class="small">We offer a wide variety of kitchen and bathroom remodeling services, including:</p></div>

                <div class="slider hidden-xs hidden-sm" >
                    <div class="flex-row"><div class="slide-menu">
                        <ul class="list-unstyled pager-links">

                        </ul>
                    </div>
                    <div class="flex-row slideshow" data-cycle-slides="> div" data-cycle-swipe=true
                         data-cycle-swipe-fx=scrollHorz>
                        <div class="slide">
                            <div class="slide-content">

                                <div class="extra-padding">
                                    <h5>WOODS, FINISHES, & PAINTS</h5>

                                    <div class="text"><h2>Kitchen Cabinet Installations</h2>

                                        <p>The Benefits of Installing New Bathroom Cabinets</p>

                                        <a href="<?= SITEURL ?>/kitchen-cabinets-el-paso/"><button class="btn btn-primary btn-outline">LEARN MORE</button></a></div>

                                    <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                                    $sm->setSize('sm');
                                    $sm->showNetworkButtons();
                                    $sm->setColorType('singleColor');
                                    ?></div>
                            </div>
                            <div class="slide-img flex-col">

                            </div></div><!-- Kitchen Cabinet Installations -->
                        <div class="slide">
                            <div class="slide-content">

                                <div class="extra-padding">
                                    <h5>WOODS, FINISHES, & PAINTS</h5>

                                    <div class="text"><h2>Bathroom Cabinet Installations</h2>

                                        <p>The Benefits of Installing New Kitchen Cabinets</p>

                                        <a href="<?= SITEURL ?>/bathroom-cabinets-el-paso/"><button class="btn btn-primary btn-outline">LEARN MORE</button></a></div>

                                    <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                                    $sm->setSize('sm');
                                    $sm->showNetworkButtons();
                                    $sm->setColorType('singleColor');
                                    ?></div>
                            </div>
                            <div class="slide-img flex-col">

                            </div></div><!-- Bathroom Cabinet Installations -->
                        <div class="slide">
                            <div class="slide-content">

                                <div class="extra-padding">
                                    <h5>WOODS, FINISHES, & PAINTS</h5>

                                    <div class="text"><h2>Cabinet Design</h2>

                                        <p>The Benefits of Installing New Kitchen Cabinets</p>

                                        <a href="<?= SITEURL ?>/cabinets/"><button class="btn btn-primary btn-outline">LEARN MORE</button></a></div>

                                    <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                                    $sm->setSize('sm');
                                    $sm->showNetworkButtons();
                                    $sm->setColorType('singleColor');
                                    ?></div>
                            </div>
                            <div class="slide-img flex-col">

                            </div></div><!-- Cabinet Design -->
                        <div class="slide">
                            <div class="slide-content">

                                <div class="extra-padding">
                                    <h5>WOODS, FINISHES, & PAINTS</h5>

                                    <div class="text"><h2>Bathroom Remodeling</h2>

                                        <p>The Benefits of Installing New Kitchen Cabinets</p>

                                        <a href="<?= SITEURL ?>/bathroom-remodeling/"><button class="btn btn-primary btn-outline">LEARN MORE</button></a></div>

                                    <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                                    $sm->setSize('sm');
                                    $sm->showNetworkButtons();
                                    $sm->setColorType('singleColor');
                                    ?></div>
                            </div>
                            <div class="slide-img flex-col">

                            </div></div><!-- Bathroom Remodeling -->
                        <div class="slide">
                            <div class="slide-content">

                                <div class="extra-padding">
                                    <h5>WOODS, FINISHES, & PAINTS</h5>

                                    <div class="text"><h2>Kitchen Remodeling</h2>

                                        <p>The Benefits of Installing New Kitchen Cabinets</p>
                                        <a href="<?= SITEURL ?>/kitchen-remodeling/"><button class="btn btn-primary btn-outline">LEARN MORE</button></a></div>

                                    <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                                    $sm->setSize('sm');
                                    $sm->showNetworkButtons();
                                    $sm->setColorType('singleColor');
                                    ?></div>
                            </div>
                            <div class="slide-img flex-col">

                            </div></div><!-- Kitchen Remodeling -->
                        <div class="slide">
                            <div class="slide-content">

                                <div class="extra-padding">
                                    <h5>WOODS, FINISHES, & PAINTS</h5>

                                    <div class="text"><h2>Granite Countertops</h2>

                                        <p>The Benefits of Installing New Kitchen Cabinets</p>
                                        <a href="<?= SITEURL ?>/granite-countertops-el-paso/"><button class="btn btn-primary btn-outline">LEARN MORE</button></a></div>

                                    <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                                    $sm->setSize('sm');
                                    $sm->showNetworkButtons();
                                    $sm->setColorType('singleColor');
                                    ?></div>
                            </div>
                            <div class="slide-img flex-col">

                            </div></div><!-- Granite Countertops -->
                        <div class="slide">
                            <div class="slide-content">

                                <div class="extra-padding">
                                    <h5>WOODS, FINISHES, & PAINTS</h5>

                                    <div class="text"><h2>Quartz Countertops</h2>

                                        <p>The Benefits of Installing New Kitchen Cabinets</p>
                                        <a href="<?= SITEURL ?>/quartz-countertops-el-paso/"><button class="btn btn-primary btn-outline">LEARN MORE</button></a></div>

                                    <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                                    $sm->setSize('sm');
                                    $sm->showNetworkButtons();
                                    $sm->setColorType('singleColor');
                                    ?></div>
                            </div>
                            <div class="slide-img flex-col">

                            </div></div><!-- Quartz Countertops -->
                        <div class="slide">
                            <div class="slide-content">

                                <div class="extra-padding">
                                    <h5>WOODS, FINISHES, & PAINTS</h5>

                                    <div class="text"><h2>Marble Countertops</h2>

                                        <p>The Benefits of Installing New Kitchen Cabinets</p>
                                        <a href="<?= SITEURL ?>/marble-countertops-el-paso/"><button class="btn btn-primary btn-outline">LEARN MORE</button></a></div>

                                    <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                                    $sm->setSize('sm');
                                    $sm->showNetworkButtons();
                                    $sm->setColorType('singleColor');
                                    ?></div>
                            </div>
                            <div class="slide-img flex-col">

                            </div></div><!-- Marble Countertops -->
                    </div>
                    </div>
                </div>

                <div class="cycle-pager hidden-xs hidden-sm"></div>

            </div>
        </div>
    </div>
    <section class="visible-xs visible-sm icon-row">
        <ul class="flex-row">
            <?php get_template_part('template-parts/icon', 'row'); ?>
        </ul>
    </section>

</section>


    <section class="home-module-1">
        <div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="extra-padding">
                            <div class="text-center">
                                <h2>We work hard to ensure you <span class="br-xs">are <span class="brand">satisfied</span> with all <span class="br-xs">of the services we offer.</span></span></h2>
                                <p class="blurb">We only work with the best of the best in terms of the tools and materials we use. With us, you can guarantee that you will be satisfied with the final results and that the final product will last for many years.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-module-1 bg-dark">
        <div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="extra-padding">
                            <div class="text-center"><h2>Our Materials</h2>
                                <h3>Constantly Updating Your Home</h3>
                                <a href="<?= SITEURL ?>/granite-countertops-el-paso/"><button class="btn btn-primary">FIND MATERIALS</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="home-module-5 grid waypoint-stagger">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6 col-xs-12 flex-col">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12  waypoints">
                            <div class="bg bg-countertops"><a href="<?= SITEURL ?>/countertops/" class="fade-down"><strong>Countertops</strong> <span>Granite, Quartz & Marble</span></a></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 waypoints">
                            <div class="bg bg-cabinets"><a href="<?= SITEURL ?>/cabinets/" class="fade-down"><strong>Cabinets</strong> <span>Kitchen Cabinets & Bathroom Cabinets</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 flex-col waypoints">
                            <div class="bg-remodeling"><a href="<?= SITEURL ?>/kitchen-remodeling/" class="fade-down"><strong>Remodeling</strong> <span>Bathroom & Kitchen</span></a></div>
            </div>
        </div>
    </div>
</section>
<section class="home-module-4">

    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6 append-to-md flex-col">

                <div class="card">

                    <div class="testimonial">
                        <div class="card-text"><h2 class="">Review Us</h2>
                        <em>Happy Clients</em>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci </p>

                        <p class="author">Lorem ipsum</p>

                        <img src="<?= IMGURL ?>5-star-rating.png" alt="5 stars" height="20" />

                        <a href="https://www.google.com/search?q=magic+stone+el+paso&oq=magic+stone+el+paso&aqs=chrome..69i57j69i60l3j0.5606j0j4&sourceid=chrome&ie=UTF-8#lrd=0x86e75b070322b1e1:0x52dc11769adb6dc2,3,," target="_blank">
                            <button class="btn-default btn">Review Us Here</button>
                        </a></div>
                    </div>

                </div>



            </div>
            <div class="col-md-6 flex-col">
                <div class="extra-padding">
                 <h2>Residential & <span class="br-xs">Commercial Services</span></h2>

                <p>We currently offer residential kitchen and bathroom remodeling services to residents in El Paso and Las Cruces but are looking to expand our reach to commercial services as well. Fifteen years ago, we started this company from scratch with the goal of helping homeowners upgrade the cabinets and countertops in their homes so they can have the dream home they always envisioned.</p>
                <div class="visible-md visible-lg">
                    <br /><br />
                </div>
                <h2>Locations We Serve</h2>

                <p>We are based in El Paso, Texas but are happy to serve homeowners in Las Cruces and other surrounding communities. We can work in homes of all sizes, both big and small, and ages. No matter the kind of bathroom or kitchen you have, we’re ready and able to help you.</p></div>

            </div>
        </div>
        <img src="<?= IMGURL ?>counters-sm.jpg" alt="Why Choose Us" class="no-margin visible-xs" />
        <div class="row flex-row">
            <div class="col-md-6 flex-col">
                <div class="extra-padding"><h2>Why Choose Us?</h2>

                <p>We understand that there are many other granite companies out there preaching the same services to you, but with our expert skills, knowledge, and materials, you can’t go wrong when you receive remodeling services from our company. In addition, we have all the necessary certifications for this industry, including in Quartz, which is required.</p></div>
            </div>

            <div class="col-md-6 hidden-xs flex-col">
                <img src="<?= IMGURL ?>why-choose-us.jpg" alt="Why Choose Us" />
            </div>
        </div>
    </div>

</section>

<section class="home-module-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="extra-padding"><h2>Call Today!</h2>
                <p>If you’re looking to update your cabinets, remodel your kitchen, or anything in between, Magic Stone Granite, LLC is the place to call. We accept credit card payments, checks, and cash and can help you in both English and Spanish. We’re always ready to help you get the job done right. Our team of hardworking professionals has what it takes to help you capture your vision and get the job done right the first time.
                </p>

                <p><strong>Give us a call today to learn more about the services we offer.</strong></p>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-module-4 visible-xs visible-sm append-to-sm">

</section>


<?php if (is_active_sidebar('form_widgets')) { //if the field is not empty
    ?>
    <section id="contact-form" class="visible-xs">
        <div class="container" id="contact-form2">
            <div class="row">
                <div class="<?= FULLWIDTH ?>">
                    <?php dynamic_sidebar('form_widgets'); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>