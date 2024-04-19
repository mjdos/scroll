@include('painel.layout.header-site')

        <!-- main content area -->
        <div class="primary-content-area bottom-padding-70 ">
            <!--  items categories carousel -->
            <div class="container section-padding">
                <div class="section-title-wrapper">
                    <div class="section-title">Demandas Por Categoria</span></div>
                </div>
                <div class="items-categories-carousel overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="category-card turquoise-gradient-diagonal">
                                    <div class="category-wrapper">
                                        <div class="category-content">
                                            <div class="category-title">Áudios</div>
                                            <div class="category-meta">1 Item</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="category-card turquoise-gradient-diagonal">
                                    <div class="category-wrapper" >
                                        <div class="category-content">
                                            <div class="category-title">Documentos
                                            </div>
                                            <div class="category-meta">1 Item</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="category-card turquoise-gradient-diagonal">
                                    <div class="category-wrapper">
                                        <div class="category-content">
                                            <div class="category-title">Imagens
                                            </div>
                                            <div class="category-meta">1 Item</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--  items categories carousel -->
            
            <!-- featured items grid -->
            <div class="container section-padding">

                <div class="section-title-wrapper">
                    <div class="section-title">
                        <span>Demandas Disponíveis</span>
                    </div>
                    
                </div>
                <div class="featured-box">
                    <div class="featured-box-wrapper grid-4-columns">
                        <div class="featured-item v5">
                            <div class="featured-item-wrapper">
                                <div class="featured-item-content">
                                    <div class="featured-item-image">
                                        <a href="{{ route('categorizar')}}">
                                            <img src="{{url('assets/img/audio.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-item-info">
                                        <div class="item-category social-graphics">
                                            Áudio
                                        </div>
                                        <div class="title">
                                            <a href="#"></a>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="featured-item-post-content">
                                    <span></span>
                                    <div class="item-price"><a href="{{ route('categorizar')}}" class="btn  btn-normal btn-dark">
                                        Categorizar
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-item v5">
                            <div class="featured-item-wrapper">
                                <div class="featured-item-content">
                                    <div class="featured-item-image">
                                        <a href="{{ route('categorizar')}}">
                                            <img src="{{url('assets/img/imagem1.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-item-info">
                                        <div class="item-category social-graphics">
                                            Documento
                                        </div>
                                        <div class="title">
                                            <a href="#"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="featured-item-post-content">
                                    <span></span>
                                    <div class="item-price"><a href="{{ route('categorizar')}}" class="btn  btn-normal btn-dark">
                                        Categorizar
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-item v5">
                            <div class="featured-item-wrapper">
                                <div class="featured-item-content">
                                    <div class="featured-item-image">
                                        <a href="{{ route('categorizar')}}">
                                            <img src="{{url('assets/img/video.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-item-info">
                                        <div class="item-category social-graphics">
                                            Vídeo
                                        </div>
                                        <div class="title">
                                            <a href="#"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-item-post-content">
                                    <span></span>
                                    <div class="item-price"><a href="{{ route('categorizar')}}" class="btn  btn-normal btn-dark">
                                        Categorizar
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- featured items grid -->
        </div>
        <!-- main content area -->

@include('painel.layout.footer-site')