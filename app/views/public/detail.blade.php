<!-- stored in app/views/public/site/detail.blade.php -->
<div class="large-12 columns main-content">
    @if(!$posts->isEmpty())
        @foreach ( $posts as $post)
            @if( $post->post_type == 'news' )
                <div class="news-item">
                    <h1>{{ link_to_route('posts.showNews',$post->post_title,$post->post_name) }}</h1>
                    <div class="share-this up ">
                        <span class="title" title="Share"><i class="fa fa-share-alt"></i></span>
                        <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-facebook" href="#" title="Partilhar no Facebook"><span class="icon-social-facebook"></span></a>
                        <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-twitter" href="#" title="Partilhar no Twitter"><span class="icon-social-twitter"></span></a>
                        <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-gplus" href="#" title="Partilhar no Google+"><span class="icon-googleplus"></span></a>
                        <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-in" href="#" title="Partilhar no LinkedIn"><span class="icon-linkedin"></span></a>
                        <a style="display:none" data-action="share/whatsapp/share" class="link-share-whatsapp" href="whatsapp://send?text=Muitos salários terão corte agravado em outubro, #" title="Partilhar no WhatsApp"><span class="icon-share-whatsapp"></span></a>
                    </div>
                    {{-- falta ver isto --}}
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
                    <div class="row">
                        <div class="xlarge-12 columns">
                            <div class="content">
                                {{ $post['post_content'] }}
                            </div>

                            <div class="share-this down">
                                <span class="title">Share: </span>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-facebook" href="#" title="Partilhar no Facebook"><span class="icon-social-facebook"></span></a>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-twitter" href="#" title="Partilhar no Twitter"><span class="icon-social-twitter"></span></a>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-gplus" href="#" title="Partilhar no Google+"><span class="icon-googleplus"></span></a>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-in" href="#" title="Partilhar no LinkedIn"><span class="icon-linkedin"></span></a>
                                <a style="display:none" data-action="share/whatsapp/share" class="link-share-whatsapp" href="whatsapp://send?text=Muitos salários terão corte agravado em outubro, #" title="Partilhar no WhatsApp"><span class="icon-share-whatsapp"></span></a>
                            </div>
                            <div class="share-this hide-for-medium-down mobile-only" style="display: block; opacity: 0.964888;">
                                <span class="title">Share</span>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-facebook" href="#" title="Partilhar no Facebook"><span class="icon-social-facebook"></span></a>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-twitter" href="#" title="Partilhar no Twitter"><span class="icon-social-twitter"></span></a>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-gplus" href="#" title="Partilhar no Google+"><span class="icon-googleplus"></span></a>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-in" href="#" title="Partilhar no LinkedIn"><span class="icon-linkedin"></span></a>
                                <a style="display:none" data-action="share/whatsapp/share" class="link-share-whatsapp" href="whatsapp://send?text=Muitos salários terão corte agravado em outubro, #" title="Partilhar no WhatsApp"><span class="icon-share-whatsapp"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if( $post->post_type == 'photo-video' )
                <div class="photoVideo-item">
                    <h1>{{ link_to_route('posts.showPhotoVideo',$post->post_title,$post->post_name) }}</h1>
                    <div class="share-this up">
                        <span class="title">Partilhe</span>
                        <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-facebook" href="#" title="Partilhar no Facebook"><span class="icon-social-facebook"></span></a>
                        <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-twitter" href="#" title="Partilhar no Twitter"><span class="icon-social-twitter"></span></a>
                        <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-gplus" href="#" title="Partilhar no Google+"><span class="icon-googleplus"></span></a>
                        <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-in" href="#" title="Partilhar no LinkedIn"><span class="icon-linkedin"></span></a>
                        <a style="display:none" data-action="share/whatsapp/share" class="link-share-whatsapp" href="whatsapp://send?text=Muitos salários terão corte agravado em outubro, #" title="Partilhar no WhatsApp"><span class="icon-share-whatsapp"></span></a>
                    </div>
                    <div class="image">
                        <div class="slider single-item">
                            <div class="flex-video">
                                <iframe width="1000" height="625" src="{{ $post->guid }}" frameborder="0" allowfullscreen="allowfullscreen" data-link="{{ $post->guid }}"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="xlarge-12 columns">

                            <div class="share-this down">
                                <span class="title">Share: </span>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-facebook" href="#" title="Partilhar no Facebook"><span class="icon-social-facebook"></span></a>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-twitter" href="#" title="Partilhar no Twitter"><span class="icon-social-twitter"></span></a>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-gplus" href="#" title="Partilhar no Google+"><span class="icon-googleplus"></span></a>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-in" href="#" title="Partilhar no LinkedIn"><span class="icon-linkedin"></span></a>
                                <a style="display:none" data-action="share/whatsapp/share" class="link-share-whatsapp" href="whatsapp://send?text=Muitos salários terão corte agravado em outubro, #" title="Partilhar no WhatsApp"><span class="icon-share-whatsapp"></span></a>
                            </div>
                            <div class="share-this hide-for-medium-down mobile-only" style="display: block; opacity: 0.964888;">
                                <span class="title">Share</span>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-facebook" href="#" title="Partilhar no Facebook"><span class="icon-social-facebook"></span></a>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-twitter" href="#" title="Partilhar no Twitter"><span class="icon-social-twitter"></span></a>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-gplus" href="#" title="Partilhar no Google+"><span class="icon-googleplus"></span></a>
                                <a rel:url="#" rel:summary="#" rel:title="#" class="link-share-in" href="#" title="Partilhar no LinkedIn"><span class="icon-linkedin"></span></a>
                                <a style="display:none" data-action="share/whatsapp/share" class="link-share-whatsapp" href="whatsapp://send?text=Muitos salários terão corte agravado em outubro, #" title="Partilhar no WhatsApp"><span class="icon-share-whatsapp"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endif
</div>
