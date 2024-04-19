@include('painel.layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Demandas</span>
                    <div class="p-3">
                        <td class="text-end">
                            <a href="{{ route('demandas.index')}}"  class="btn btn-sm btn-dark">
                            <i class="bi bi-plus-lg"></i>
                                Adicionar Demanda
                            </a>
                        </td>
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
                                    <th class="min-w-125px ps-2 rounded-start">Tipo de Arquivo</th>
                                    <th class="min-w-125px rounded-end">Editar</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($demandas as $demanda)
                                    <tr>
                                        <td>{{$demanda->tipo_arquivo}}</td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-sm btn-light-warning">
                                                    <i class="fas fa-solid fa-pen"></i>
                                                    Editar
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>


            </div>
    </div>
</div>

@include('painel.layout.footer')
