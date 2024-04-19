@include('painel.layout.header-site')

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
                            <a href="10-profile-dashboard.html">
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
            <div class="page-title">
                <h2>
                    <span>Documento</span>
                </h2>
            </div>
            <div class="user-db-content-area">
                <form  class="cryptoki-form" id="personal-info-form">
                <img src="{{url('assets/img/imagem1.png')}}" alt="" style="width: 700px"><br><br>
                    <div class="user-db-title">Descreva o documento nos campos abaixo.</div>
                    <div class="form-group">
                        <div class="form-field">
                            <label for="titulo">Título</label>
                            <input type="text" id="titulo" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label for="descricao">Descrição</label>
                            <textarea type="text" id="descricao" value=""></textarea>
                        </div>
                    </div>
                    <div class="form-group">
 
                        <div class="form-field">
                            <label for="phone">Marcadores</label>

                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Vaquejada</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Movimento Social</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Direito Trabalhista</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Greve</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Serviço Público</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Migração</label>
                            </div>

                        </div>
                        
                    </div>
                </form>
            </div>

            <button class="btn btn-wide btn-dark" style="margin-top:0px !important">Enviar para Avaliação</button>
        </div>

    </div>

@include('painel.layout.footer-site')