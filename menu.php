<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

<<<<<<< HEAD
            <a class="navbar-brand" href="?page=utama">Sistem Informasi Perguruan Tinggi</a>
=======
            <a class="navbar-brand" href="?page=utama">Sistem Informasi Tinggi Masalah</a>
>>>>>>> 4fe11374e27a18544660f937e67354aa06c0e616
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Data Monevv</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=arsip&actions=tampil">Arsip</a></li>
                        <li><a href="?page=peminjaman&actions=tampil">Peminjaman</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=arsip&actions=report">Laporan Arsip</a></li>
						            <li><a href="?page=peminjaman&actions=report">Laporan Pinjaman</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>


                <?php } ?>


                <li><a href="?page=about&actions=tampil">Data Monev PT</a></li>
                <li><a href="?page=kontak&actions=tampil">Login</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
