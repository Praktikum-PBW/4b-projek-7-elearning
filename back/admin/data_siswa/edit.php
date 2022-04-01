<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h4>Edit User</h4>
                </div>
                <form action="index.php?page=user_update" method="post">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="mb-2">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?= $data['username'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="level" class="form-label">Level</label>
                        <select name="level" id="level" class="form-select">
                            <option value="admin" <?php if ($data['level'] == "admin") echo "selected" ?>>Admin</option>
                            <option value="writer" <?php if ($data['level'] == "writer") echo "selected" ?>>Writer</option>
                        </select>
                    </div>
                    <input type="submit" value="Edit" name="edit" class="btn btn-primary">
                </form>
            </div>
        </div>
<?php
    } else {
        header("Location: index.php?page=kategori");
    }
} else {
    header("Location: index.php?page=kategori");
}
