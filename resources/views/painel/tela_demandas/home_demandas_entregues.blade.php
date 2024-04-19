@include('painel.layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Entregas</span>
                    <div class="p-3">
                        <td class="text-end">
                            <a href="{{route('home.index')}}"  class="btn btn-sm btn-primary">
                            <i class="bi bi-backspace-fill"></i>
                                Voltar
                            </a>
                        </td>
                    </div>
                </div>

                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-2" style="font-size: 13px;">
                    <thead>
                    <tr class="fw-bolder text-muted bg-secondary">
                        <th class="min-w-125px ps-2 rounded-start text-center">Documentos</th>
                        <th class="min-w-125px ps-2 text-center">Nome do arquivo</th>
                        <th class="min-w-125px  text-center">Quantidade</th>
                        <th class="min-w-125px  text-center">Última Entrega</th>
                        <th class="min-w-125px  text-center rounded-end"></th>

                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">
                                <div>
                                    <img src="{{ url('assets/img/modelo_campo_futebol.jpg')}}" class="h-70px mb-2">
                                </div>
                            </td>
                            <td align="center">
                                <div>
                                    <h5 >Campo de Futebol</h5>
                                </div>
                            </td>
                            <td align="center">
                                <div>
                                    <span >1</span>
                                </div>
                            </td>
                            <td align="center">
                                <div style="margin-left: 40px; margin-top: 20px;">                                           
                                    @if ($id == 0)
                                        <p>
                                            
                                        </p>
                                    @else
                                        <p>
                                            19/04/2024
                                        </p>
                                    @endif  
                                </div>
                            </td>
                            
                            <td align="center" >
                                @if ($id == 0)
                                    <a href="{{route('analisar_demandas.index')}}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-check fs-4"></i>
                                        Analisar
                                        </a>
                                        @else
                                        <a href="{{route('analisar_demandas.index')}}" class="btn btn-sm btn-success">
                                        <i class="bi bi-check fs-4"></i>
                                        Analisado
                                    </a>
                                @endif
                            
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <div>
                                    <img src="{{ url('assets/img/icone_audio.png')}}" class="h-70px mb-2">
                                </div>
                            </td>
                            <td align="center">
                                <div>
                                    <h5 >Arquivo Audio</h5>
                                </div>
                            </td>
                            <td align="center">
                                <div>
                                    <span >1</span>
                                </div>
                            </td>
                            <td align="center">
                                <div style="margin-left: 40px; margin-top: 20px;">                                           
                                        <p>
                                            15/04/2024
                                        </p>
                                </div>
                            </td>
                            <td align="center" >
                                <a href="{{route('analisar_demandas.index')}}" class="btn btn-sm btn-success">
                                    <i class="bi bi-check fs-4"></i>
                                    Analisado
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <div>
                                    <img src="{{ url('assets/img/demanda_presidente1.jpg')}}" class="h-70px mb-2">
                                </div>
                            </td>
                            <td align="center">
                                <div>
                                    <h5 >Presidente da Republica do Brasil</h5>
                                </div>
                            </td>
                            <td align="center">
                                <div>
                                    <span >9</span>
                                </div>
                            </td>
                            <td align="center">
                                <div style="margin-left: 40px; margin-top: 20px;">                                           

                                            10/04/2024
                                        </p>
                                </div>
                            </td>
                            
                            <td align="center" >
                                        <a href="{{route('analisar_demandas.index')}}" class="btn btn-sm btn-success">
                                        <i class="bi bi-check fs-4"></i>
                                        Analisado
                                    </a>
                            
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>

@include('painel.layout.footer')
