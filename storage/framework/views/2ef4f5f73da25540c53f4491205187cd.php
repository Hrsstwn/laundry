<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
        .navbar-nav {
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Laundry Haris</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" aria-current="page" href="<?php echo e(route('home')); ?>">Beranda</a>
              <a class="nav-link active" href="<?php echo e(route('pegawai.index')); ?>">Pegawai</a>
              <a class="nav-link" href="<?php echo e(route('member.index')); ?>">Member</a>
              <a class="nav-link" href="<?php echo e(route('barang.index')); ?>">Barang</a>
            </div>
          </div>
        </div>
    </nav>
    <br>
    <div class="container">
        
        <h1 class="mb-4">Data Pegawai</h1>
        <a href="<?php echo e(route('pegawai.create')); ?>" class="btn btn-primary">Tambah Pegawai</a><hr>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Password</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th scope="row"><?php echo e($key + 1); ?></th>
                        <td><?php echo e($pegawai->nama_pegawai); ?></td>
                        <td class="text-truncate" style="max-width: 150px;"><?php echo e($pegawai->password); ?></td>
                        <td class="text-truncate" style="max-width: 150px;"><?php echo e($pegawai->alamat); ?></td>
                        <td><?php echo e($pegawai->no_hp); ?></td>
                        <td><?php echo e($pegawai->jabatan); ?></td>
                        <td> 
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('pegawai.destroy', $pegawai->id)); ?>" method="POST">
                                <a href="<?php echo e(route('pegawai.show', $pegawai->id)); ?>" class="btn btn-sm btn-info">Detail</a>
                                <a href="<?php echo e(route('pegawai.edit', $pegawai->id)); ?>" class="btn btn-sm btn-info">Update</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="alert alert-danger">
                            Data Pegawai Belum Ada.
                        </div>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\PemesananLaundry-main\resources\views/pegawai/index.blade.php ENDPATH**/ ?>