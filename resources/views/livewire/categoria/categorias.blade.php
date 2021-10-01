    <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
            <div class="page-title">
                <div class="float-left">
                    <h1 class="title">{{ $componentName }}</h1>
                </div>

                <div class="float-right">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i>Inicio</a>|
                        </li>
                        <li>
                            <a href="layout-default.html">{{ $componentName }}</a>|
                        </li>
                        <li class="active">
                            <strong>{{ $pageTitle }}</strong>
                        </li>
                    </ol>
                </div>

            </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-xl-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title float-left">{{ $componentName }} | {{ $pageTitle }}</h2>
                <div class="actions panel_actions float-right">
                    <!-- <button type="button" class="btn btn-dark"><i class="fa fa-plus"></i></button> -->
                    <a href="javascript:;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#primaryModal">NUEVA<i class="fa fa-plus text-white"></i></a>
                    <!-- <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i> -->
                </div>
            </header>
            <div class="content-body">    
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Categoría</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $categoria)
                                <tr>
                                    <td>{{ $categoria->categoria}}</td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-info" wire:click="Edit('{{$categoria->id}}')">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        
                                        <button wire:click="prueba({{$categoria->id}})">Prueba</button>

                                        <a href="javascript:void(0)" onclick="Confirm('{{ $categoria->id }}')" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('livewire.categoria.form')
<script>
    document.addEventListener('DOMContentLoaded', () => {
       
        window.livewire.on('showModal', msg => {
            console.log("abriendo....");
            $('#primaryModal').modal('show')
        });
        
        /*window.livewire.on('categoria-added', msg => {
            $('#primaryModal').modal('hide');
            noty(msg);
        })
        
        window.livewire.on('categoria-updated', msg => {
            $('#primaryModal').modal('hide');
            noty(msg);
        })
        
        window.livewire.on('categoria-deleted', msg=>{
            noty(msg);
        })
        
        window.livewire.on('hide-modal', msg =>{
            $('#primaryModal').modal('hide');
        })

        
        window.livewire.on('hidden.bs.modal', msg =>{
            $('.er').css('display','none');
        })*/
    });

    function Confirm(id){
        bootbox.confirm({
            title: "CONFIRMAR",
            message: "¿Desea eliminar el registro?",
            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> Cancelar',
                    className: 'btn-danger'
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> Confirmar',
                    className: 'btn-success'
                }
            },
            callback: function (result) {
                if(result){
                    window.livewire.emit('deteleRow', id);
                }
            }
        })
    }
</script>