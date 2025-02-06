<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    @if($errors->any())
        <div style="color: red">
            {{$errors->first()}}
        </div>
    @endif
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mật khẩu" required>
    <button type="submit">Đăng nhập</button>
</form>
