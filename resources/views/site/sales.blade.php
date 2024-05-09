@include('site.layout.header')
@php
$usuario = Session::get('usuario');
@endphp
<!-- main content area -->
<div class="primary-content-area container content-padding product-page-ds">
    <div class="main-content-area product-ds">
        <div class="product-title-section">
            <h2>{{ $nft->nome }}</h2>
            <div class="product-subtitle">
                <div class="product-author">
                    <span class="avatar box-26"><img src="{{ url('assets/img/avatar.png') }}" alt=""></svg>
                    </span>{{ '@'.$nft->autor()->first()->name }}</div>
            </div>
        </div>
        <div class="product-image">
            <img src="{{ url($nft->imagem) }}" alt="{{ $nft->nome }}">
        </div>
        <div class="product-info">
            <div class="tabs-block swiper-container">
                <div class="swiper-nav">
                    <div class="swiper-button-next">
                        <svg class="crumina-icon next-button">
                            <use xlink:href="#arrow-right2-icon"></use>
                        </svg>
                    </div>
                    <div class="swiper-button-prev">
                        <svg class="crumina-icon prev-button">
                            <use xlink:href="#arrow-left2-icon"></use>
                        </svg>
                    </div>
                </div>
                <ul class="tabs-list swiper-wrapper">
                    <li class="swiper-slide active"><a href="#tab1">Description</a></li>
                    <li class="swiper-slide"><a href="#tab2">Comments <span class="count">{{count($comments)}}</span></a></li>
                </ul>
                <div class="tabs-content-wrapper">
                    <div id="tab1" class="tab active">
                        <div class="tab-content">
                            <div class="product-description">
                                <h3>{{ $nft->nome }}</h3>
                                <p>{{ $nft->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab">
                        <div class="tab-content">
                            <ul class="comments-list">
                                @foreach($comments as $comment)
                                <li class="comment-item has-children">
                                    <div class="comment-item-wrapper">
                                        <div class="avatar-block">
                                            <div class="avatar box-42">
                                                <a href="#">
                                                    <img src="{{ url('assets/img/avatar.png') }}" alt="avatar">
                                                </a>
                                            </div>
                                            <div class="avatar-meta">
                                                <div class="avatar-title"><a href="#">{{$comment->autor->name ?? 'nome de teste' }}</a></div>
                                                <div class="avatar-meta">{{$comment->autor->email ?? 'nome de teste'}}</div>
                                            </div>
                                        </div>
                                        <div class="comment-body">
                                            <p>{{$comment->content}}</p>
                                            <p>{{ $comment->created_at->format('d/m/Y') }}</p>
                                        </div>


                                </li>
                                @endforeach
                            </ul>
                            @if(isset($usuario))
                            <div class="leave-review">
                                <h5 class="content-heading">Leave a review</h5>
                                <form class="cryptoki-form" id="comment-form" action="{{ route('comment.store', $nft->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="author_id" value="{{ auth()->id() }}">
                                    <input type="hidden" name="nft_name" value="{{ $nft->nome }}">

                                    <div class="form-field comment-area">
                                        <label for="message">Your comment</label>
                                        <textarea name="message" id="message" class="comment-form" cols="30" rows="10"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-normal btn-dark">Post review</button>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <aside>
        <div class="product-additional-info">

            <div class="product-purchase-info">
                <form class="cryptoki-form" id="purchase-form">
                    <div class="product-price" style="margin-bottom:1px !important;">
                        <div>
                            <h3>{{ $nft->value }} ETH</h3>
                        </div>
                    </div>
                    <div class="pricing-plans">
                        Rarity
                        <div class="item-category social-graphics" style="font-size: 15px; text-align:center">
                            {{ $nft->raridade()->first()->nome }}
                        </div>


                    </div>
                    <button class="btn btn-fullwidth  gradient-background" type="submit">Mint Now!</button>
                </form>
            </div>
            <div class="product-score">
                <div class="score-item">
                    <div class="value">27</div>
                    <div class="label">Minted</div>
                </div>
                <div class="score-item">
                    <div class="value">6</div>
                    <div class="label">Available</div>
                </div>
            </div>
            <div class="product-details">
                <div class="small-title">Item details</div>
                <div class="product-details-wrapper">
                    <ul class="details-title">
                        <li>Published</li>
                        <li>Updated</li>

                    </ul>
                    <ul class="details-value">
                        <li>{{ $nft->created_at->format('d/m/Y') }}</li>
                        <li>{{ $nft->updated_at->format('d/m/Y') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
</div>
<!-- main content area -->

@include('site.layout.footer')

<script defer src="{{url('assets/js/main.js')}}"></script>
