<!-- stored in app/views/public/site/search.blade.php -->
<?php
    use Carbon\Carbon;
    $now = Carbon::now();
?>
<div class="medium-12 columns main-content searchpage-grid">
<div class="row">
        <div class="title_bg">
            @if ( !( sizeof($searchResults) === 0 ) && $searchStatus['status'] === 'ok' )
                <h1>Search Results for "<span class="lowercase">{{  str_limit( $searchStatus['search'], $limit = 30, $end = '…') }}</span>"</h1>
            @else
                <h1>Search Results</h1>
            @endif
        </div>
        <form method="get" action="/search" >
        <input type="search" title="Enter your search term…" type="search" value="" placeholder="Enter your search term…" name="q">
        </form>
    </div>

    @if ( !( sizeof($searchResults) === 0 ) && $searchStatus['status'] === 'ok' )
        @foreach ( $searchResults as $searchResult )
            <div class="row">
                <article class="columns medium-12 search-item one-per-row">
                    <header class="entry-header">
                        <div class="image left">
                            <a href="link-slug"><img src="{{ $attachments[ $searchResult->id ][0]['guid'] }}" alt="{{ $searchResult->post_title }}" width="130"></a>
                        </div>
                        {{ link_to_route('posts.listNews',  $searchResult->post_type, '', array('class'=>'topic') ) }}
                        <h1 class="title">
                            {{ link_to_route('postNews.show', $searchResult->post_title, $searchResult->post_name, array('rel'=>'bookmark') ) }}
                        </h1>
                        <div class="meta">
                            <time class="timeago timeago_active" datetime="{{ $searchResult->post_modified }}" title="{{ $searchResult->post_modified }}">
                                <?php
                                    $dt = Carbon::parse( $searchResult->post_modified );
                                    $postDiffInDays = Carbon::now()->diffInDays( $dt );
                                     ?>
                                {{ Carbon::now()->subDays( $postDiffInDays )->diffForHumans() }}
                            </time>
                        </div>
                    </header>
                    <div class="intro">
                        <p>{{ $searchResult->post_excerpt }}</p>
                    </div>
                    <div class="related"></div>
                </article>
            </div>
        @endforeach
    @elseif ( ( sizeof($searchResults) === 0 ) && $searchStatus['status'] === 'ok' )
        <h4>Search Results for "<strong>{{  $searchStatus['search'] }}</strong>"</h4>
        <h5>Sorry, no results were found.</h5>
        <h6>Perhaps you mispelled your search query, or need to try using broader search terms.</h6>
    @else
        <h5>type something to begin search</h5>
        <h6>do it!</h6>
    @endif
</div>



