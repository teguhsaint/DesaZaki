<div class="card mt-3">
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">NIK (Nomor Induk Kependudukan) </label>
                <input type="number" name="nik" class="form-control">
                <small id="helpId" class="text-muted">Sesuai KTP / Kartu Keluarga</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control">
                <small id="helpId" class="text-muted">Sesuai KTP / Kartu Keluarga</small>
            </div>
            <div class="mb-0">
                <label for="" class="form-label">Tempat & Tanggal Lahir</label>
                <div class="row p-2">
                    <div class="col-sm-4">
                        <input placeholder="Tempat" type="text" name="tempat" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="date" name="tgl_lahir" class="form-control">
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div style="padding: 10px;">
                    <div class="row">
                        <div class="col-sm-2  p-0"> <label class="my-1">Jenis Kelamin</label></div>
                        <div class="col-sm d-flex align-items-center">
                            <label class="form-check  form-check-inline">
                                <input type="radio" name="jeniskelamin" value="L" class="form-check-input">
                                <span class="custom-control-indicator">Laki-laki</span>
                            </label>

                            <label class="form-check  form-check-inline">
                                <input type="radio" name="jeniskelamin" value="P" class="form-check-input">
                                <span class="custom-control-indicator">Perempuan</span>
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Alamat / Jl</label>
                <textarea name="alamat" id="" cols="0" rows="0" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-1">
                        <label for="" class="form-label">RT</label>
                        <input class="form-control form-inline" type="text" name="rt">
                    </div>
                    <div class="col-sm-1">
                        <label for="" class="form-label">RW</label>
                        <input class="form-control form-inline" type="text" name="rw">
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">Desa</label>
                        <input class="form-control form-inline" type="text" name="desa">
                    </div>
                    <div class="col-sm">
                        <label for="" class="form-label">Kecamatan</label>
                        <input class="form-control form-inline" type="text" name="kecamatan">
                    </div>
                </div>

            </div>
            <div class="mb-2">
                <div style="padding: 10px;">
                    <div class="row">
                        <div class="col-sm-2 p-0"> <label class="my-1">Agama</label></div>
                        <div class="col-sm-9">
                            <label class="form-check  form-check-inline">
                                <input type="radio" name="agama" value="Islam" class="form-check-input">
                                <span class="custom-control-indicator">Islam</span>
                            </label>
                            <label class="form-check  form-check-inline">
                                <input type="radio" name="agama" value="Kristen" class="form-check-input">
                                <span class="custom-control-indicator">Kristen</span>
                            </label>
                            <label class="form-check  form-check-inline">
                                <input type="radio" name="agama" value="Hindu" class="form-check-input">
                                <span class="custom-control-indicator">Hindu</span>
                            </label>
                            <label class="form-check  form-check-inline">
                                <input type="radio" name="agama" value="Atheis" class="form-check-input">
                                <span class="custom-control-indicator">Budha</span>
                            </label>

                            <label class="form-check  form-check-inline">
                                <input type="radio" name="agama" value="Atheis" class="form-check-input">
                                <span class="custom-control-indicator">Atheis</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div style="padding: 10px;">
                    <div class="row">
                        <div class="col-sm-2 p-0"> <label class="my-1">Status Perkawinan</label></div>
                        <div class="col-sm-9">
                            <label class="form-check  form-check-inline">
                                <input type="radio" name="statuskawin" value="Belum Menikah" class="form-check-input">
                                <span class="custom-control-indicator">Belum Menikah</span>
                            </label>
                            <label class="form-check  form-check-inline">
                                <input type="radio" name="statuskawin" value="Menikah" class="form-check-input">
                                <span class="custom-control-indicator">Menikah</span>
                            </label>
                            <label class="form-check  form-check-inline">
                                <input type="radio" name="statuskawin" value="Cerai Mati" class="form-check-input">
                                <span class="custom-control-indicator">Cerai Mati</span>
                            </label>
                            <label class="form-check  form-check-inline">
                                <input type="radio" name="statuskawin" value="Cerai Hidup" class="form-check-input">
                                <span class="custom-control-indicator">Cerai Hidup</span>
                            </label>


                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3 text-start">
                <label for="">Pas Foto 3x4</label><br>
                <img src="assets/img/avatar.jpeg" width="130px" height="180px" id="output" class="add_files_btn" style="cursor: pointer;max-width: 177px;" alt="">
                <br>
                <label id="info_foto"></label>

            </div>
            <div class="mb-3 text-start">
                <input id="upload_trigger_btn" onchange="loadFile(event)" accept="image/*" type="file" name="foto" class="d-none form-control">
            </div>
            <div class="my-3 text-end">
                <input type="submit" name="save" class="btn btn-primary" value="Simpan Data">
            </div>
        </form>
    </div>
</div>
<br>
<br>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous"></script>
<script>
    $(".add_files_btn").click(function() {
        $("#upload_trigger_btn").click();
    });
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
        uplos()
    };

    function uplos() {
        var fd = new FormData();
        var files = $('#upload_trigger_btn')[0].files[0];
        fd.append('file', files);


    }
</script>