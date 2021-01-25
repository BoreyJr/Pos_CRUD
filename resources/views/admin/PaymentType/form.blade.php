@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name" class="form-control" v-model="data.name">
    @error('name')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="phone">Status</label>
    <input type="checkbox" name="status" placeholder="status" class="form-control" v-model="data.status" >
    @error('status')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary">
    <button type="button" class="btn btn-danger">
        <a href="/PaymentType/index" style="color: white">Cancel</a>
    </button>
</div>
