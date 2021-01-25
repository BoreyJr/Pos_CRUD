@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name" class="form-control">
    @error('name')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" name="description" placeholder="description" class="form-control">
    @error('description')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="sale_price">Sale Price</label>
    <input class="form-control" type="number" name="sale_price" min="0.00" max="10000.00" step="0.01" />
    @error('sale_price')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="purchase_price">Purchase Price</label>
    <input class="form-control" type="number" name="purchase_price" min="0.00" max="10000.00" step="0.01" />
    @error('purchase_price')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="number" class="form-control" name="quantity" placeholder="quantity">
    @error('quantity')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <select class="form-select form-control" aria-label="Default select Sub category"  class="">
        <option selected disabled>Sub Category</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    @error('sub_category')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="enabled">Status</label>
    <input type="checkbox" class="form-control" name="enabled" >
    @error('enabled')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary">
    <button type="button" class="btn btn-danger">
        <a href="/admin/customer/index" style="color: white">Cancel</a>
    </button>
</div>
