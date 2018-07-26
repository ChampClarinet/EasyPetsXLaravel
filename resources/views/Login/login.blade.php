@extends('Login.app', ['title' => 'ล็อกอิน'])

@section('content')
<!-- content -->
  <div class="container" align="center">
    <div class="login-block">
      <div class="login-block-header">
        <img class="center-block" src="{{URL::asset('/res/Logo.png')}}" alt="Logo">
      </div>
      <div class="input-group " style="margin-bottom: 20px;">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input id="tbx-user" type="text" class="form-control" placeholder="อีเมลล์">
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
        <input id="tbx-pwd" type="password" class="form-control" placeholder="รหัสผ่าน" onkeypress="keyPressed(event);">
      </div>
      <hr>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <button id="btn-login" type="submit" class="button">เข้าสู่ระบบ</button>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <a href="create_email.php"><button id="btn-login" type="button" class="button">ลงทะเบียน</button></a>
        </div>
      </div>
    </div>
  </div>
@endsection
