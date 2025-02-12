<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Judul halaman -->
    <title>Eloquent Relationships : Relasi One to Many</title>

    <!-- Mengimpor Bootstrap CSS untuk tampilan yang lebih menarik -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <!-- Mengimpor Font Awesome untuk ikon komentar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
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
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To Many</h5>

                <!-- Tabel untuk menampilkan data post dan komentar -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul Post</th>
                            <th>Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Looping melalui semua post -->
                        @foreach($posts as $post)
                            <tr>
                                <!-- Menampilkan judul post -->
                                <td>{{ $post->title }}</td>
                                <td>
                                    <!-- Looping melalui semua komentar yang terkait dengan post -->
                                    @foreach($post->comments()->get() as $comment)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                                <!-- Menampilkan ikon komentar dan isi komentar -->
                                                <i class="fa fa-comments"></i> {{ $comment->comment }}
                                            </div>
                                        </div>
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
