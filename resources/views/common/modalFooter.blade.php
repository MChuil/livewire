            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" wire:click.prevent="resetUI() " class="btn btn-default close-modal" type="button">Cerrar</button>

                @if($selected_id < 1)
                    <button wire:click.prevent="Store() " class="btn btn-info close-modal" type="button">Guardar</button>
                @else
                    <button wire:click.prevent="Update() " class="btn btn-success close-modal " type="button">Actualizar</button>
                @endif
            </div>
        </div>
    </div>
</div>