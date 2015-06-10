@if(\Session::has('successModal'))
<div class="modal fade" id="modal-success-pay" tabindex="-1" role="dialog" aria-labelledby="alert-modal-pay" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <span class="propio" id="alert-modal-pay">Gracias por su compra!</span>
            </div>
            <div class="modal-body">
                <p>{{ session('successModal') }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#modal-success-pay').modal('show');
</script>
@endif