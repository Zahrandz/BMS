<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Data Contact</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Data Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title float-left" style="margin:20px;">Daftar Contact</h4>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-info float-right" data-toggle="modal" data-target="#tambah"
                                style="margin-bottom:30px;">
                                <i class="fa fa-plus-circle"></i> Tambah Contact
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-responsive table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th style="min-width:200px; width: 50%;">Alamat</th>
                                    <th style="min-width:200px; width: 45%;">Email</th>
                                    <th style="min-width:200px; width: 5%;">Phone</th>
                                    <!-- <th>Lokasi</th> -->
                                    <th style="min-width: 110px;">
                                        <center>Option</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no=1;
                                    foreach($data_contact as $row) {
                                        $id_contact   = $row['id_contact'];
                                        $alamat     = $row['alamat'];
                                        $email      = $row['email'];
                                        $phone     = $row['phone'];
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td><?= $alamat ?></td>
                                    <td><?= $email ?></td>
                                    <td><?= $phone ?></td>
                                    <td align="center">
                                        <button type="button" class="btn btn-s btn-warning" title="Edit" data-toggle="modal" data-target="#edit" onclick="edit(<?= $id_contact ?>)"><i class="fa fa-pencil"></i></button>
                                        <p id="<?= $id_contact ?>" class="d-none"><?php echo $alamat.'|'.$email.'|'.$phone ?></p>
                                        <button type="button" class="btn btn-s btn-danger" title="Hapus" data-toggle="modal" data-target="#hapus" onclick="hapus(<?= $id_contact ?>)"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php $no++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tambah" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form tambah Contact</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" method="post">
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                        </div>  
                        <div class="col-6">
                            <Label for="phone">Phone</Label>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Masukkan Nomor Handphone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12 p-0">
                            <Label for="alamat">Alamat</Label>
                            <textarea type="text" class="form-control" rows="3" id="alamat" name="alamat" placeholder="Masukkan Alamat" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="submit-tambah">
                            <i class="fa fa-check"></i><span> Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="edit" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Edit Contact</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" method="post">
                    <input type="hidden" class="d-none" id="ei" name="id_contact">
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="en" name="email" placeholder="Email..." required>
                        </div>
                        <div class="col-6">
                            <Label for="phone">Phone</Label>
                            <input type="number" class="form-control" id="el" name="phone" placeholder="Phone..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12 p-0">
                            <Label for="alamat">Alamat</Label>
                            <textarea type="text" class="form-control" rows="3" id="ea" name="alamat" placeholder="Alamat..." required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="submit-edit"><i class="fa fa-check"></i><span> Submit</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="hapus" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Contact</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" method="post">
                    <div class="form-group">
                        <p id="dsc">Apakah anda yakin ingin menghapus contact ini?</p>
                        <input type="hidden" class="d-none" class="form-control" id="ds" name="id_contact" value=""
                            required>
                    </div>
                    <div class="modal-footer p-0 pt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger btn-shadow" name="submit-hapus"><i
                                class="fa fa-times"></i><span> Hapus</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function edit(id) {
    var data = (document.getElementById(id).textContent).split("|");
    document.getElementById("ei").value = id;
    document.getElementById("ea").value = data[0];
    document.getElementById("en").value = data[1];
    document.getElementById("el").value = data[2];
    // for (var i = 0; i < document.getElementsByClassName("ev").length; i++) {
    //     if (document.getElementsByClassName("ev")[i].value == data[2]) {
    //         document.getElementsByClassName("ev")[i].selected = "true";
    //     }
    // }
}

function hapus(id) {
    var data = (document.getElementById(id).textContent).split("|");
    document.getElementById("ds").value = id;
    document.getElementById("dsc").textContent = 'Apakah anda yakin ingin menghapus contact "' + data[0] + '"?';
}
</script>
