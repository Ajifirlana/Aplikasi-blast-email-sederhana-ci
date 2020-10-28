<div class="row">
    
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Upload Data</h3>
            </div>

            <?php
          echo $this->session->flashdata('msg');
          ?>

<form class="form-horizontal" action="<?php echo base_url('index/send_mail'); ?>" method="POST" enctype="multipart/form-data">
            <div class="box-body"><div class="box-body">
                        <div class="form-group">

                            <label>Email Anda</label>
                           
      <input type ="email" name ="email" class="form-control" placeholder="email tujuan" required /> 
      <label>Subject</label>

      <input type ="subject" name ="subject" class="form-control" placeholder="Subject" required /> 
 <label>File</label>
      <input type ="file" name ="file" class="form-control" placeholder="Subject" required /> 
      <!--<input type="file" style="height:45px" class="form-control form-control-user" id="" name="uploaded_file">-->

                        </div>
<a href="<?php echo base_url(); ?>index/send_mail" class="btn btn-success">Blash Email</a>
                    </div></div>
                  </form>  
            <form class="form-horizontal" action="<?php echo base_url('index/upload'); ?>" method="POST" enctype="multipart/form-data">
                <div class="box-body">
                    
                    <div class="box-body">
                        <div class="form-group">
                            <label>File excel Database</label>
                            <input type="file" name="excel">
                        </div>

                    </div>
                    <div class="box-footer">
                        <a href="<?php echo base_url('example.xlsx'); ?>" class="btn btn-info">Download Sample</a>
                        <button type="submit" class="btn btn-success">Upload Data</button>

                         <a href="<?php echo base_url(); ?>kirim/test/100101" class="btn btn-success">Test Pdf</a>

                    </div>

                  
                </div>
            </form>
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
                <table id="example" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID Karyawan</th>
                            <th>Unit Kerja</th>
                            <th>Pembebanan</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Golongan Darah</th>
                            <th>Tanggal Awal Kerja</th>
                            <th>Masa Kerja</th>
                            <th>Status Karyawan</th>
                            <th>GPB 20</th>
                            <th>TT 20</th>
                            <th>Upah 20</th>
                            <th>Upah Kebijakan</th>
                            <th>Premi</th>
                            <th>PPh 21</th>
                            <th>Lain Lain</th>
                            <th>Proposional</th>
                            <th>Upah Variable</th>
                            <th>Upah Kotor</th>
                            <th>Upah Bulat</th>
                            <th>Kas Bon</th>
                            <th>BPJS K</th>
                            <th>BPJS TK</th>
                            <th>PPH 21</th>
                            <th>Pinjaman Adhimix</th>
                            <th>Simpanan Wajib Adhimix</th>
                            <th>Potongan Lain Lain</th>
                            <th>Total Potongan</th>
                            <th>THP Upah</th>
                            <th>TP</th>
                            <th>TSK</th>
                            <th>TLK</th>
                            <th>Email</th>
                            <th>Beban Kesehatan Perusahaan (real)</th>
                            <th>Beban Kesehatan Perusahaan</th>
                            <th>NO BPJS K</th>
                            <th>NO BPJS TK</th>
                            <th>NPWP</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>ID Karyawan</th>
                            <th>Unit Kerja</th>
                            <th>Pembebanan</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Golongan Darah</th>
                            <th>Tanggal Awal Kerja</th>
                            <th>Masa Kerja</th>
                            <th>Status Karyawan</th>
                            <th>GPB 20</th>
                            <th>TT 20</th>
                            <th>Upah 20</th>
                            <th>Upah Kebijakan</th>
                            <th>Premi</th>
                            <th>PPh 21</th>
                            <th>Lain Lain</th>
                            <th>Proposional</th>
                            <th>Upah Variable</th>
                            <th>Upah Kotor</th>
                            <th>Upah Bulat</th>
                            <th>Kas Bon</th>
                            <th>BPJS K</th>
                            <th>BPJS TK</th>
                            <th>PPH 21</th>
                            <th>Pinjaman Adhimix</th>
                            <th>Simpanan Wajib Adhimix</th>
                            <th>Potongan Lain Lain</th>
                            <th>Total Potongan</th>
                            <th>THP Upah</th>
                            <th>TP</th>
                            <th>TSK</th>
                            <th>TLK</th>
                            <th>Email</th>
                            <th>Beban Kesehatan Perusahaan (real)</th>
                            <th>Beban Kesehatan Perusahaan</th>
                            <th>NO BPJS K</th>
                            <th>NO BPJS TK</th>
                            <th>NPWP</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "language": {
                    "emptyTable": "Data tidak ada",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Lanjut",
                        "previous": "Kembali"
                    },
                    "processing": "Mohon tunggu data sedang diload"
                },
                "ajax": {
                    "url": "<?php echo base_url('index/data_karyawan/'); ?>",
                    "type": "post"
                }
            });
        });
    })
</script>