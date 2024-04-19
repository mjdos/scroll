@include('painel.layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Análise de Demandas</span>
                    <div class="p-3">
                        <td class="text-end">
                            <a href="{{ route('home_demandas_entregues.index', 0)}}" class="btn btn-sm btn-primary">
                            <i class="bi bi-backspace-fill"></i>
                                Voltar
                            </a>
                        </td>
                    </div>
                </div>

                <div class="card-body py-3">
                    <div class="table-responsive">

                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-2" style="font-size: 13px;">

                            <thead>
                                <tr class="fw-bolder text-muted bg-secondary">
                                    <th class="min-w-80px ps-2 rounded-start">Arquivo</th>
                                    <th class="min-w-325px">Dados do Arquivo</th>
                                    <th class="min-w-325px">Entregas</th>
                                    <th class="min-w-325px">Análise</th>
                                </tr>
                            </thead>

                            <tbody>
                                    <tr>
                                        <th class="row">
                                            <div>
                                                <img src="{{ url('assets/img/modelo_campo_futebol.jpg')}}" class="h-100px mb-3">
                                            </div>
                                        </th>
                                        <td>
                                            <div style="margin-bottom: 25px">
                                                <span>Titulo</span>
                                            </div>
                                
                                            <div style="margin-bottom: 25px">
                                                <span>Descrição</span>
                                            </div>
                                            <div style="margin-bottom: 25px">
                                                <span>Data</span>
                                            </div>
                                            <div>
                                                <span>Marcadores</span>
                                            </div>
                                        </td>         
                                        <td>
                                            <div style="margin-bottom: 25px">
                                                <span>Estãdio de Futebol</span>
                                            </div>
                                
                                            <div style="margin-bottom: 25px">
                                                <span>Final da Copa</span>
                                            </div>
                                            <div style="margin-bottom: 25px">
                                                <span>09/07/2006</span>
                                            </div>
                                            <div>
                                                <span>Time de Futebol; Acessibilidade; Campeonato</span>
                                            </div>
                                        </td>          
                                        <td>
                                            <div>
                                            <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                    <option value="">Selecione</option>
                                                    <option value="">sim</option>
                                                    <option value="">nao</option>
                                                </select>
                                            </div>
                                
                                            <div>
                                                 <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                    <option value="">Selecione</option>
                                                    <option value="">sim</option>
                                                    <option value="">nao</option>
                                                </select>
                                            </div>
                                            <div>
                                                 <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                    <option value="">Selecione</option>
                                                    <option value="">sim</option>
                                                    <option value="">nao</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                    <option>Selecione</option>
                                                    <option value="1">sim</option>
                                                    <option value="2">não</option>
                                                </select>
                                            </div>
                                        </td>          
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive">

                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-2" style="font-size: 13px;">

                            <thead>
                                <tr class="fw-bolder text-muted bg-secondary">
                                    <th class="min-w-80px ps-2 rounded-start">Arquivo</th>
                                    <th class="min-w-325px">Dados do Arquivo</th>
                                    <th class="min-w-325px">Entregas</th>
                                    <th class="min-w-325px">Análise</th>
                                </tr>
                            </thead>

                            <tbody>
                                    <tr>
                                        <th class="row">
                                            <div>
                                                <img src="{{ url('assets/img/modelo_campo_futebol.jpg')}}" class="h-100px mb-3">
                                            </div>
                                        </th>
                                        <td>
                                            <div style="margin-bottom: 25px">
                                                <span>Titulo</span>
                                            </div>
                                            <div style="margin-bottom: 25px">
                                                <span>Descrição</span>
                                            </div>
                                            <div style="margin-bottom: 25px">
                                                <span>Data</span>
                                            </div>
                                            <div>
                                                <span>Marcadores</span>
                                            </div>
                                        </td>         
                                        <td>
                                            <div style="margin-bottom: 25px">
                                                <span>Estádio Olympiastadion</span>
                                            </div>
                                
                                            <div style="margin-bottom: 25px">
                                                <span>Final da Copa do Mundo Fifa 2006</span>
                                            </div>
                                            <div style="margin-bottom: 25px">
                                                <span>20/12/2023</span>
                                            </div>
                                            <div>
                                                <span>Eliminção; Brasil</span>
                                            </div>
                                        </td>          
                                        <td>
                                            <div>
                                            <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                    <option value="">Selecione</option>
                                                    <option value="">sim</option>
                                                    <option value="">nao</option>
                                                </select>
                                            </div>
                                
                                            <div>
                                                 <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                    <option value="">Selecione</option>
                                                    <option value="">sim</option>
                                                    <option value="">nao</option>
                                                </select>
                                            </div>
                                            <div>
                                                 <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                    <option value="">Selecione</option>
                                                    <option value="">sim</option>
                                                    <option value="">nao</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                    <option>Selecione</option>
                                                    <option value="1">sim</option>
                                                    <option value="2">não</option>
                                                </select>
                                            </div>
                                        </td>          
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive">

                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-2" style="font-size: 13px;">

                            <thead>
                                <tr class="fw-bolder text-muted bg-secondary">
                                    <th class="min-w-80px ps-2 rounded-start">Arquivo</th>
                                    <th class="min-w-325px">Dados do Arquivo</th>
                                    <th class="min-w-325px">Entregas</th>
                                    <th class="min-w-325px">Análise</th>
                                </tr>
                            </thead>

                            <tbody>
                                    <tr>
                                        <th class="row">
                                            <div>
                                                <img src="{{ url('assets/img/modelo_campo_futebol.jpg')}}" class="h-100px mb-3">
                                            </div>
                                        </th>
                                        <td>
                                            <div style="margin-bottom: 25px">
                                                <span>Titulo</span>
                                            </div>
                                
                                            <div style="margin-bottom: 25px">
                                                <span>Descrição</span>
                                            </div>
                                            <div style="margin-bottom: 25px">
                                                <span>Data</span>
                                            </div>
                                            <div>
                                                <span>Marcadores</span>
                                            </div>
                                        </td>         
                                        <td>
                                            <div style="margin-bottom: 25px">
                                                <span>Copa do Mundo</span>
                                            </div>
                                
                                            <div style="margin-bottom: 25px">
                                                <span>Itália x França</span>
                                            </div>
                                            <div style="margin-bottom: 25px">
                                                <span>21/05/2001</span>
                                            </div>
                                            <div>
                                                <span>Campeão</span>
                                            </div>
                                        </td>          
                                        <td>
                                            <div>
                                            <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                    <option value="">Selecione</option>
                                                    <option value="">sim</option>
                                                    <option value="">nao</option>
                                                </select>
                                            </div>
                                
                                            <div>
                                                 <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                    <option value="">Selecione</option>
                                                    <option value="">sim</option>
                                                    <option value="">nao</option>
                                                </select>
                                            </div>
                                            <div>
                                                 <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                    <option value="">Selecione</option>
                                                    <option value="">sim</option>
                                                    <option value="">nao</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                    <option>Selecione</option>
                                                    <option value="1">sim</option>
                                                    <option value="2">não</option>
                                                </select>
                                            </div>
                                        </td>          
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Botao de salvar -->

                    <div class="p-3 text-end">
                        <td>
                            <a href="{{route('home_demandas_entregues.index', 1)}}"  class="btn btn-sm btn-success">
                                salvar
                            </a>
                        </td>
                    </div>
                </div>

            </div>


            </div>
    </div>
</div>

@include('painel.layout.footer')
