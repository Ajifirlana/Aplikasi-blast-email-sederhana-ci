<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/select2/dist/css/select2.min.css'); ?>">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" rel="stylesheet">
<script src="<?php echo base_url('assets/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<div class="row">
    <div class="col-md-12">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Kirim Email</h3>
            </div>
            <div class="box-body">
                <form action="<?php echo base_url('kirim/dosend'); ?>" method="POST">
                    <div class="form-group">
                        <label>Pilih Karyawan</label>
                        <select class="form-control select2" name="karyawan" style="width: 100%;">
                            <option value="">Silahkan Pilih Karaywan</option>
                            <?php foreach ($dkaryawan as $kar) {
                                print_r("<option value='" . $kar['email'] . "'>" . $kar['nama'] . "</option>");
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Date:</label>
                        <div class="input-group date">
                            <input type="text" class="form-control datepicker" name="date" id="date">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.select2').select2()
        $('.datepicker').datetimepicker({
            format: "MM/YYYY"
        })
    })
</script>