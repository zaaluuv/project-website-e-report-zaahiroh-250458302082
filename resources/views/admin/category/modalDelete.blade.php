<div class="modal fade" id="delete{{ $row->id }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data Kategori</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('delete.category') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{ $row->id }}">
                <p>Apakah Anda yakin ingin menghapus data {{ $row->category }} ?</p>
                <div class="form-group">
                  <input type="text" name="category" class="form-control" placeholder="Masukkan Data Kategori">
                </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">Delete</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>