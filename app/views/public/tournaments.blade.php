<!-- stored in app/views/public/site/tournaments.blade.php -->
<?php
    use Carbon\Carbon;
    $now = Carbon::now();
?>

<div class="large-12 columns main-content tournaments-list" role="main" data-equalizer-watch>
    <div class="row">
        <div class="columns large-12 title_bg">
            <h3>Tournaments</h3>
        </div>
    </div>

    @if( !empty( $posts ) )

        <?php $i=1; ?>
        @foreach ( $posts as $post )

            @if ( $i & 1 )
                <div class="row">
            @endif
                    <article class="columns medium-12 large-6 tournaments-list__item two-per-row">
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
            @if ( !( $i & 1 ) ||  $i ===  count( $posts ) )
                </div>
            @endif
            @if ( $i === 4 )
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
            @endif
            @if ( $i === 8 )
                <div class="row">
                    <div class="leaderboard-google">
                        <div class="columns small-12 small-centered text-center">
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- leaderboard-2 -->
                            <ins class="adsbygoogle"
                                 style="display:inline-block;width:728px;height:90px"
                                 data-ad-client="ca-pub-0705384840849413"
                                 data-ad-slot="4918894594"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </div>
                </div>
            @endif


            <?php $i++; ?>
        @endforeach
    @endif

</div>


