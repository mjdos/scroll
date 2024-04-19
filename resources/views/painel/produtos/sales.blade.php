@include('painel.layout.header-site')

<!-- main content area -->
<!-- main content area -->
<div class="primary-content-area container content-padding product-page-ds">
    <div class="main-content-area product-ds">
        <div class="product-title-section">
            @if ($request->id == 1)
            <h2>Bertha Luz</h2>
            @elseif($request->id == 2)
            <h2>Dirigível Pax</h2>
            @elseif($request->id == 3)
            <h2>Projeto Porto RJ</h2>
            @elseif($request->id == 4)
            <h2>Logo AN Verde</h2>
            @elseif($request->id == 5)
            <h2>Entrada AN</h2>
            @else
            <h2>Entre em contato com o arquivo nacional </h2>
            @endif


            <div class="product-subtitle">
                @if ($request->id == 1)
                <div class="item-category ui-templates">
                    SUPER RARO
                </div>
                @elseif($request->id == 2)
                <div class="item-category ui-templates">
                    SUPER RARO
                </div>
                @elseif($request->id == 3)
                <div class="item-category video-tutorials">
                     RARO
                </div>
                @elseif($request->id == 4)
                <div class="item-category social-graphics">
                    COMUM
                </div>
                @elseif($request->id == 5)
                <div class="item-category social-graphics">
                    COMUM
                </div>
                @else
                <h2>Entre em contato com o arquivo nacional </h2>
                @endif


                <div class="item-rating">
                    <span class="filled"><svg class="crumina-icon">
                            <use xlink:href="#star2-icon"></use>
                        </svg></span>
                    <span class="filled"><svg class="crumina-icon">
                            <use xlink:href="#star2-icon"></use>
                        </svg></span>
                    <span class="filled"><svg class="crumina-icon">
                            <use xlink:href="#star2-icon"></use>
                        </svg></span>
                    <span class="filled"><svg class="crumina-icon">
                            <use xlink:href="#star2-icon"></use>
                        </svg></span>
                    <span><svg class="crumina-icon">
                            <use xlink:href="#star2-icon"></use>
                        </svg></span>
                </div>
            </div>
        </div>
        <div class="product-image" style="text-align: center;">
            @if ($request->id == 1)
            <img src="{{ url('assets/img/nft-1.png') }}" alt="Product">
            @elseif($request->id == 2)
            <img src="{{ url('assets/img/nft-2.png') }}" alt="Product">
            @elseif($request->id == 3)
            <img src="{{ url('assets/img/nft-7.png') }}" alt="Product">
            @elseif($request->id == 4)
            <img src="{{ url('assets/img/nft-4.png') }}" alt="Product">
            @elseif($request->id == 5)
            <img src="{{ url('assets/img/nft-5.png') }}" alt="Product">
            @else
            <img src="{{ url('assets/img/logo-ver.png') }}" alt="Product">
            <h3>Entre em contato com o arquivo nacional </h3>
            @endif
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
                    <li class="swiper-slide active"><a href="#tab1">Descrição</a></li>

                </ul>
                <div class="tabs-content-wrapper">
                    <div id="tab1" class="tab active">
                        <div class="tab-content">
                            <div class="product-description">

                                @if ($request->id == 1)
                                <div class="title h6">Bertha Luz</div>
                                <p>Bertha Luz na comissão interamericana de mulheres</p>

                                @elseif($request->id == 2)
                                <div class="title h6">Dirigível Pax</div>
                                <p>O Dirigível Pax é uma impressionante e inovadora aeronave que representa o ápice da engenharia aeroespacial contemporânea. Combinando design elegante com tecnologia de ponta, este dirigível é uma obra-prima da aviação moderna.</p>
                                @elseif($request->id == 3)
                                   <div class="title h6">Projeto Porto RJ</div>
                                <p>O Projeto Porto RJ apresenta um mapa meticulosamente detalhado e ricamente elaborado, que oferece uma visão panorâmica da região portuária do Rio de Janeiro. Com uma representação precisa e envolvente dos principais pontos de interesse, este mapa é uma ferramenta essencial para quem deseja explorar e compreender a dinâmica e a diversidade desta importante área da cidade.</p>

                                @elseif($request->id == 4)
                                   <div class="title h6">Logo AN Verde</div>
                                <p>O logo do Arquivo Nacional é uma representação visual marcante e simbólica da instituição. Com sua combinação única de elementos gráficos e cores, o logo transmite a importância histórica e a relevância cultural do Arquivo Nacional como guardião e preservador da memória nacional.</p>

                                @elseif($request->id == 5)
                                   <div class="title h6">Entrada AN</div>
                                <p>A entrada do Arquivo Nacional do Brasil é mais do que um simples portal físico para o edifício que abriga uma parte importante da história do país. É um marco que saúda os visitantes e os convida a adentrar um mundo de memórias, documentos e narrativas que ajudam a compor a história do Brasil</p>

                                @else
                                
                                <h3>Entre em contato com o arquivo nacional </h3>
                                @endif
                             

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <aside>
        <div class="product-additional-info" style="margin-top: 100px;">
            <div class="product-fav-counter"><svg class="crumina-icon">
                    <use xlink:href="#heart-icon"></use>
                </svg><span class="count">105</span>
            </div>
            <div class="product-purchase-info">
                <form class="cryptoki-form" id="purchase-form">
                    <div class="product-price">
                        <div class="product-image" style="text-align: center;">
                            @if ($request->id == 1)
                            <div class="price">0.05 BNB</div>
                            @elseif($request->id == 2)
                            <div class="price">0.05 BNB</div>
                            @elseif($request->id == 3)
                            <div class="price">0.03 BNB</div>
                            @elseif($request->id == 4)
                            <div class="price">0.015 BNB</div>
                            @elseif($request->id == 5)
                            <div class="price">0.0015 BNB</div>
                            @else
                            <img src="{{ url('assets/img/logo-ver.png') }}" alt="Product">
                            <h3>0.00 </h3>
                            @endif
                        </div>


                        <div class="label">compre agora</div>
                    </div>

                    <button class="btn btn-fullwidth  btn-dark" type="submit">Comprar</button>
                </form>
            </div>
            <div class="product-score">
                <div class="score-item">
                    <div class="value">27</div>
                    <div class="label">Vendidos</div>
                </div>
                <div class="score-item">
                    <div class="value">4.3 / 5</div>
                    <div class="label">Avaliação</div>
                </div>
            </div>

        </div>
    </aside>
</div>
<!-- main content area -->
<!-- main content area -->
@include('painel.layout.footer-site')
