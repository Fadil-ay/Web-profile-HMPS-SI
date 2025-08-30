<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>    
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="login-box text-center p-5 rounded shadow">
            <h2 class="fw-bold mb-3">Login</h2>
            <p class="mb-4 small">Silahkan Login Terlebih Dahulu</p>

            @if($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul class="mb-0">
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf
                <div class="mb-4">
                     <input type="email" name="email" class="form-control form-control-lg custom-input" required autofocus placeholder="email">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <input type="password" name="password" class="form-control form-control-lg custom-input" required placeholder="Password">
                </div>

                <!-- Tombol Login -->
                <button type="submit" class="btn btn-primary w-100 btn-lg">Login</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

