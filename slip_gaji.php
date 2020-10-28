<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "PT Sans", sans-serif;
            font-size: 14px;
            min-height: 100vh;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        h4 {
            margin-left: 50px;
            font-size: 18px;
        }

        img {
            width: 100px;
        }

        .wrapper {
            /* background-color: blueviolet; */
            width: 80vw;
            margin: 0 auto;
            height: 100px;
        }

        .big {
            display: grid;
            grid-template-columns: 50% 50%;
            border-top: 4px solid black;
        }

        .small {
            display: grid;
            grid-template-columns: 50% 50%;
            height: 20px;
        }

        footer {
            display: grid;
            grid-template-columns: 50% 50%;
            border-top: 4px solid black;
            border-bottom: 4px solid black;
        }
    </style>
    <title>Slip gaji</title>
</head>

<body>
    <div class="wrapper" style="margin-top: 30px">
        <div class="logo" style="border: none">
            <img src="https://i.ibb.co/bvS44Wt/Screen-Shot-2020-10-24-at-10-09-42.png" alt="" />
            <div>
                <h4 style=" color: #bbb">SLIP UPAH INSAN</h4>
                <h4>Bulan: %bulan%</h4>
            </div>
        </div>
    </div>
    <div class="wrapper" style="min-height: 100px">
        <div class="big">
            <div class="medium">
                <div class="small" style="background-color: #eee; margin-top: 20px; padding-left: 10px">
                    <p>emp_id</p>
                    <p>: emp_id</p>
                </div>
                <div class="small" style="padding-left: 10px">
                    <p>Nama</p>
                    <p>: emp_id</p>
                </div>
                <div class="small" style="
              background-color: #eee;
              margin-bottom: 20px;
              padding-left: 10px;
            ">
                    <p>Alamat Email</p>
                    <p>: emp_id</p>
                </div>
            </div>
            <div class="medium">
                <div class="small" style="background-color: #eee; margin-top: 20px">
                    <p>Jabatan</p>
                    <p>: emp_id</p>
                </div>
                <div class="small">
                    <p>Unit Kerja</p>
                    <p>: emp_id</p>
                </div>
                <div class="small" style="background-color: #eee"></div>
            </div>
        </div>
    </div>

    <div class="wrapper" style="min-height: 370px">
        <div class="big">
            <div class="medium">
                <div class="small" style="background-color: #eee; margin-top: 20px; padding-left: 10px">
                    <p style="font-weight: 700">A. Gaji Tetap</p>
                </div>
                <div class="small" style="padding-left: 10px">
                    <p style="padding-left: 15px">1. Gaji Pokok Bulanan</p>
                    <p>: 2T</p>
                </div>
                <div class="small" style="background-color: #eee; padding-left: 10px">
                    <p style="padding-left: 15px">2. Tunjangan Tetap</p>
                    <p>: 500M</p>
                </div>
                <div class="small" style="padding-left: 10px">
                    <p style="padding-left: 30px; font-weight: 700">Gaji Tetap</p>
                    <p style="font-weight: 700">: 2.3T</p>
                </div>
                <div class="small" style="
              background-color: #eee;
              margin-bottom: 20px;
              padding-left: 10px;
            ">
                    <p style="padding-left: 30px; font-weight: 700">Gaji Kebijakan</p>
                    <p style="font-weight: 700">: 300M</p>
                </div>
                <div class="small" style="background-color: #eee; padding-left: 10px">
                    <p style="font-weight: 700">B. Gaji Tidak Tetap</p>
                </div>
                <div class="small" style="padding-left: 10px">
                    <p style="padding-left: 15px">1. Premi Kehadiran</p>
                    <p>: Rp -</p>
                </div>
                <div class="small" style="background-color: #eee; padding-left: 10px">
                    <p style="padding-left: 15px">2. Subsidi PPh 21</p>
                    <p>: Rp -</p>
                </div>
                <div class="small" style="padding-left: 10px">
                    <p style="padding-left: 15px">3. Tunj. Cuti</p>
                    <p>: Rp -</p>
                </div>
                <div class="small" style="background-color: #eee; padding-left: 10px">
                    <p style="padding-left: 15px">4. Intensif</p>
                    <p>: Rp -</p>
                </div>
                <div class="small" style="padding-left: 10px">
                    <p style="padding-left: 15px">5. Proporsional</p>
                    <p>: Rp -</p>
                </div>
                <div class="small" style="background-color: #eee; padding-left: 10px">
                    <p style="padding-left: 15px">6. Lain-lain</p>
                    <p>: Rp -</p>
                </div>
                <div class="small" style="padding-left: 10px">
                    <p style="padding-left: 30px; font-weight: 700">Gaji Tidak Tetap</p>
                    <p style="font-weight: 700">: Rp -</p>
                </div>
                <div class="small" style="background-color: #eee"></div>
                <div class="small"></div>
                <div class="small" style="background-color: #eee">
                    <p style="padding-left: 50px; font-weight: 700">
                        Jumlah Gaji Bruto
                    </p>
                    <p>: Rp 10T</p>
                </div>
            </div>
            <div class="medium">
                <div class="small" style="background-color: #eee; margin-top: 20px">
                    <p style="font-weight: 700">Potongan Karyawan</p>
                </div>
                <div class="small">
                    <p style="padding-left: 15px">1. Potongan PPh21</p>
                    <p style="color: red">: Rp -</p>
                </div>
                <div class="small" style="background-color: #eee">
                    <p style="padding-left: 15px">2. BPJS Ketenagakerjaan</p>
                    <p style="color: red">: Rp -</p>
                </div>
                <div class="small">
                    <p style="padding-left: 15px">3. BPJS Kesehatan</p>
                    <p style="color: red">: Rp -</p>
                </div>
                <div class="small" style="background-color: #eee">
                    <p style="padding-left: 15px">4. Koperasi</p>
                </div>
                <div class="small">
                    <p style="padding-left: 30px">- Simpanan Wajib</p>
                    <p style="color: red">: Rp -</p>
                </div>
                <div class="small" style="background-color: #eee">
                    <p style="padding-left: 30px">- Pinjaman</p>
                    <p style="color: red">: Rp -</p>
                </div>
                <div class="small">
                    <p style="padding-left: 15px">5. Kasbon</p>
                    <p style="color: red">: Rp -</p>
                </div>
                <div class="small" style="background-color: #eee">
                    <p style="padding-left: 15px">6. Lain-lain</p>
                </div>
                <div class="small">
                    <p style="padding-left: 30px">- Telpon</p>
                    <p style="color: red">: Rp -</p>
                </div>
                <div class="small" style="background-color: #eee">
                    <p style="padding-left: 30px">- Paspor</p>
                    <p style="color: red">: Rp -</p>
                </div>
                <div class="small">
                    <p style="padding-left: 50px; font-weight: 700">Total Potongan</p>
                    <p style="color: red">: Rp -</p>
                </div>
                <div class="small" style="background-color: #eee"></div>
                <div class="small"></div>
                <div class="small" style="background-color: #eee"></div>
                <div class="small"></div>
                <div class="small" style="background-color: #eee">
                    <p style="padding-left: 30px; font-weight: 700">
                        Take Home Pay (THP)
                    </p>
                    <p style="
                border-bottom: 1px solid black;
                border-top: 1px solid black;
                text-align: center;
              ">
                        : Rp 10T
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper" style="min-height: 100px">
        <div class="big" style="border: 4px solid black">
            <div class="medium">
                <div class="small" style="padding-left: 10px">
                    <p style="text-decoration: underline; font-weight: 700">
                        BEBAN PERUSAHAAN
                    </p>
                </div>
                <div class="small" style="padding-left: 10px">
                    <p>BPJS Kesehatan</p>
                    <p>: Rp -</p>
                </div>
                <div class="small" style="padding-left: 10px">
                    <p>BPJS Ketenagakerjaan</p>
                    <p>: Rp -</p>
                </div>
            </div>
            <div class="medium">
                <div class="small">
                    <p style="text-decoration: underline; font-weight: 700">
                        NOMOR KARYAWAN
                    </p>
                </div>
                <div class="small">
                    <p>BPJS Kesehatan</p>
                    <p>: 037592845027</p>
                </div>
                <div class="small" \>
                    <p>BPJS Ketenagakerjaan</p>
                    <p>: 873407503749</p>
                </div>
                <div class="small">
                    <p>NPWP</p>
                    <p>:</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>