@include('painel.layout.header-site')

        <!-- main content area -->
        <div class="primary-content-area container content-padding grid-small-sidebar-left">
            <aside>
                <!--     dahsboard menu -->
                <div class="user-db-menu-ds">
                <ul class="profile-menu-ds">
                        <li>
                            <a href="#">
                            <svg class="crumina-icon">
                                    <use xlink:href="#user-icon"></use>
                                </svg>Perfil</a>
                        </li>
                        <li>
                            <a href="{{ route('entregas_user') }}">
                                <svg class="crumina-icon">
                                    <use xlink:href="#dashboard-icon"></use>
                                </svg>Minhas Entregas
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <svg class="crumina-icon">
                                    <use xlink:href="#wallet-icon"></use>
                                </svg>Carteira
                            </a>
                        </li>
                        <li class="logout">
                            <a href="#">
                                <svg class="crumina-icon">
                                    <use xlink:href="#logout-icon"></use>
                                </svg>Sair 
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="main-content-area">
                <div class="dashboard-wrapper">

                    <!--     best selling items -->
                    <div class="best-sellers-section">
                        <h5>Minhas Entregas</h5>
                        <div class="best-sellers">
                            <table class="content-table">
                                <thead>
                                    <tr>
                                        
                                        <th scope="col" class="heading-label">Documento</th>
                                        <th scope="col" class="heading-label">Data entrega</th>
                                        <th scope="col" class="heading-label">Avaliação</th>
                                        <th scope="col" class="heading-label">Gerar NFT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="Item details">
                                            <div class="product-info">
                                                <div class="product-thumb"><a href="#">
                                                        <img src="{{ url('assets/img/imagem1.png')}}" alt=""></a>
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-name">
                                                        <a href="#">Imagem</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Sales" class="stats-item colored">19/04/2024</td>
                                        <td data-label="Views" class="stats-item">Aceito</td>
                                        <td data-label="Views" class="stats-item"><button class="btn btn-wide btn-dark" style="margin-top:0px !important">Mint NFT</button></td>
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- main content area -->
@include('painel.layout.footer-site')