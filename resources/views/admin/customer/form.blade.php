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
    <label for="phone">Phone</label>
    <input type="text" name="phone" placeholder="Phone" class="form-control">
    @error('phone')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
    @error('email')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Address">
    @error('address')
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
