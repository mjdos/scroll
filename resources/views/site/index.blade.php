@include('site.layout.header')


    <!-- MAIN CONTENT AREA -->
    <div class="primary-content-area bottom-padding-20">
      <div class="section-padding">
        <div id="homeSlider" class="swiper">
          <div class="swiper-wrapper">
            <div id="slide-1" class="swiper-slide">
              <picture>
                <img src="{{ url('nft_img/slide1.png') }}" width="940" height="640" alt="Slide Image" loading="lazy">
              </picture>

              <div class="dark-overlay"></div>
              <div class="slide-content">
                <div class="item-info">
                  <div class="item-bid-section">
                    <div class="gradient-border_white-bg slide-button"><a class="btn btn-normal" href="#">Go to Item!</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="slide-2" class="swiper-slide">
                <picture>
                    <img src="{{ url('nft_img/slide2.png') }}" width="940" height="640" alt="Slide Image" loading="lazy">
                </picture>

              <div class="dark-overlay"></div>
                <div class="slide-content">
                    <div class="item-info">
                        <div class="item-bid-section">
                            <div class="gradient-border-purple-bg slide-button"><a class="btn btn-normal" href="#">Go to Item!</a>
                        </div>
                    </div>
                </div>
              </div>

            </div>
            <div id="slide-3" class="swiper-slide">
                <picture>
                    <img src="{{ url('nft_img/slide3.png') }}" width="940" height="640" alt="Slide Image" loading="lazy">
                </picture>
              <div class="dark-overlay"></div>
              <div class="slide-content">
                <div class="item-info">
                  <div class="item-bid-section">
                    <div class="gradient-border_dark-bg slide-button"><a class="btn btn-normal" href="#">Go to Item!</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="homeslider-nav">
            <div class="swiper-button-next"><svg class="crumina-icon next-button">
                <use xlink:href="#arrow-right2-icon"></use>
              </svg></div>
            <div class="swiper-button-prev"><svg class="crumina-icon prev-button">
                <use xlink:href="#arrow-left2-icon"></use>
              </svg></div>
          </div>
        </div>
      </div>

    </div>
    <!-- MAIN CONTENT AREA -->

    
<!-- main content area -->
<div class="primary-content-area content-padding" style="padding-top: 20px !important;">
    <div class="container section-padding">
        <div class="section-title-wrapper">
            <div class="section-title"> <span>NFT Market Place</span></div>
        </div>
        <!-- filterable panel -->
        <div class="filterable-bar">
            <form id="artworks-filter-form">
                <div class="cryptoki-form">

                    <input type="text" placeholder="NFT">
                </div>

                <div class="filter-item">
                    <select class="select-nice">
                        <option value="" selected>Select</option>
                        <option value="auctions-only">Rarity</option>
                        <option value="common">Common</option>
                        <option value="uncommon">Uncommon</option>
                        <option value="rare">Rare</option>
                        <option value="mythic-rare">Super Rare</option>
                    </select>
                </div>
                <div class="filter-item">
                    <select class="select-nice ">
                        <option value="" selected>Select</option>
                        @foreach($users as $user)
                        <option value="{{$user->id}}"> {{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="filter-item">
                    <select class="select-nice ">
                        <option value="ending-soon">Ending Soon</option>
                        <option value="anytime">Anytime</option>
                    </select>
                </div>
                <div class="filter-item">
                    <select class="select-nice ">
                        <option value="lowest-to-highest">Lowest to Highest $</option>
                        <option value="highest-to-lowest">Highest to Lowest $</option>
                    </select>
                </div>
                <div class="filter-button">
                    <button class="btn  btn-normal btn-dark">Filter</button>
                </div>
            </form>
        </div>
        <!-- featured items grid -->
        <div class="featured-box">
            <div class="featured-box-wrapper grid-6-columns">
                <div class="featured-item v6">
                    <div class="featured-item-wrapper">
                        <div class="featured-item-content">
                            <div class="featured-item-image">
                                <a href="{{ route('ntf.show','1') }}">
                                    <img src="{{ url('assets/img/nft-1.png') }}" alt=""></a>
                            </div>
                            <div class="featured-item-info">
                                <div class="item-category ui-templates">
                                    SUPER RARE
                                </div>
                                <div class="title">
                                    <a href="{{ route('ntf.show','1') }}">Bertha Luz</a>
                                </div>
                                <div class="item-price" style="font-size: 20px;">0.05 BNB</div>
                            </div>
                        </div>
                        <div class="featured-item-post-content" align="center">
                            <div class="social-share-box">
                                <div class="share-icons" >

                                    <a class="btn btn-wide gradient-background" style="width: 33% !important;" href="{{ route('ntf.show','1') }}">
                                        View
                                    </a>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="featured-item v6">
                    <div class="featured-item-wrapper">
                        <div class="featured-item-content">
                            <div class="featured-item-image">
                                <a href="{{ route('ntf.show','2') }}">
                                    <img src="{{ url('assets/img/nft-2.png') }}" alt=""></a>
                            </div>
                            <div class="featured-item-info">
                                <div class="item-category ui-templates">
                                    SUPER RARE
                                </div>
                                <div class="title"><a href="{{ route('ntf.show','2') }}">Dirigível Pax</a>
                                </div>
                            </div>
                        </div>
                        <div class="featured-item-post-content">
                            <div class="social-share-box">
                                <div class="share-icons">
                                    <a href="{{ route('ntf.show','2') }}">
                                        View
                                    </a>

                                </div>
                            </div>
                            <div class="item-price">0.05 BNB</div>
                        </div>
                    </div>
                </div>
                <div class="featured-item v6">
                    <div class="featured-item-wrapper">
                        <div class="featured-item-content">
                            <div class="featured-item-image">
                                <a href="{{ route('ntf.show','3') }}">
                                    <img src="{{ url('assets/img/nft-7.png') }}" alt=""></a>
                            </div>
                            <div class="featured-item-info">
                                <div class="item-category video-tutorials">
                                    RARE
                                </div>
                                <div class="title"><a href="{{ route('ntf.show','3') }}">Projeto Porto RJ</a>
                                </div>

                            </div>
                        </div>
                        <div class="featured-item-post-content">
                            <div class="social-share-box">
                                <div class="share-icons">
                                    <a href="{{ route('ntf.show','3') }}">
                                        View
                                    </a>
                                </div>
                            </div>
                            <div class="item-price">0.03 BNB</div>
                        </div>
                    </div>
                </div>

                <div class="featured-item v6">
                    <div class="featured-item-wrapper">
                        <div class="featured-item-content">
                            <div class="featured-item-image">
                                <a href="{{ route('ntf.show','4') }}">
                                    <img src="{{ url('assets/img/nft-4.png') }}" alt=""></a>
                            </div>
                            <div class="featured-item-info">
                                <div class="item-category social-graphics">
                                    COMMON
                                </div>
                                <div class="title"><a href="{{ route('ntf.show','4') }}">Logo AN Verde</a>
                                </div>

                            </div>
                        </div>
                        <div class="featured-item-post-content">
                            <div class="social-share-box">
                                <div class="share-icons">
                                    <a href="{{ route('ntf.show','4') }}">
                                        View
                                    </a>

                                </div>
                            </div>
                            <div class="item-price">0.015 BNB</div>
                        </div>
                    </div>
                </div>
                <div class="featured-item v6">
                    <div class="featured-item-wrapper">
                        <div class="featured-item-content">
                            <div class="featured-item-image">
                                <a href="{{ route('ntf.show','5') }}">
                                    <img src="{{ url('assets/img/nft-5.png') }}" alt=""></a>
                            </div>
                            <div class="featured-item-info">
                                <div class="item-category social-graphics">
                                    COMMON
                                </div>
                                <div class="title"><a href="{{ route('ntf.show','5') }}">Entrada AN</a>
                                </div>

                            </div>
                        </div>
                        <div class="featured-item-post-content">
                            <div class="social-share-box">
                                <div class="share-icons">
                                    <a href="{{ route('ntf.show','5') }}">
                                        View
                                    </a>

                                </div>
                            </div>
                            <div class="item-price">0.0015 BNB</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main content area -->
<br><br>

@include('site.layout.footer')
