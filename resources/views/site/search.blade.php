@include('site.layout.header')


<!-- MAIN CONTENT AREA -->


<!-- main content area -->
<div class="primary-content-area content-padding" style="padding-top: 20px !important;">
    <div class="container section-padding">
        <div class="section-title-wrapper">
            <div class="section-title"> <span>NFT Market Place</span></div>
        </div>
        <!-- filterable panel -->
        <div class="filterable-bar">
            <form id="artworks-filter-form" action="{{ route('nft.filter') }}" method="GET">
                @csrf
                <div class="cryptoki-form">
                    <span>Name of NFT</span><br>
                    <input type="text" name="nome">
                </div>



                <div class="cryptoki-form">
                    <span>Name of Author</span><br>
                    <input type="text" name="author">
                </div>

                <div class="form-field">
                    <label for="rarity">Rarity</label><br>
                    <select id="rarity_id" name="rarity_id">
                        <option value="" selected>Select</option>
                        @foreach($raridades as $raridade)
                        <option value="{{$raridade->id}}"> {{$raridade->nome}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-field">
                    <label for="price">Price</label><br>
                    <select id="price" name="price"> <!-- Alterado o ID para 'price' e adicionado o atributo 'name' -->
                        <option value="" selected>Select</option>
                        <option value="lowest">Lowest to Highest $</option>
                        <option value="highest">Highest to Lowest $</option>
                    </select>
                </div>

                <div class="filter-button"><br>
                    <button class="btn  btn-normal btn-dark">Filter</button>
                </div>
            </form>
        </div>
        <!-- featured items grid -->
        <div class="featured-box">
            <div class="featured-box-wrapper grid-6-columns">

                @foreach ($nfts as $nft)

                <div class="featured-item v1" >
                    <div class="featured-item-wrapper">
                        <div class="featured-item-content">
                            <div class="featured-item-image">
                                <a href="{{ route('ntf.show',$nft->id) }}">
                                    <img src="{{ url($nft->imagem) }}" alt="{{ $nft->nome }}">
                                </a>
                            </div>
                            <div class="featured-item-info">
                                <div class="item-category ui-templates">
                                    {{ $nft->raridade()->first()->nome }}
                                </div>
                                <div class="title">
                                    <a href="{{ route('ntf.show',$nft->id) }}">{{ $nft->nome }}</a>
                                </div>
                                <div class="item-price" style="font-size: 20px;">{{ $nft->value }} ETH</div>
                            </div>
                        </div>
                        <div class="featured-item-post-content">
                            <div class="social-share-box">
                                <div class="share-icons">

                                    <a class="btn btn-wide gradient-background" style="width: 33% !important;" href="{{ route('ntf.show',$nft->id) }}">
                                        View
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- main content area -->

@include('site.layout.footer')
