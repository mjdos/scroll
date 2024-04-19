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
                    <!--   user stats -->
                    <div class="user-stats-section">
                        <div class="stat-item blue-gradient-diagonal">
                            <div class="stat-icon"></div>
                            <div class="stat-info">
                                <div class="stat-number">436</div>
                                <div class="stat-number">Entregas</div>
                            </div>
                        </div>
                        <div class="stat-item blue-gradient-diagonal">
                            <div class="stat-icon"></div>
                            <div class="stat-info">
                                <div class="stat-number">107</div>
                                <div class="stat-number">Avalições Concluídas</div>
                            </div>
                        </div>
                        <div class="stat-item blue-gradient-diagonal">
                            <div class="stat-icon"></div>
                            <div class="stat-info">
                                <div class="stat-number">30</div>
                                <div class="stat-number">NFT Gerados</div>
                            </div>
                        </div>
                    </div>
                    
                    <!--     best selling items -->
                    <div class="best-sellers-section">
                        <h5>Ranking</h5>
                        <div class="best-sellers">
                            <table class="content-table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="heading-label">Colaborador</th>
                                        <th scope="col" class="heading-label">Qtd de Entregas</th>
                                        <th scope="col" class="heading-label">Qtd de NFT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="Item details">
                                            <div class="product-info">
                                                <div class="item-number">01</div>
                                                <div class="product-thumb"><a href="#">
                                                        <img src="{{ url('assets/img/marcos.jpeg')}}" alt=""></a>
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-name">
                                                        <a href="#">Marcos Alves</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Sales" class="stats-item colored">158</td>
                                        <td data-label="Views" class="stats-item">20</td>
                                        
                                    </tr>
                                    <tr>
                                        <td data-label="Item details">
                                            <div class="product-info">
                                                <div class="item-number">02</div>
                                                <div class="product-thumb"><a href="#">
                                                        <img src="{{ url('assets/img/pedro.jpeg')}}" alt=""></a>
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-name">
                                                        <a href="#">Pedro da Silva</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Sales" class="stats-item colored">94</td>
                                        <td data-label="Views" class="stats-item">18</td>
                                        
                                    </tr>
                                    <tr>
                                        <td data-label="Item details">
                                            <div class="product-info">
                                                <div class="item-number">03</div>
                                                <div class="product-thumb"><a href="#">
                                                        <img src="{{ url('assets/img/ana.jpeg')}}" alt=""></a>
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-name">
                                                        <a href="#">Ana Julia</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Sales" class="stats-item colored">84</td>
                                        <td data-label="Views" class="stats-item">12</td>
                                        
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