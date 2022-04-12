<div class="modal fade" id="modalDelete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <form class="modal-content" method="post" action="#">
                @method('delete')
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        <i class="fas fa-trash"></i> Hapus Data </h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    Apakah yakin akan dihapus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                </div>
            </form>
        </div>
    </div>
@push('js')
    <script>
        $(function(){
            $('#modalDelete').on('show.bs.modal', function (event){
                var button = $(event.relatedTarget)
                var recipient = button.data('link')
                var modal = $(this)
                modal.find('.modal-content').attr('action',recipient)
            })
        });
    </script>
@endpush
