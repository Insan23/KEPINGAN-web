<!-- Tambah Data Sapi -->
<div id="tambahSapi" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/KEPINGAN/?c=dataSapiController&f=addData" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Sapi</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="beratEdit">Berat</label>
                        <input type="text" id="beratEdit" name="berat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggalEdit">Tanggal Lahir</label>
                        <input type="date" id="tanggalEdit" name="tanggalLahir" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Input Penjualan -->
<div class="modal fade" id="inputPenjualan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="http://localhost/KEPINGAN/?c=dataPenjualanController&f=addData"
                  method="post">
                <div class="modal-header"
                     style="background-color: #007A87; color: #fff; border-radius: 3px 3px 0px 0px;">
                    <h4 class="modal-title" id="myModalLabel">Input Penjualan Susu</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal"/>
                    </div>
                    <div class="form-group">
                        <label for="tanggallahir">Jumlah Penjualan</label>
                        <input class="form-control" type="text" placeholder="Masukkan Jumlah Penjualan"
                               name="jumlahTerjual">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> BATAL</button>
                    <button type="submit" class="btn btn-success" style="background-color: #007A87; color: #fff;">
                        TAMBAH
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Penjualan -->
<div class="modal fade" id="editPenjualan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="http://localhost/KEPINGAN/?c=dataSapiController&f=editData" method="post">
                <div class="modal-header"
                     style="background-color: #007A87; color: #fff; border-radius: 3px 3px 0px 0px;">
                    <h4 class="modal-title" id="myModalLabel">Input Data Sapi</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="berat">Berat Sapi</label>
                        <input id="beratEdit" type="text" class="form-control" name="berat"
                               placeholder="Masukkan Berat Sapi"/>
                    </div>
                    <div class="form-group">
                        <label for="tanggallahir">Tanggal Lahir</label>
                        <input id="tanggalLahirEdit" class="form-control" type="date" name="tanggalLahir">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> BATAL</button>
                    <button type="submit" class="btn btn-success" style="background-color: #007A87; color: #fff;">
                        UPDATE
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Input Susu Harian-->
<div class="modal fade" tabindex="-1" role="dialog" id="tambahSusuHarian">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="http://localhost/KEPINGAN/?c=dataHasilSusuController&f=addData" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Susu Harian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input id="tanggal" name="tanggal" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="idSapi">ID Sapi</label>
                        <select name="idSapi" id="idSapi" class="form-control">
                            <option value="" disabled selected>Pilih id Sapi</option>
                            <?php foreach ($dataSapi as $sapi) {
                                echo "<option value=" . $sapi['id'] . ">" . $sapi['id'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input id="jumlah" name="jumlah" type="text" class="form-control">
                        <label for="jumlah">Jumlah (Lt)</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit" name="action">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Susu Harian -->
<div id="editSusuHarian" class="modal">
    <div class="modal-content">
        <h4>Edit Data</h4>
        <div class="row">
            <form action="http://localhost/KEPINGAN/?c=dataHasilSusuController&f=editData" method="post">
                <input type="hidden" name="id" id="id">
                <div class="row">
                    <div class="form-group">
                        <label id="labelTanggal" for="tanggalEdit" class="active">Tanggal</label>
                        <input id="tanggalEdit" name="tanggal" type="text" class="form-control validate">
                    </div>
                    <div class="form-group">
                        <label for="idSapi">ID Sapi</label>
                        <select id="idSapi" name="idSapi" class="form-control">
                            <option value="" disabled selected>Pilih id Sapi</option>
                            <?php foreach ($dataSapi as $sapi) {
                                echo "<option value=" . $sapi['id'] . ">" . $sapi['id'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlahEdit">Jumlah (Lt)</label>
                        <input id="jumlahEdit" name="jumlah" type="text" class="form-control validate">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="action">Simpan</button>
            </form>
        </div>
    </div>
</div>