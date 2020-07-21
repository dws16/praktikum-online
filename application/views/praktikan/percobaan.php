<div class="row mx-5">
  <div class="col justify-content-center">
    <div class="kotak">
      <div class="container">
        <?= $modul['content']; ?>
      </div>
    </div>
  </div>
  <div class="col justify-content-center">
    <div class="kotak">
      <div class="container">
        <img class="mb-5" name="main" style="display: block; margin: auto; background-color: #6a6a6a; color: white; border-top-left-radius: 25px;
                border-top-right-radius: 25px;
                border-bottom-left-radius: 25px;
                border-bottom-right-radius: 25px;transform:rotate(270deg);margin-top:130px;" id="main" width="500px" src="http://10.122.10.19:8081">
        <div class="row" style="padding-top: 100px;">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-6">
                <div class="kotak" style="background-color: #bcaead;">
                  <div class="container mt-2" style="color: black;">
                    <h6 class="mb-3"><b>Input</b></h6>
                    <form action="<?= base_url('praktikan/percobaan/') . $modul['modul'] ?>" method="post">
                      <input type="text" name="aksi" value="data" hidden>
                      <input type="text" id="id" name="id" value="<?= $modul['modul']; ?>" hidden>
                      <div class="form-group">
                        <label for="var">Variabel</label>
                        <select class="form-control" name="var" id="var">
                          <option <?php if (($this->input->post('var')) && $this->input->post('var') == "x") echo "selected"; ?> value="x">Naik</option>
                          <option <?php if (($this->input->post('var')) && $this->input->post('var') == "z") echo "selected"; ?> value="z">Turun</option>
                        </select>
                      </div>
                      <!-- <div class="form-group">
                        <label for="val">Nilai (dalam cm)</label>
                        <input type="text" id="val" name="val" value="<?= set_value('val'); ?>" class="form-control form-control-user" id="val" name="val" placeholder="0">
                        <input type="text" id="id" name="id" value="<?= $modul['modul']; ?>" hidden>
                      </div> -->
                      <div class="row justify-content-center mb-3">
                        <button type="submit" class="btn btn-secondary px-4">
                          Kirim
                        </button>
                      </div>
                    </form>
                    <form class="text-center pb-2" action="<?= base_url('praktikan/percobaan/') . $modul['modul'] ?>" method="post">
                      <input type="text" id="id" name="id" value="<?= $modul['modul']; ?>" hidden>
                      <input type="text" name="aksi" value="jatuhkan" hidden>
                      <button type="submit" class="btn btn-secondary px-4">
                        Jatuhkan
                      </button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="kotak" style="background-color: #bcaead;">
                  <div class="container mt-2" style="color: black;">
                    <h6 class="mb-3"><b>Output</b></h6>
                    <div class="form-group">
                      <label for="data1">Data 1</label>
                      <output type="text" id="data1" name="data1" class="form-control form-control-user" id="data1" name="data1"><?php if ($result2 == "[c,320]") {
                                                                                                                                    $result2 = "10s";
                                                                                                                                    echo $result2;
                                                                                                                                  } ?></output>
                    </div>
                    <!-- <div class="form-group">
                      <label for="data2">Data 2</label>
                      <input type="text" id="data2" name="data2" class="form-control form-control-user" id="data2" name="data2">
                    </div>
                    <div class="form-group">
                      <label for="data3">Data 3</label>
                      <input type="text" id="data3" name="data3" class="form-control form-control-user" id="data3" name="data3">
                    </div> -->
                    <div class="row justify-content-center mb-3">
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-auto ml-auto">
            <h6><b>Waktu : 00:30:00</b></h6>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-auto mr-auto">
            <a href="<?= base_url('praktikan/modul/') . $modul['modul'] ?>" class="btn btn-secondary px-5">Kembali</a>
          </div>
          <div class="col-lg-auto ml-auto">
            <a href="<?= base_url('praktikan/modul/') ?>" class="btn btn-secondary px-5">Selesai</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>