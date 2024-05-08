@include('painel.layout.header-site')

        <!-- main content area -->
        <div class="primary-content-area container content-padding grid-small-sidebar-left">
            <aside>
                <!--    dashboard menu -->

            </aside>
            <div class="main-content-area">
                <div class="page-title-section">
                    <h2><span class="gradient-text">Create</span> NFT</h2>
                </div>
                <!--  upload item form -->
                <form class="cryptoki-form" id="upload-item-form" action=" {{ route('nft.Store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="upload-row">
                        <div class="upload-column">
                            <h5>Main Details</h5>
                            <div class="form-field">
                                <label for="item-name">Item name</label>
                                <input type="text" name="nome">
                            </div>
                            <div class="form-field">
                                <label for="item-category">NFT Rarity</label>
                                <select id="item-category" name="rarity_id">
                                    <option value="">Select a category</option>
                                    <option value="1">Super rare</option>
                                    <option value="2">Rare</option>
                                    <option value="3">Common</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form-field">
                                    <label for="qtd_mx_mint">Quantity for MINT</label>
                                    <input type="number" name="qtd_mx_mint">
                                </div>
                            </div>
                            <div class="form-field">                        
                                <div class="upload-container">
                                    <div class="artwork-upload">
                                        <div class="label">Imagem</div>
                                        <div class="upload-box"><svg class="crumina-icon">
                                                <use xlink:href="#upload-icon"></use>
                                            </svg>
                                            <div class="upload-notice"> Max 120MB, PNG, JPEG, MP3, MP4</div>
                                            <input type="file" name="imagem" class="btn btn-normal btn-dark browse-btn waves-effect waves-button waves-float waves-light"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-wide gradient-background" type="submit" value="Salvar">
                        </div>
                        <!-- <div class="upload-column">
                            <h5>Upload</h5>
                            <div class="upload-container">
                                <div class="artwork-upload">
                                    <div class="label">Image</div>
                                    <div class="upload-box"><svg class="crumina-icon">
                                            <use xlink:href="#upload-icon"></use>
                                        </svg>
                                        <div class="upload-notice"> Max 120MB, PNG, JPEG, MP3, MP4</div>
                                        <button class="btn btn-normal btn-dark browse-btn waves-effect waves-button waves-float waves-light">Browse
                                            File</button>
                                    </div>
                                </div>
                                <div class="uploaded-preview"><span class="bold green">twitterheaders04.zip</span>
                                uploaded <button class="close" ><svg class="crumina-icon">
                                        <use xlink:href="#close-circle-icon"></use>
                                    </svg></button></div>
                            </div>
                        </div> -->
                    </div>
                </form>
            </div>

        </div>

        @include('painel.layout.footer-site')
