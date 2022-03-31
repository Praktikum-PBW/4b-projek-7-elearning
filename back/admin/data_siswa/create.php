<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Tambah User</h4>
        </div>
        <form action="index.php?page=user_store" method="post">
            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-2">
                <label for="level" class="form-label">Level</label>
                <select name="level" id="level" class="form-select">
                    <option value="admin">Admin</option>
                    <option value="writer">Writer</option>
                </select>
            </div>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
        </form>
    </div>
</div>