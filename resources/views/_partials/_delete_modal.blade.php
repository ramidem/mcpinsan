<div
    class="modal fade"
    id="staticBackdrop"
    data-backdrop="static"
    data-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                Are you sure you want to delete {{ ucwords($singular_name) }}?
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary btn-sm"
                    data-dismiss="modal">
                    Cancel
                </button>
                <form
                    class="d-inline-block"
                    action="{{ route("$plural_name.destroy", $id) }}"
                    method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-dark btn-sm">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
