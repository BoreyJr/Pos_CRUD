@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $sub_category->name ?? null}}">
    @error('name')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" name="description" placeholder="description" class="form-control" value="{{ $sub_category->description ?? null}}">
    @error('description')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="category_id">Category ID</label>
    <input type="text" name="category_id" placeholder="category id" class="form-control" value="{{ $sub_category->category_id ?? null}}">
    @error('category_id')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="status">Status</label>
    <input type="checkbox" name="status" class="form-control"  >
    @error('status')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary">
    <button type="button" class="btn btn-danger">
        <a href="/admin/sub_category/index" style="color: white">Cancel</a>
    </button>
</div>
