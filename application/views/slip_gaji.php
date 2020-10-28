<style type="text/css">
    .logo{
        display: flex;
        align-items: center;
    }

    .wrapper {
        /* background-color: blueviolet; */
        width: 80vw;
        margin: 0 auto;
        height: 100px;
      }

      p.solid {border-style: solid;}

</style>

<title><?php echo $karyawan->nama;?></title>
<div class="wrapper" style="margin-top: 30px">
<div class="logo" style="border: none">
        <img
          src="assets/logo.png"
          
        />
        
      </div>
</div>
<h5 align="center">SLIP UPAH INSAN</h5>
<h5 align="center">Bulan: %bulan%</h5>
<br>
<hr />
<table border="0" style="height: 35px; color: black; width: 581px;">
<tbody>
<tr>
<td style="width: 100px;">emp_id</td>
<td style="width: 100px;">: <?php echo $karyawan->emp_id;?></td>
<td style="width: 233px;">&nbsp;Jabatan</td>
<td style="width: 60px;">&nbsp;: <?php echo $karyawan->jabatan;?></td>
</tr>
<tr>
<td style="width: 256px;">Nama</td>
<td style="width: 256px;">: <?php echo $karyawan->nama;?></td>
<td style="width: 137px;">&nbsp;Unit Kerja</td>
<td style="width: 120px;">&nbsp;: <?php echo substr($karyawan->unit_kerja,0,6);?></td>
</tr>
<tr>
<td style="width: 256px;">Alamat Email</td>
<td style="width: 100px;">: <?php echo $karyawan->email;?></td>
<td style="width: 137px;">&nbsp;</td>
<td style="width: 60px;">&nbsp;</td>
</tr>
</tbody>
</table>
<hr />
<table border="0" style="height: 107px; width: 582px;">
<tbody>
<tr>
<td style="width: 17px;">A.</td>
<td style="width: 233px;">Gaji Tetap</td>
<td style="width: 100px;">&nbsp;</td>
<b><td style="width: 100px;">Potongan Karyawan</td></b>
<td style="width: 51px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">1. Gaji Pokok Bulanan</td>
<td style="width: 256px;">: 2T</td>
<td style="width: 147px;">1. Potongan PPh21</td>
<td style="width: 51px; color: red;">&nbsp;: Rp -</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">2. Tunjangan Tetap</td>
<td style="width: 100px;">: 500M</td>
<td style="width: 233px;">2. BPJS Ketenagakerjaan</td>
<td style="width: 51px;color: red">&nbsp;: Rp -</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">&nbsp; &nbsp; Gaji Tetap</td>
<td style="width: 100px;">: 2.3T</td>
<td style="width: 147px;">3. BPJS Kesehatan</td>
<td style="width: 51px;color: red">&nbsp;: Rp -</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">&nbsp; &nbsp; Gaji Kebijakan</td>
<td style="width: 100px;">: 300M</td>
<td style="width: 147px;">4. Koperasi</td>
<td style="width: 51px;color: red">&nbsp;: Rp -</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">&nbsp;</td>
<td style="width: 100px;">&nbsp;</td>
<td style="width: 147px;">&nbsp; &nbsp; - Simpanan Wajib</td>
<td style="width: 51px;color: red">&nbsp;: Rp -</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">&nbsp;</td>
<td style="width: 100px;">&nbsp;</td>
<td style="width: 147px;">&nbsp; &nbsp; - Pinjaman</td>
<td style="width: 51px;color: red">&nbsp;: Rp -</td>
</tr>
<tr>
<td style="width: 17px;">B.</td>
<td style="width: 233px;">Gaji Tidak Tetap</td>
<td style="width: 100px;">&nbsp;</td>
<td style="width: 147px;">&nbsp;5. Kasbon</td>
<td style="width: 51px;color: red">&nbsp;: Rp -</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">1. Premi Kehadiran</td>
<td style="width: 100px;">&nbsp;</td>
<td style="width: 147px;">&nbsp;6. Lain-lain</td>
<td style="width: 51px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">2. Subsidi PPH 21</td>
<td style="width: 100px;">&nbsp;</td>
<td style="width: 147px;">&nbsp; &nbsp; &nbsp;- Telpon</td>
<td style="width: 51px;color: red">&nbsp;: Rp -</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">3. Tunj. Cuti</td>
<td style="width: 100px;">&nbsp;</td>
<td style="width: 147px;">&nbsp; &nbsp; &nbsp;- Paspor</td>
<td style="width: 51px;color: red">&nbsp;: Rp -</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">4. Intensif</td>
<td style="width: 100px;">&nbsp;</td>
<td style="width: 147px;">&nbsp; &nbsp; &nbsp;Total Potongan</td>
<td style="width: 51px;color: red">&nbsp;: Rp -</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">5.&nbsp;Proporsional</td>
<td style="width: 100px;">&nbsp;</td>
<td style="width: 147px;">&nbsp;</td>
<td style="width: 51px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">6.&nbsp;Lain-lain</td>
<td style="width: 100px;">&nbsp;</td>
<td style="width: 147px;">&nbsp;</td>
<td style="width: 51px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 233px;">&nbsp; &nbsp;&nbsp;Gaji Tidak Tetap</td>
<td style="width: 100px;">&nbsp;</td>
<td style="width: 147px;">&nbsp;</td>
<td style="width: 51px;">&nbsp;</td>
</tr>
</tbody>
</table>
<table border="0" style="height: 20px; width: 575px;">
<tbody>
<tr>
<td style="width: 17px;">&nbsp;</td>
<td style="width: 232px;">Jumlah Gaji Bruto</td>
<td style="width: 256px;">: Rp 10T</td>
<td style="width: 235px;">Take Home Pay (THP)</td>
<td style="width: 80px; border-style: solid;">: Rp 10T</td>
</tr>
</tbody>
</table>
<table class="solid" style="border-style: solid; height: 64px; width: 575px;">
<tbody>
<tr>

<td style="width: 256px;">BEBAN PERUSAHAAN</td>
<td style="width: 73px;">&nbsp;</td>
<td style="width: 152px;">NOMOR KARYAWAN</td>
<td style="width: 150px;">:</td>
</tr>
<tr>
<td style="width: 199px;">BPJS Kesehatan</td>
<td style="width: 256px;">: Rp -</td>
<td style="width: 233px;">BPJS Kesehatan</td>
<td style="width: 120px;">: 037592845027</td>
</tr>
<tr>
<td style="width: 199px;">BPJS Ketenagakerjaan</td>
<td style="width: 73px;">: Rp -</td>
<td style="width: 152px;">BPJS Ketenagakerjaan</td>
<td style="width: 120px;">: 873407503749</td>
</tr>
<tr>
<td style="width: 199px;">&nbsp;</td>
<td style="width: 73px;">&nbsp;</td>
<td style="width: 152px;">NPWP</td>
<td style="width: 150px;">:</td>

</tr>
</tbody>
</table>
