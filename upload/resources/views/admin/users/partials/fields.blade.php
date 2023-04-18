


@if(! $errors->isEmpty())
<div class="alert alert-danger">
    @foreach ( $errors->all() as $message  )
    <li>{{ $message }}</li>
    @endforeach
</div>
@endif
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $model->name }}" >
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $model->email }}" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ $model->password }}" >
        </div>
    </div>
</div>
<div class="form-group">
    <label for="content">Role</label>
    <select name="role" id="" class="form-control">
        @foreach ($roles as $role)
        <option value="{{ $role->id }}">{{ $role->name }}</option>
        @endforeach

     </select>
</div>
<br>
<div class="form-group">
    <input type="submit" class="btn btn-primary"  value="Submit" >
</div>
