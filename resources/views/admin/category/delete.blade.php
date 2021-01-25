<div class="modal fade" id="delete{{$category->id}}" tabindex="-1" data-keyboard="false" data-backdrop="static" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title" style="text-align: center">Delete this category</h4>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this?
            </div>
            <div class="modal-footer">
                <form action=/admin/category/delete/{{$category->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger save-cancel">Delete</button>
                    <button type="button" class="btn btn-default save-cancel" data-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
