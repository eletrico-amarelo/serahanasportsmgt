<!-- stored in app/views/public/site/side.blade.php -->
<?php
    use Carbon\Carbon;
    $now = Carbon::now();
?>

<div class="sidebar columns large-4 hide-for-medium-down" role="sidebar" data-equalizer-watch>

    <aside class="social-counter">
        <ul class="clearfix">
            <li class="social-counter-twitter columns large-12">
                <a target="_blank" href="https://twitter.com/serahanasports">
                <i class="fa fa-twitter"></i>
                    {{-- <span>9999</span> --}}
                    {{-- <small>Followers</small> --}}
                </a>
            </li>
            <li class="social-counter-facebook columns large-12">
                <a target="_blank" href="https://www.facebook.com/Serahana.Event.and.Sports.Management">
                    <i class="fa fa-facebook"></i>
                    {{-- <span>9999</span> --}}
                    {{-- <small>Followers</small> --}}
                </a>
            </li>
            <li class="social-counter-gplus columns large-12">
                <a target="_blank" href="https://plus.google.com/104748681377637289158">
                    <i class="fa fa-google-plus"></i>
                    {{-- <span>9999</span> --}}
                    {{-- <small>Followers</small> --}}
                </a>
            </li>
            <li class="social-counter-youtube columns large-12">
                <a target="_blank" href="https://www.youtube.com/user/Serahana1">
                    <i class="fa fa-youtube"></i>
                    {{-- <span>9999</span> --}}
                    {{-- <small>Followers</small> --}}
                </a>
            </li>
        </ul>
    </aside>

    <aside class="mrec-inhouse">
        <div class="columns small-12">
            <img src="http://serahanasportsmgt.com//lib/images/sidebar/featured/ibercup.jpg" width="300" height="250" alt="">
        </div>
    </aside>

    <aside class="links-panel">
        <div class="columns small-12">
            <ul class="clearfix">
                <li class="columns small-6 on" data-links_panel_target=".latest"><i class="fi-plus"></i>recent</li>
                <li class="columns small-6 off" data-links_panel_target=".popular"><i class="fi-plus"></i>popular</li>
            </ul>
            <ol class="latest on clearfix">
                @foreach ( $sidebarData['latestPosts'] as $post)
                <li>
                    <h4>{{ link_to_route('posts.showNews', $post->post_title, $post->post_name) }}</h4>
                    <?php $dt = Carbon::parse( $post->post_modified ); ?>
                    <span class="date">{{ $dt->toFormattedDateString(); }}</span>
                </li>
                @endforeach
            </ol>
            <ol class="popular off clearfix">
                @foreach ( $sidebarData['popularPosts'] as $post)
                <li>
                    <h4><a>{{ $post['post_title'] }}</a></h4>
                    <span class="date">03 de Julho</span>
                </li>
                @endforeach
            </ol>
        </div>
    </aside>

    <aside class="mrec-google">
        <div class="columns small-12">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- mrec-1 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:300px;height:250px"
                 data-ad-client="ca-pub-0705384840849413"
                 data-ad-slot="2105028997"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </aside>

    <aside class="facebook-like-box">
        <div class="columns small-12">
            <div class="fb-like-box" data-href="https://www.facebook.com/Serahana.Event.and.Sports.Management" data-height="590" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
        </div>
    </aside>


    <aside class="twitter-timeline">
        <div class="columns small-12">
            <a class="twitter-timeline" href="https://twitter.com/serahanasports" data-widget-id="519797895365537793">Tweets by @serahanasports</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </aside>

    <aside class="mrec-google">
        <div class="columns small-12">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- mrec-2 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:300px;height:250px"
                 data-ad-client="ca-pub-0705384840849413"
                 data-ad-slot="3581762199"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </aside>

    <aside class="google-plus-badge">
        <script src="https://apis.google.com/js/platform.js" async>
            {lang: 'en-GB'};
        </script>
        <div class="columns small-12">
            <div class="g-page" data-href="https://plus.google.com/102660472552523090806" data-rel="publisher"></div>
        </div>
    </aside>

    <aside class="verification-badge">
        <div class="columns small-6 small-centered">
             <span id="cdSiteSeal1"><script type="text/javascript" src="//tracedseals.starfieldtech.com/siteseal/get?scriptId=cdSiteSeal1&amp;cdSealType=Seal1&amp;sealId=55e4ye7y7mb7328167f5b165ee6fau1jdr7y7mb7355e4ye7241c995707d8fa12"></script></span>
        </div>
    </aside>
</div>

<div class="sidebar left-off-canvas-menu columns large-4 hide-for-large-up" role="sidebar" data-equalizer-watch>
    <nav role="navigation" data-topbar="" class="top-bar show-for-small">
        <ul class="title-area">
            <li class="name">
            <h1><a href="{{ url('/') }}">Serahana Sports</a></h1>
            </li>
            <li class="toggle-topbar"><a href=""><i class="fa fa-bars"></i></a></li>
        </ul>
        <section class="top-bar-section">
            <ul class="left">
                @if (Request::is('tournaments') || Request::is('tournaments/*') )
                <li class="has-dropdown not-click active">
                @else
                <li class="has-dropdown not-click">
                @endif
                    <a href="#">Tournaments</a>
                    <ul class="dropdown">
                        <li class="title back js-generated">
                            <a href="#"><i class="fa fa-arrow-left"></i></a>
                        </li>
                        <li><a href="#">Brazil Cup</a></li>
                        <li><a href="#">Ibercup</a></li>
                        <li><a href="#">Sportcontact International</a></li>
                        <li><a href="#">WSF</a></li>
                    </ul>
                </li>
                @if (Request::is('photo-video') || Request::is('photo-video/*') )
                <li class="active">
                @else
                <li>
                @endif
                    <a href="{{ url('photo-video') }}">Photo Video</a></li>
                </li>
                @if (Request::is('news') || Request::is('news/*') )
                <li class="active">
                @else
                <li>
                @endif
                    <a href="{{ url('news') }}">News</a>
                </li>
                @if (Request::is('about') || Request::is('about/*') )
                <li class="active">
                @else
                <li>
                @endif
                    <a href="{{ url('about') }}">About</a>
                </li>
                @if (Request::is('contact') || Request::is('contact/*') )
                <li class="active">
                @else
                <li>
                @endif
                    <a href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>
        </section>
    </nav>

    <aside class="social-counter">
        <ul class="clearfix">
            <li class="social-counter-twitter columns large-12">
                <a target="_blank" href="https://twitter.com/serahanasports">
                <i class="fa fa-twitter"></i>
                    {{-- <span>9999</span> --}}
                    {{-- <small>Followers</small> --}}
                </a>
            </li>
            <li class="social-counter-facebook columns large-12">
                <a target="_blank" href="https://www.facebook.com/Serahana.Event.and.Sports.Management">
                    <i class="fa fa-facebook"></i>
                    {{-- <span>9999</span> --}}
                    {{-- <small>Followers</small> --}}
                </a>
            </li>
            <li class="social-counter-gplus columns large-12">
                <a target="_blank" href="https://plus.google.com/104748681377637289158">
                    <i class="fa fa-google-plus"></i>
                    {{-- <span>9999</span> --}}
                    {{-- <small>Followers</small> --}}
                </a>
            </li>
            <li class="social-counter-youtube columns large-12">
                <a target="_blank" href="https://www.youtube.com/user/Serahana1">
                    <i class="fa fa-youtube"></i>
                    {{-- <span>9999</span> --}}
                    {{-- <small>Followers</small> --}}
                </a>
            </li>
        </ul>
    </aside>

    <aside class="mrec-inhouse">
        <div class="columns small-12">
            <img src="http://serahanasportsmgt.com//lib/images/sidebar/featured/ibercup.jpg" width="300" height="250" alt="">
        </div>
    </aside>

    <aside class="links-panel">
        <div class="columns small-12">
            <ul class="clearfix">
                <li class="columns small-6 on" data-links_panel_target=".latest"><i class="fi-plus"></i>recent</li>
                <li class="columns small-6 off" data-links_panel_target=".popular"><i class="fi-plus"></i>popular</li>
            </ul>
            <ol class="latest on clearfix">
                @foreach ( $sidebarData['latestPosts'] as $post)
                <li>
                    <h4>{{ link_to_route('posts.showNews', $post->post_title, $post->post_name) }}</h4>
                    <?php $dt = Carbon::parse( $post->post_modified ); ?>
                    <span class="date">{{ $dt->toFormattedDateString(); }}</span>
                </li>
                @endforeach
            </ol>
            <ol class="popular off clearfix">
                @foreach ( $sidebarData['popularPosts'] as $post)
                <li>
                    <h4><a>{{ $post['post_title'] }}</a></h4>
                    <span class="date">03 de Julho</span>
                </li>
                @endforeach
            </ol>
        </div>
    </aside>

    <aside class="mrec-google">
        <div class="columns small-12">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- mrec-1 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:300px;height:250px"
                 data-ad-client="ca-pub-0705384840849413"
                 data-ad-slot="2105028997"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </aside>

    <aside class="facebook-like-box">
        <div class="columns small-12">
            <div class="fb-like-box" data-href="https://www.facebook.com/Serahana.Event.and.Sports.Management" data-height="590" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
        </div>
    </aside>


    <aside class="twitter-timeline">
        <div class="columns small-12">
            <a class="twitter-timeline" href="https://twitter.com/serahanasports" data-widget-id="519797895365537793">Tweets by @serahanasports</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </aside>

    <aside class="mrec-google">
        <div class="columns small-12">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- mrec-2 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:300px;height:250px"
                 data-ad-client="ca-pub-0705384840849413"
                 data-ad-slot="3581762199"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </aside>

    <aside class="google-plus-badge">
        <script src="https://apis.google.com/js/platform.js" async>
            {lang: 'en-GB'};
        </script>
        <div class="columns small-12">
            <div class="g-page" data-href="https://plus.google.com/102660472552523090806" data-rel="publisher"></div>
        </div>
    </aside>

    <aside class="verification-badge">
        <div class="columns small-6 small-centered">
             <span id="cdSiteSeal2"><script type="text/javascript" src="//tracedseals.starfieldtech.com/siteseal/get?scriptId=cdSiteSeal2&amp;cdSealType=Seal1&amp;sealId=55e4ye7y7mb7328167f5b165ee6fau1jdr7y7mb7355e4ye7241c995707d8fa12"></script></span>
        </div>
    </aside>
</div>
