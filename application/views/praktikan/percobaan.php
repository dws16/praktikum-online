<div class="row mx-5">
  <div class="kotak">
    <div class="container">
      <h4 class="mt-3"><b><?= $modul['name'] ?></b></h4>
      <h6>Kode Percobaan: <?= $modul['modul']; ?></h6>
      <a href="<?= base_url('assets/file/') . $modul['pdf'] ?>" download class=" mb-3 badge badge-pill badge-info"><i class="fas fa-fw fa-download"></i>
        Modul
      </a>
      <h6><b>I. Tujuan Percobaan</b></h6>
      <p><?= $modul['tujuan']; ?></p>
      <h6><b>II. Peralatan Yang Digunakan</b></h6>
      <?= $modul['peralatan']; ?>
      <h6><b>III. Teori</b></h6>
      <?= $modul['teori']; ?>
      <h6><b>IV. Cara Melakukan Percobaan:</b></h6>
      <?= $modul['cara']; ?>
      <h6><b>V. Tugas Untuk Laporan Resmi:</b></h6>
      <?= $modul['tugas_lapres']; ?>
      <h6><b>VI. Tugas Pendahuluan:</b></h6>
      <?= $modul['tugas_pendahuluan']; ?>
    </div>
  </div>
</div>
<div class="row mx-3">
  <div class="col-lg-6">
    <div class="kotak" style="background-color:black">
      <div class="container text-center" style="transform:rotate(270deg);">
        <iframe style="border-top-left-radius: 25px;
	border-top-right-radius: 25px;
	border-bottom-left-radius: 25px;
	border-bottom-right-radius: 25px;" width="450" height="450" src="https://www.youtube.com/embed/SG2YQnHWetE?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="kotak" background-color:black">
      <div class="container py-3">
        <div class="row">
          <div class="col-lg-6">
            <div class="kotak" style="background-color: #bcaead;">
              <div class="container mt-2" style="color: black;">
                <h6 class="mb-3"><b>Input</b></h6>
                <input type="text" name="aksi" value="data" hidden>
                <input type="text" id="id" data-id="<?= $modul['modul']; ?>" name="id" value="<?= $modul['modul']; ?>" hidden>
              </div>
              <div class="row justify-content-center">
                <?php if ($tombol_arah[0]['tombol_status'] == 1) { ?>
                  <button style="font-size: 300%;margin-bottom:3%;margin-top:10%" type="submit" data-tampil="#data1a" data-kirim=" <?= $tombol_arah[0]['tombol_kirim'] ?>" data-id="<?= $modul['modul'] ?>;" class="param1 btn btn-dark fa fa-arrow-circle-up kirim1a">
                  </button>
                <?php } else { ?> <button style="color:#bcaead;background-color:#bcaead;font-size: 300%;margin-bottom:3%;margin-top:10%" data-id="<?= $modul['modul'] ?>;" class="btn fa fa-arrow-circle-up" disabled>
                  </button>
                <?php } ?>
              </div>
              <div class="row justify-content-center">
                <?php if ($tombol_arah[2]['tombol_status'] == 1) { ?>
                  <button style="font-size: 300%" type="submit" data-tampil="#data1a" data-kirim="<?= $tombol_arah[1]['tombol_kirim'] ?>]" data-id="<?= $modul['modul'] ?>;" class="param1 btn btn-dark fa fa-arrow-circle-left kirim1a">
                  </button>
                <?php } else { ?> <button style="color:#bcaead;background-color:#bcaead;font-size: 300%" data-id="<?= $modul['modul'] ?>;" class="btn fa fa-arrow-circle-left" disabled>
                  </button>
                <?php } ?>
                <button style="font-size:200%;margin-right:3%;margin-left:3%;background-color:black;color:white" type="submit" data-id="<?= $modul['modul'] ?>;" class="btn fas fa-circle kirim1a" disabled>
                </button>
                <?php if ($tombol_arah[3]['tombol_status'] == 1) { ?>
                  <button style="font-size: 300%" type="submit" data-tampil="#data1a" data-kirim="[c,87]" data-id="<?= $modul['modul'] ?>;" class="param1 btn btn-dark fa fa-arrow-circle-right kirim1a">
                  </button>
                <?php } else { ?><button style="color:#bcaead;background-color:#bcaead;font-size: 300%" data-id="<?= $modul['modul'] ?>;" class="btn fa fa-arrow-circle-right" disabled>
                  </button>
                <?php } ?>
              </div>
              <div class="row justify-content-center">
                <?php if ($tombol_arah[1]['tombol_status'] == 1) { ?>
                  <button style="font-size: 300%;margin-top:3%;margin-bottom:20%" type="submit" data-tampil="#data1a" data-kirim="[v,87]" data-id="<?= $modul['modul'] ?>;" class="param1 btn btn-dark fa fa-arrow-circle-down kirim1a">
                  </button>
                <?php } else { ?> <button style="color:#bcaead;background-color:#bcaead;font-size: 300%;margin-bottom:3%;margin-top:10%" data-id="<?= $modul['modul'] ?>;" class="btn fa fa-arrow-circle-up" disabled>
                  </button>
                <?php } ?>
              </div>
              <?php
              foreach ($tombol_tulisan as $t) :  ?>
                <div class="row justify-content-center mb-1">
                  <button type="submit" style="margin: 1%;" data-kirim="<?= $t['tombol_kirim']; ?>" data-tampil="#data4" data-id="<?= $modul['modul'] ?>;" class="param1 btn btn-dark px-4 kirim1a">
                    <?= $t['tombol_keterangan'] ?>
                  </button>
                </div>
              <?php
              endforeach;
              ?>
              <div class="row justify-content-center mb-3" style="padding-bottom:10%;">
              </div>
              <!-- <button type="submit" id="param2" data-kirim="[d]" data-tampil="#data4" data-id="<?= $modul['modul'] ?>;" class="btn btn-secondary px-4 kirim1a">
                  1
                </button>
                <div class="p-1">
                </div>
                <button type="submit" data-kirim="[i]" data-tampil="#data4" data-id="<?= $modul['modul'] ?>;" id="param3" class="btn btn-secondary px-4 kirim1a">
                  2
                </button>
                <div class="p-1">
                </div>
                <button type="submit" data-kirim="[i]" data-tampil="#data4" data-id="<?= $modul['modul'] ?>;" id="param4" class="btn btn-secondary px-4 kirim1a">
                  3
                </button>
              </div>
              <input type="text" name="aksi" value="jatuhkan" hidden>
              <div class="row justify-content-center mb-3">
                <button type="submit" data-kirim="[t]" data-tampil="#data3" data-id="<?= $modul['modul'] ?>;" id="param5" class="btn btn-secondary pl-1 px-4 kirim1a">
                  4
                </button>
                <div class="p-1">
                </div>
                <button type="submit" data-kirim="[r]" data-tampil="#data4" data-id="<?= $modul['modul'] ?>;" id="param6" class="btn btn-secondary px-4 kirim1a">
                  5
                </button>
                <div class="p-1">
                </div>
                <button type="submit" data-kirim="[r]" data-tampil="#data4" data-id="<?= $modul['modul'] ?>;" id="param7" class="btn btn-secondary px-4 kirim1a">
                  6
                </button>
              </div>
              <div class="row justify-content-center mb-3">
                <button type="submit" style="margin-bottom:20%" data-kirim="[s]" data-id="<?= $modul['modul'] ?>;" id="param8" class="btn btn-secondary pl-1 px-4 kirim1a">
                  7
                </button>
                <div class="p-1">
                </div>
                <button type="submit" style="margin-bottom:20%" data-kirim="" data-id="<?= $modul['modul'] ?>;" id="param9" class="btn btn-secondary pl-1 px-4 kirim1a">
                  8
                </button>
                <div class="p-1">
                </div>
                <button type="submit" style="margin-bottom:20%" data-kirim="" data-id="<?= $modul['modul'] ?>;" id="param10" class="btn btn-secondary pl-1 px-4 kirim1a">
                  9
                </button> -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="kotak" style="background-color: #bcaead;">
              <div class="container mt-2" style="color: black;">
                <h6 class="mb-3"><b>Output</b></h6>
                <div class="form-group">
                  <label for="data1">Jumlah Bola</label>
                  <output type="text" id="data4" name="data4" class="form-control form-control-user mb-4"></output>
                  <label for="data1">Ketinggian sekarang</label>
                  <output type="text" id="data1a" name="data1a" class="form-control form-control-user mb-4"></output>
                  <label for="data1">Hasil waktu</label>
                  <output type="text" id="data3" name="data3" class="form-control form-control-user"></output>
                </div>
                <div class="row justify-content-center mb-3">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-auto ml-auto">
            <h6><b>Sisa Waktu </h6> <span id="hours"></span>
            <span id="mins"></span>
            <span id="secs"></span>
            </b>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-auto mr-auto">
            <a href="<?= base_url('praktikan/modul/') . $modul['modul'] ?>" class="btn btn-secondary px-5">Kembali</a>
          </div>
          <div class="col-lg-auto ml-auto">
            <a href="#" class="btn gradien px-5" data-toggle="modal" data-target="#SelesaiModal">Selesai</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Keterangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Keterangan Button</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button type="submit" id="param2" data-kirim="[d]" data-tampil="#data4" data-id="<?= $modul['modul'] ?>;" class="btn btn-secondary px-4 kirim1a" disabled>
          1
        </button>
        <a class="">Drop Bola</a>
        <div class="p-1">
        </div>
        <button type="submit" data-kirim="[i]" data-tampil="#data4" data-id="<?= $modul['modul'] ?>;" id="param4" class="btn btn-secondary px-4 kirim1a" disabled>
          2
        </button>
        <a class="">Status Bola</a>
        <div class="p-1">
        </div>
        <button type="submit" data-kirim="[t]" data-tampil="#data3" data-id="<?= $modul['modul'] ?>;" id="param3" class="btn btn-secondary pl-1 px-4 kirim1a" disabled>
          3
        </button>
        <a class="">Cek Waktu</a>
        <div class="p-1">
        </div>
        <button type="submit" data-kirim="[r]" data-tampil="#data4" data-id="<?= $modul['modul'] ?>;" id="param4" class="btn btn-secondary px-4 kirim1a" disabled>
          4
        </button>
        <a class="">Reload Bola</a>
        <div class="p-1">
        </div>
        <button type="submit" data-kirim="" data-tampil="#data3" data-id="<?= $modul['modul'] ?>;" id="param3" class="btn btn-secondary pl-1 px-4 kirim1a" disabled>
          5
        </button>
        <a class="">Reset Alat</a>
        <div class="p-1">
        </div>
        <button type="submit" data-kirim="" data-tampil="#data4" data-id="<?= $modul['modul'] ?>;" id="param4" class="btn btn-secondary px-4 kirim1a" disabled>
          6
        </button>
        <a class=""></a>
        <div class="p-1">
        </div>
        <button type="submit" data-kirim="[r]" data-tampil="#data4" data-id="<?= $modul['modul'] ?>;" id="param4" class="btn btn-secondary px-4 kirim1a" disabled>
          7
        </button>
        <a class=""></a>
        <div class="p-1">
        </div>
        <button type="submit" data-kirim="" data-tampil="#data3" data-id="<?= $modul['modul'] ?>;" id="param3" class="btn btn-secondary pl-1 px-4 kirim1a" disabled>
          8
        </button>
        <a class=""></a>
        <div class="p-1">
        </div>
        <button type="submit" data-kirim="" data-tampil="#data4" data-id="<?= $modul['modul'] ?>;" id="param4" class="btn btn-secondary px-4 kirim1a" disabled>
          9
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="SelesaiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Pilih "Selesai" jika ingin mengakhiri praktikum ini.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('praktikan/selesai/') . $modul['modul'] ?>">Selesai</a>
      </div>
    </div>
  </div>
</div>

<script>
  // The data/time we want to countdown to
  var countDownDate = new Date("<?= $jadwal['jadwal']; ?>").getTime();
  var waktu = "<?= $modul['time']; ?>";
  var batas = waktu.split(":");
  var jam = parseInt(batas[0]) * 60 * 60 * 1000;
  var menit = parseInt(batas[1]) * 60 * 1000;
  var detik = parseInt(batas[2]) * 1000;
  var sisa = jam + menit + detik;
  // Run myfunc every second
  var myfunc = setInterval(function() {

    var now = new Date().getTime();
    var timeleft = countDownDate + jam + menit + detik - now;

    // Calculating the days, hours, minutes and seconds left
    var hours = Math.floor((timeleft / (1000 * 60 * 60)));
    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

    // Result is output to the specific element
    document.getElementById("hours").innerHTML = hours + " :"
    document.getElementById("mins").innerHTML = minutes + " :"
    document.getElementById("secs").innerHTML = seconds

    if (timeleft < 0) {
      clearInterval(myfunc);
      document.getElementById("hours").innerHTML = ""
      document.getElementById("mins").innerHTML = ""
      document.getElementById("secs").innerHTML = ""
      window.location.href = "<?= base_url('praktikan/modul/') ?>";
    }
  }, 1000);
</script>