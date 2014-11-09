<!-- stored in app/views/public/site/main.blade.php -->
<?php
    use Carbon\Carbon;
    $now = Carbon::now();
?>

<div class="large-12 columns main-content" role="main" data-equalizer-watch>
        <div class="fontpage-slider">
            <div class="slider single-item">
                <div>
                    <img src="/assets/uploads/2014/09/canterbury-racetrack-sydney-australia.jpg" alt="alt 01" title="title 02"/>
                    <div class="slick-caption">
                        Caption One.
                    </div>
                </div>
                <div><img src="/assets/uploads/2014/09/canterbury-racetrack-sydney-australia.jpg" alt="alt 01" title="title 02"/></div>
                <div><img src="/assets/uploads/2014/09/canterbury-racetrack-sydney-australia.jpg" alt="alt 01" title="title 02"/></div>
                <div><img src="/assets/uploads/2014/09/canterbury-racetrack-sydney-australia.jpg" alt="alt 01" title="title 02"/></div>




                <div> {{ HTML::image('/assets/uploads/2014/09/rafael-nadal-roland-garros.jpg', $alt="alt img 01", $attributes = array( 'width' => '100%') ) }} </div>

                <div> {{ HTML::image('/assets/uploads/2014/09/canterbury-racetrack-sydney-australia.jpg', $alt="alt img 02", $attributes = array( 'width' => '100%') ) }} </div>
                <div> {{ HTML::image('/assets/uploads/2014/09/red-yamaha-motorcycle.jpg', $alt="alt img 03", $attributes = array( 'width' => '100%') ) }} </div>
                <div> {{ HTML::image('/assets/uploads/2014/09/track-field-100m.jpg', $alt="alt img 04", $attributes = array( 'width' => '100%') ) }} </div>
                <div> {{ HTML::image('/assets/uploads/2014/09/golf-putt.jpg', $alt="alt img 05", $attributes = array( 'width' => '100%') ) }} </div>
                <div> {{ HTML::image('/assets/uploads/2014/09/usain-bolt.jpg', $alt="alt img 05", $attributes = array( 'width' => '100%') ) }} </div>
                <div> {{ HTML::image('/assets/uploads/2014/09/fencing.jpg', $alt="alt img 05", $attributes = array( 'width' => '100%') ) }} </div>
                <div> {{ HTML::image('/assets/uploads/2014/09/javelin-throw.jpg', $alt="alt img 05", $attributes = array( 'width' => '100%') ) }} </div>
            </div>
        </div>
        <div class="frontpage-grid">
            <div class="row">
                <div class="columns large-12 title_bg">
                    <h3>Latest News</h3>
                </div>
            </div>
            {{-- one big --}}
            <div class="row">
                @foreach ( $posts as $post )
                @if ( $post->id == 5)
                <article class="columns medium-12 large-12 news-list-item one-per-row">
                    <header class="entry-header">
                        {{-- generate images from $attachments --}}
                        @if ( $attachments )
                            <div class="image">
                                <div class="slider single-item">
                                    @foreach ( $attachments[ $post->id ] as $attachment)
                                        <div>
                                            <img src="{{ $attachment['guid'] }}" alt="">
                                            <div class="slick-caption">
                                                {{ $attachment['post_excerpt'] }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        {{ link_to_route('posts.listNews',  $post->post_type, '', array('class'=>'topic') ) }}
                        <h1 class="title">
                            {{ link_to_route('posts.showNews', $post->post_title, $post->post_name) }}
                        </h1>
                        <div class="meta">
                            <time class="timeago timeago_active" datetime="{{ $post->post_modified }}" title="{{ $post->post_modified }}">
                                <?php
                                    $dt = Carbon::parse( $post->post_modified );
                                    $postDiffInDays = Carbon::now()->diffInDays( $dt );
                                     ?>
                                {{ Carbon::now()->subDays( $postDiffInDays )->diffForHumans() }}
                            </time>
                        </div>
                    </header>
                    <div class="intro">
                        <p>{{ $post->post_excerpt }}</p>
                    </div>
                    <div class="more">
                        <ul>
                            <li><i class="fa fa-arrow-right"></i>{{link_to_route('posts.showNews','Read the full article…', $post->post_name)}}</li>
                        </ul>

                    </div>
                </article>
                @endif
                @endforeach
            </div>
            {{-- end one big --}}

            <div class="row">
                <div class="leaderboard-google">
                    <div class="columns small-12 small-centered text-center">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- leaderboard-1 -->
                            <ins class="adsbygoogle"
                                 style="display:inline-block;width:728px;height:90px"
                                 data-ad-client="ca-pub-0705384840849413"
                                 data-ad-slot="3442161399"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </div>

            {{-- two small --}}
            <div class="row">
                @foreach ( $posts as $post )
                @if ( $post->id != 5)
                <article class="columns medium-12 large-6 news-list-item two-per-row">
                    <header class="entry-header">
                        {{-- generate images from $attachments --}}
                        @if ( $attachments )
                            <div class="image">
                                <div class="slider single-item">
                                    @foreach ( $attachments[ $post->id ] as $attachment)
                                        <div>
                                            <img src="{{ $attachment['guid'] }}" alt="">
                                            <div class="slick-caption">
                                                {{ $attachment['post_excerpt'] }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        {{ link_to_route('posts.listNews',  $post->post_type, '', array('class'=>'topic') ) }}
                        <h1 class="title">
                            {{ link_to_route('posts.showNews', $post->post_title, $post->post_name) }}
                        </h1>
                        <div class="meta">
                            <time class="timeago timeago_active" datetime="{{ $post->post_modified }}" title="{{ $post->post_modified }}">
                                <?php
                                    $dt = Carbon::parse( $post->post_modified );
                                    $postDiffInDays = Carbon::now()->diffInDays( $dt );
                                     ?>
                                {{ Carbon::now()->subDays( $postDiffInDays )->diffForHumans() }}
                            </time>
                        </div>
                    </header>
                    <div class="intro">
                        <p>{{ $post->post_excerpt }}</p>
                    </div>
                    <div class="more">
                        <ul>
                            <li><i class="fi-plus"></i>{{link_to_route('posts.showNews','Read the full article…', $post->post_name)}}</li>
                        </ul>
                        <p></p>
                    </div>
                </article>
                @endif
                @endforeach
            </div>
        </div>
    </div>
