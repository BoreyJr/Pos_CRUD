@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $category->name ?? null}}">
    @error('name')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" name="description" placeholder="description" class="form-control" value="{{ $category->description ?? null}}">
    @error('description')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="status">Status</label>
    <input type="checkbox" name="status" class="form-control" {{$category ? ($category->status ? 'checked' : null) : null}} >
    @error('status')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary">
    <button type="button" class="btn btn-danger">
        <a href="/admin/category/index" style="color: white">Cancel</a>
    </button>
</div>
