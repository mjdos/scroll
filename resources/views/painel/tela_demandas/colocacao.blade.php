@include('painel.layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Ranking</span>
                    <div class="p-3">
                        <td class="text-end">
                            <a href="{{route('home.index')}}"  class="btn btn-sm btn-primary">
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
                                    <th class="min-w-40px ps-3 rounded-start">Colocação</th>
                                    <th class="min-w-225px">Colaborador</th>
                                    <th class="min-w-150px">Documentos Entregues</th>
                                    <th class="min-w-150px">NFTs Mintados</th>
                                </tr>
                            </thead>

                            <tbody>
                                    <tr>
                                        <th class="row">
                                            <div style="padding-left: 30px;">
                                                <h5>
                                                    1º
                                                </h5>
                                            </div>
                                        </th>
                                        <td>
                                            <div style="display: flex; align-items: center;">
                                                <img src="{{ url('assets/img/colaborador1.png')}}" class="h-25px mb-2" style="margin-right: 10px;">
                                                <span>Matheus Henrique Almeida</span>
                                            </div>
                                        </td>         
                                        <td>
                                            <div style="margin-left: 70px;">
                                                <span>125</span>
                                            </div>
                                        </td>          
                                        <td>
                                            <div style="margin-left: 40px;">
                                                <span>15</span>
                                            </div>
                                        </td>          
                                    </tr>
                                    <tr>
                                        <th class="row">
                                            <div style="padding-left: 30px;">
                                                <h5>
                                                    2º
                                                </h5>
                                            </div>
                                        </th>
                                        <td>
                                            <div style="display: flex; align-items: center;">
                                                <img src="{{ url('assets/img/colaborador2.png')}}" class="h-25px mb-2" style="margin-right: 10px;">
                                                <span>Laura Beatriz Rodrigues</span>
                                            </div>
                                        </td>         
                                        <td>
                                            <div style="margin-left: 70px;">
                                                <span>100</span>
                                            </div>
                                        </td>          
                                        <td>
                                            <div style="margin-left: 40px;">
                                                <span>12</span>
                                            </div>
                                        </td>          
                                    </tr>
                                    <tr>
                                        <th class="row">
                                            <div style="padding-left: 30px;">
                                                <h5>
                                                    3º
                                                </h5>
                                            </div>
                                        </th>
                                        <td>
                                            <div style="display: flex; align-items: center;">
                                                <img src="{{ url('assets/img/colaborador3.png')}}" class="h-25px mb-2" style="margin-right: 10px;">
                                                <span>Gabriel Lucas Pereira</span>
                                            </div>
                                        </td>         
                                        <td>
                                            <div style="margin-left: 70px;">
                                                <span>97</span>
                                            </div>
                                        </td>          
                                        <td>
                                            <div style="margin-left: 40px;">
                                                <span>08</span>
                                            </div>
                                        </td>          
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('painel.layout.footer')
