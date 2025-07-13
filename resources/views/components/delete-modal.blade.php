<div class="modal fade" id="{{ $id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="{{ $id }}-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header p-3 border-bottom">
        <h1 class="modal-title fs-5" id="{{ $id }}-label">
          Konfirmasi Hapus
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ $message }} <strong>{{ $model->name }}</strong>?
        <p class="text-danger">Tindakan ini tidak dapat dibatalkan.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-sm btn-danger"
          onclick="event.preventDefault(); document.getElementById('delete-form-{{ $model->id }}').submit();">
          Ya, Hapus
        </button>
        <form action="{{ $url }}" method="POST" id="delete-form-{{ $model->id }}" class="d-none">
          @csrf
          @method('DELETE')
        </form>
      </div>
    </div>
  </div>
</div>
