<nav class="navbar navbar-dark bg-black px-4 border-bottom border-secondary">
    <div class="container">
        <a class="navbar-brand text-danger fw-bold fs-4" href="{{ route('user.index') }}">NETFLIX</a>
        <div>
            <a href="{{ route('user.index') }}" class="btn btn-sm btn-outline-light me-2">List User</a>
            <a href="{{ route('user.create') }}" class="btn btn-sm btn-danger">+ Tambah User</a>
        </div>
    </div>
</nav>