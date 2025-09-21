<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { display:flex; justify-content:center; align-items:center; height:100vh; background:#7ed0f2; }
        .card { background:#fff; padding:40px; border-radius:15px; box-shadow:0 0 20px rgba(0,0,0,.2); }
        input { width:100%; padding:10px; margin:10px 0; border-radius:8px; border:1px solid #7a42f4; }
        button { background:#7ed0f2; padding:10px; width:100%; border:none; border-radius:8px; cursor:pointer; font-weight:bold; }
        button:hover { background:#6ab5d8; }
    </style>
</head>
<body>
    <div class="card">
        <h2 style="text-align:center">LOGIN</h2>
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <input type="text" name="nim" placeholder="NIM" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>
