<div wire:ignore.self class="modal fade" data-backdrop="static" id="primaryModal"  tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $componentName }} | {{ $selected_id > 0 ? 'Editar': 'Crear' }}</h4>
                <h5 class="text-center text-warning" wire:loading>POR FAVOR ESPERE</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
            </div>
            <div class="modal-body">