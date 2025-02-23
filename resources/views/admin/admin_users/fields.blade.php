<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', '姓名:') !!}
    {{-- {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'required' => true]) !!} --}}
    <input type="text" name="name" id="name" value="{{ $adminUsers->name ?? '' }}" class="form-control" required {{ Request::is('admin/adminUsers/edit*') ? 'disabled' : '' }}>
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {{-- {!! Form::text('email', $adminUsers->email ?? '', ['class' => 'form-control', 'id' => 'email', 'required' => true, 'disabled' => Request::is('admin/adminUsers/edit*')]) !!} --}}
    <input type="text" name="email" id="email" value="{{ $adminUsers->email ?? '' }}" class="form-control" required {{ Request::is('admin/adminUsers/edit*') ? 'disabled' : '' }}>
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', '密碼:') !!}
    {{-- {!! Form::text('password', null, ['class' => 'form-control', 'id' => 'password', 'type' => 'password']) !!} --}}
    <input type="password" name="password" id="password" class="form-control" placeholder="請輸入密碼，最少6碼" minlength="6">
    @if (Request::is('admin/adminUsers/edit*'))
    <span class="help-block text-danger">★若欲變更密碼，才需輸入密碼，最少6碼</span>
    @endif
</div>

<div class="form-group col-sm-6">
    {!! Form::label('password_confirmation', '確認密碼:') !!}
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="請輸入密碼，最少6碼" minlength="6">
    @if (Request::is('admin/adminUsers/edit*'))
    <span class="help-block text-danger">★若欲變更密碼，才需輸入密碼，最少6碼</span>
    @endif
</div>
