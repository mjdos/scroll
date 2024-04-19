@include('painel.layout.header')
<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Criar Nova Demanda</span>
                    <div class="p-3">
                        <td class="text-end">
                            <a href="{{ route('listar_demandas.index')}}"  class="btn btn-sm btn-primary">
                                    Voltar
                            </a>
                        </td>
                    </div>
                </div>

                <div class="card-body py-3">
                    <form action="{{ route('criar_nova_demandas.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row p-3">
                            <div class="row pb-3">
                                
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Arquivo</span>
                                    <input class="form-control form-control-solid" type="file" name="arquivo" >
                                </div>
                      
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Tipo de Arquivo</span>
                                    <select class="form-control form-control-solid" name="tipo_arquivo">
                                        <option value="" id="">Selecione</option>
                                        <option value="audio" id="">Audio</option>
                                        <option value="video" id="">Vídeo</option>
                                        <option value="documento" id="">Documento</option>
                                    </select>
                                </div>
                            
                                
                            </div>
                           

                        </div>
                        <div>
                            <div class="d-flex justify-content-end p-2">
                                <button type="submit" class="btn btn-light-primary ">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>


            </div>
    </div>
</div>

@include('painel.layout.footer')
