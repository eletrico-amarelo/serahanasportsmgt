<!-- stored in app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html class="no-js" lang="en-GB">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @section('title')
        <title>{{ 'Serahana Event & Sports Management ltd' }}</title>
    @show
    <meta content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more." name="description">
    <meta content="ZURB, inc. ZURB network also includes zurb.com" name="author">
    <meta content="ZURB, inc. Copyright (c) 2013" name="copyright">

    {{ HTML::style('//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.5/css/foundation.min.css') }}
    {{ HTML::style('//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css') }}
    {{ HTML::style('//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.3.6/slick.css') }}
    {{ HTML::style('assets/css/ses.min.css') }}

    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.5/js/vendor/modernizr.js') }}

</head>
<body>
<div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="white-background">

    <nav class="top-bar hide-for-small" data-topbar="">
        <section class="top-bar-section">
            <ul class="left hide-for-small">
                <li class="clock"></li>
            </ul>
            <div class="icon-bar five-up touch-bar right">
                <a class="item" href="https://twitter.com/serahanasports"><i class="fa fa-twitter size-24"></i><label class="hide">twitter</label></a>
                <a class="item" href="https://www.facebook.com/Serahana.Event.and.Sports.Management"><i class="fa fa-facebook size-24"></i><label class="hide">facebook</label></a>
                <a class="item" href="https://plus.google.com/102660472552523090806"><i class="fa fa-google-plus size-24"></i><label class="hide">google plus</label></a>
                <a class="item" href="https://www.youtube.com/user/Serahana1"><i class="fa fa-youtube size-24"></i><label class="hide">youtube</label></a>
                <a class="item"><i class="fa fa-search size-24"></i><label class="hide">search</label></a>
            </div>
        </section>
    </nav>
    <header class="row show-for-medium-up">
        <div class="large-12 columns logo">
            {{HTML::image('assets/img/logo.jpg') }}
        </div>
    </header>

    </div>

    <div class="contain-to-grid">
        <nav class="top-bar" data-topbar="">
            <div class="icon-bar two-up show-for-small touch-bar">
                <a class="item left left-off-canvas-toggle"><i class="fa fa-bars size-18"></i><label class="hide">Menu</label></a>
                <a class="item right"><i class="fa fa-search size-18"></i><label class="hide">Search</label></a>
            </div>
            <section class="top-bar-section hide-for-small">
                <ul class="left">
                    <li class="divider show-for-medium"></li>
                    <li class="show-for-medium"><a href="#" class="size-24 left-off-canvas-toggle" title="Toggle Sidebar"><i class="fa fa-bars"></i></a></li>
                    <li class="divider"></li>
                    <li class="hide-for-small"><a href="{{ url('/') }}" class="size-24" title="HOME"><i class="fa fa-home"></i></a></li>
                    <li class="divider"></li>
                    <li class="has-dropdown">
                        <a href="{{ url('tournaments') }}" class="" title="Tournaments">TOURNAMENTS</a>
                        <ul class="dropdown">
                            <li><a href="#">Brazil Cup</a></li>
                            <li><a href="{{ url('ibercup') }}" class="" title="Ibercup">Ibercup</a></li>
                            <li><a href="#">Sportcontact International</a></li>
                            <li><a href="{{ url('wsf') }}" class="" title="World Sports Festival">WSF</a></li>
                        </ul>
                    </li>

                    <li class="divider"></li>
                    <li><a href="{{ url('photo-video') }}" title="PHOTO / VIDEO">PHOTO / VIDEO</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('news') }}" class="" title="NEWS">NEWS</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('about') }}" class="" title="ABOUT">ABOUT</a></li>
                    <li class="divider"></li>
                     <li><a href="{{ url('contact') }}" class="" title="CONTACT">CONTACT</a></li>
                    <li class="divider"></li>
                </ul>
            </section>
        </nav>
    </div>

    <div class="row off-canvas-wrap" data-equalizer data-offcanvas>
        <div class="inner-wrap">
        @yield('main')
        @yield('side')
        </div>

    </div>
    <footer>
        thist is the footer : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, ducimus molestiae nesciunt delectus officiis, assumenda architecto porro. Neque, est, similique! Cumque a, nisi voluptatem vero cum accusantium eos voluptatibus obcaecati dignissimos sequi, repellendus odit vel magnam quisquam eaque sint dolorum nulla. Praesentium omnis atque sit inventore ratione magnam quod animi cupiditate in beatae nobis reiciendis laboriosam, consequuntur adipisci eius ipsam iure esse ea molestias, asperiores ut, facilis minima. Aut tempora, autem aperiam explicabo eveniet eius odio delectus blanditiis, quas perferendis natus id vel culpa vitae minima? Commodi odit aliquid eligendi natus, perferendis fugiat. Neque quas natus aut saepe laudantium sit!
    </footer>

    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.5/js/foundation.min.js') }}
     {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.5/js/foundation/foundation.topbar.js') }}

    {{ HTML::script('assets/js/vendor/jquery.clock.min.js') }}

    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/holder/2.3.2/holder.min.js') }}
    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.3.6/slick.min.js') }}
    {{ HTML::script('assets/js/vendor/scotchPanels.min.js') }}
    {{ HTML::script('assets/js/plugins.js') }}
    {{ HTML::script('assets/js/ses.js') }}
    </body>
</html>