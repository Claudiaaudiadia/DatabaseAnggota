<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>

.card-title{
  width: 90%;
}
.tools {
  display: none; /* Tersembunyi secara default */
  text-align: center;
}

/* CSS untuk menampilkan alat (tool) saat dihover */
.hover-column:hover .tools {
  display: inline-block; /* Tampilkan alat saat kolom dihover */
}
.detail-link {
  font-weight: bold;
  color: #322B2A;
}
.detail-link:hover {
  color: #695A5A;
} 
.container-sm {
            height: 580px;
            padding-top: 6px;
            border: 1px solid #000; /* Assuming the 'border' class is a border */
            display: grid;
            grid-template-columns: auto 1fr; /* Label in one column, value in another */
            gap: 4px 20px; /* Row and column gap */
            line-height: 1.5; /* Adjust for proper spacing */
            font-family: Arial, sans-serif;
        }
        .label {
            text-align: left; /* Ensure label is left-aligned */
            position: relative; /* Needed for pseudo-element positioning */
        }
        .label::after {
            content: ":";
            position: absolute;
            right: -10px; /* Adjust as needed for alignment */
            padding-left: 10px; /* Space after the label */
        }
        .value1 {
            text-align: left; /* Ensure value is left-aligned */
        }
</style>
</head>

<body>
  @include ('Dashboard')
<!-- Main content -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Pertumbuhan Anggota</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Kesehatan Kantor</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Cluster Anggota</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Simpanan Pinjaman</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Data Anggota_TP Nyarumkop
                </h3></div>
<!-- isi data -->

    <div class="card">
        <div class="card-header">
            <form class="row row-cols-lg-auto g-1">
                <!-- Form untuk filter dan pencarian -->
               
                    <div class="col">
                    <input class="form-control" type="text" name="q" value="{{ $q }}" placeholder="Cari..." name="data" />
                </div>
                <div class="col">
                    <button class="btn btn-success">Cari</button>
                </div>
            </form>
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-striped table-hover table-sm m-0">
                <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>No CIF</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Tanggal Pembukaan Rekening</center></th>
                        <th><center>Status CIF</center></th>
                        <th><center>Cabang</center></th>
                        </tr>
                </thead>
                <?php
                $i = $tb01->firstItem();
                $nomor = 1 + (($tb01->currentpage() -1) * $tb01->perPage());
                ?>
                @foreach($tb01 as $member)
                <tr class="hover-column">
                <th><center>{{ $nomor++ }}</center></th>
                <td><center><a href="#" class="detail-link" data-no-cif="{{ $member->No_CIF }}">
                <span>{{ $member->No_CIF }}</span>
                <div class="tools">
                <i class="fa fa-sort-desc"></i>
                <i class="fas fa-trash-o"></i>
                </div>
                </a></center></td>
                <td><center>{{ $member->Nama_Anggota }}</center></td>
                <td><center>{{ $member->Tanggal_Pembukaan }}</center></td>
                <td><center>{{ $member->Status_CIF }}</center></td>  
                <td>
                <center>
                {{ $member->Cabang }} 
                </center>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
        @if($tb01->hasPages())
        <div class="card-footer">
           
            {!! $tb01->appends(Request::except('page'))->render() !!}
        </div>
        @endif
   
                 
                </div>
              </div><!-- /.card-body -->
            </div>
            
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  document.querySelectorAll('.hover-column').forEach(item => {
    item.addEventListener('mouseenter', function() {
      console.log('Mouse masuk ke .hover-column');
      this.querySelector('.tools').style.display = 'inline-block';
      // Tambahkan animasi atau efek transisi di sini
    });

    item.addEventListener('mouseleave', function() {
      console.log('Mouse meninggalkan .hover-column');
      this.querySelector('.tools').style.display = 'none';
      // Hapus animasi atau efek transisi di sini jika diperlukan
    });
  });
</script>
<script>
        $(function() {
            hide_total_value_end();
        })

        function hide_total_value_end() {
            if ($('select[name="total_operator"]').val() == 'between')
                $('input[name="total_value_end"]').show();
            else
                $('input[name="total_value_end"]').hide();
        }
        // Cek apakah halaman di-refresh menggunakan F5 atau tombol refresh
        if (performance.navigation.type === performance.navigation.TYPE_RELOAD) {
            // Hapus query parameters
            window.location.href = window.location.origin + window.location.pathname;
        }
</script>
            <!-- /.card -->
<!-- BLUEE SECTION -->
<div class="card bg-gradient-primary" id="detail-section" style="display: none;">
              <div class="card-header border-0" style="height: 80px">
                <h3 class="card-title">
                  <center><span id="detail-Nama"></span></center>
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm download" title="Downlaod">
                  <i class="fa fa-download"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Cetak">
                    <i class="fa fa-print"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div class="row" id="world-map" style="height: 585px; width: 100%;">
                <div class="col-2 py-1" id="sec1a"></div>
                <div class="col-5 py-1" id="sec1"></div>
                <div class="col-5 py-1" id="sec2"></div>
                <div class="col-7 py-1" id="sec3"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
</div>

<!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Sales Graph
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Mail-Orders</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">In-Store</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

  <script>
document.addEventListener('DOMContentLoaded', function() {
    var detailLinks = document.querySelectorAll('.detail-link');
    var detailSection = document.getElementById('detail-section');

    // Fungsi untuk menampilkan elemen detail-section
    function showDetailSection() {
        if (detailSection) {
            detailSection.style.display = 'block';
            detailSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // Event Listener untuk klik pada detail-link
    detailLinks.forEach(function(detailLink) {
        detailLink.addEventListener('click', function(event) {
            event.preventDefault();
            var No_CIF = this.getAttribute('data-no-cif');
            console.log('No_CIF:', No_CIF);

            // Menampilkan elemen detail-section
            showDetailSection();

            // Kirim permintaan AJAX untuk mengambil detail anggota
            $.ajax({
                url: '{{ url("/loadContent") }}/' + No_CIF,
                method: 'GET',
                success: function(response) {
                    console.log('AJAX response:', response);
                    if (response && !response.error) {
                        $('#detail-Nama').html(`
                            ${response.Nama_Anggota}
                            <p>CIF: ${response.No_CIF}</p>`);
                        $('#sec1a').html(`
                        <div class="container-sm border" style="height: 215px; width: 160px; box-sizing: border-box;"
                            @if (!empty($response->photo))
                                <img src="{{ asset('storage/photo/'.$response->photo) }}" alt="">
                            @else
                                <img src="{{ asset('images/no 3.PNG') }}" alt="">
                            @endif

                            <button onclick="location.href='{{ route('create') }}'" type="button" class="btn btn-primary btn-sm download" title="Upload" method="post" enctype="multipart/form-data">
                                <i class="fa-solid fa-upload"></i>
                            </button>

                        </div> 
                        `); 
                        $('#sec1').html(`
                        <div class="container-sm border" style="height: 215px; line-height: 0.7; padding-top: 6px">
                            <p>Nama panggilan: ${response.Panggilan}</p>
                            <p>Status CIF: ${response.Status_CIF}</p>
                            <p>Jenis anggota: ${response.Jenis_Anggota}</p>
                            <p>Jenis nasabah: ${response.Jenis_Nasabah}</p>
                            <p>No ALT: ${response.No_Alt}</p>
                            <p>Umur: ${response.Umur}</p>
                            <p>Jenis kelamin: ${response.Jenis_Kelamin}</p>
                            <p>Jenis pekerjaan: ${response.Jenis_Pekerjaan}</p>
                        </div>
                        `);
                        $('#sec2').html(`
                        <div class="container-sm">
                            <div class="label">No HP</div>
        <div class="value1">${response.No_HP}</div>
        
        <div class="label">No KTP</div>
        <div class="value1">${response.No_KTP}</div>
        
        <div class="label">No NPWP</div>
        <div class="value1">${response.No_NPWP}</div>
        
        <div class="label">Email</div>
        <div class="value1">${response.Email}</div>
        
        <div class="label">Tempat lahir</div>
        <div class="value1">${response.Tempat_Lahir}</div>
        
        <div class="label">Tanggal lahir</div>
        <div class="value1">${response.Tgl_Lahir}</div>
        
        <div class="label">Agama</div>
        <div class="value1">${response.Agama}</div>
        
        <div class="label">Status kawin</div>
        <div class="value1">${response.Status_Kawin}</div>
        
        <div class="label">Pendidikan</div>
        <div class="value1">${response.Pendidikan}</div>
        
        <div class="label">Etnis</div>
        <div class="value1">${response.Etnis}</div>
        
        <div class="label">Nama ibu</div>
        <div class="value1">${response.Nama_Ibu}</div>
        
        <div class="label">Nama ahli waris 1</div>
        <div class="value1">${response.Nama_AW1}</div>
        
        <div class="label">Nama ahli waris 2</div>
        <div class="value1">${response.Nama_AW2}</div>
        
        <div class="label">Nama ahli waris 3</div>
        <div class="value1">${response.Nama_AW3}</div>
        
        <div class="label">Dokumen</div>
        <div class="value1">${response.Upload_Dokumen}</div>
        
        <div class="label">Cabang</div>
        <div class="value1">${response.Cabang}</div>
        
        <div class="label">Tanggal pembukaan</div>
        <div class="value1">${response.Tanggal_Pembukaan}</div>
        
        <div class="label">Tujuan pembukaan</div>
        <div class="value1">${response.Tujuan_Pembukaan}</div>
        
        <div class="label">Kategori pinjaman</div>
        <div class="value1">${response.Kategori_Pinjaman}</div>
                        </div>
                        `);
                        $('#sec3').html(`
                        <div class="container-sm border" style="height: 352px; margin-top: -379px;line-height: 0.7; padding-top: 6px">
                            <p>Alamat: ${response.Alamat}</p>
                            <p>RT KTP: ${response.RT_KTP}</p>
                            <p>RW KTP: ${response.RW_KTP}</p>
                            <p>Kelurahan KTP: ${response.Kelurahan_KTP}</p>
                            <p>Kecamatan KTP: ${response.Kecamatan_KTP}</p>
                            <p>Kota KTP: ${response.Kota_KTP}</p>
                            <p>Provinsi KTP: ${response.Provinsi_KTP}</p>
                            <p>Alamat domisili: ${response.Alamat_D}</p>
                            <p>Kelurahan domisili: ${response.Kelurahan_D}</p>
                            <p>Kecamatan domisili: ${response.Kecamatan_D}</p>
                            <p>Kota domisili: ${response.Kota_D}</p>
                            <p>Provinsi domisili: ${response.Provinsi_D}</p>
                            <p>Kode pos domisili: ${response.Kodepos_D}</p>
                            </div>
                        `);
                    
                    } else {
                        $('#member-info').html('<p>Anggota tidak ditemukan</p>');
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 404) {
                        $('#member-info').html('<p>Anggota tidak ditemukan</p>');
                    } else {
                        $('#member-info').html('<p>Terjadi kesalahan. Silakan coba lagi.</p>');
                    }
                }
            });
        });
    });

    // Event Listener untuk scroll pada window
    window.addEventListener('scroll', function() {
        // Hitung berapa jauh pengguna telah menggulir halaman
        var scrollPosition = window.scrollY;
        var windowHeight = window.innerHeight;
        var documentHeight = document.body.offsetHeight;

        // Jika sudah menggulir lebih dari setengah halaman, tampilkan elemen detail-section
        if (scrollPosition + windowHeight > documentHeight ) {
            showDetailSection();
        }
    });
});


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function() {
            hide_total_value_end();
        })

        function hide_total_value_end() {
            if ($('select[name="total_operator"]').val() == 'between')
                $('input[name="total_value_end"]').show();
            else
                $('input[name="total_value_end"]').hide();
        }
    </script>
    <script>
        document.querySelector('.row-cols-lg-auto form').addEventListener('submit', function(event) {
        event.preventDefault(); // Menghentikan perilaku default formulir

        // Membuat URL berdasarkan input yang dimasukkan
        let queryString = '';
        let startValue = document.querySelector('input[name="start"]').value;
        let qValue = document.querySelector('input[name="q"]').value;

        // Menambahkan parameter 'start' ke URL jika nilainya tidak kosong
        if (startValue.trim() !== '') {
            queryString += 'start=' + encodeURIComponent(startValue) + '&';
        }

        // Menambahkan parameter 'q' ke URL jika nilainya tidak kosong
        if (qValue.trim() !== '') {
            queryString += 'q=' + encodeURIComponent(qValue) + '&';
        }

        // Membuat URL lengkap dengan parameter
        let url = window.location.origin + window.location.pathname;
        if (queryString !== '') {
            url += '?' + queryString.slice(0, -1); // Menghapus '&' di akhir
        }

        // Mengarahkan pengguna ke URL yang baru dibuat
        window.location.href = url;
      });
    </script>
</body>
</html>