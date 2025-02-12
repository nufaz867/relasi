<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Judul halaman -->
    <title>Eloquent Relationships : Relasi One to One & Many To Many</title>

    <!-- Mengimpor Bootstrap CSS untuk tampilan yang lebih menarik -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <!-- Judul utama dengan link ke website -->
                <h3 class="text-center">
                    <a href="https://santrikoding.com">www.santrikoding.com</a>
                </h3>

                <!-- Subjudul halaman -->
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To One & Many To Many</h5>

                <!-- Tabel untuk menampilkan data user, nomor telepon, dan roles -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama User</th> <!-- Nama pengguna -->
                            <th>Nomor Telepon</th> <!-- Relasi One to One -->
                            <th>Roles</th> <!-- Relasi Many to Many -->
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Looping melalui semua user -->
                        @foreach($users as $user)
                        <tr>
                            <!-- Menampilkan nama user -->
                            <td>{{ $user->name }}</td>

                            <!-- Menampilkan nomor telepon user yang berelasi (One to One) -->
                            <td>{{ $user->phone->phone }}</td>

                            <!-- Menampilkan roles yang dimiliki user (Many to Many) -->
                            <td>
                                @foreach ($user->roles()->get() as $role)
                                    <!-- Menampilkan setiap role dalam bentuk button -->
                                    <button class="btn btn-sm btn-primary me-2">{{ $role->name }}</button>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
