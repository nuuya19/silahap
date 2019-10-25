<?php
    //$page = "";
    include 'koneksi.php';
    //include 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<style type="text/css">
            .tahoma {
                font-family: Tahoma;
            }

            .mgkop {
                margin-left: 0.5cm;
                margin-right: 0.5cm;
            }
            
            .mgform {
                margin-left: 1.79cm;
                margin-right: 1.79cm;
                margin-bottom: 1.54cm;
            }

            .t-coll {
                border-collapse: collapse;
            }

            .b-top {
                border-top: 1px solid black;
            }

            .b-right {
                border-right: 1px solid black;
            }
            
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                nav {
                    display: none;
                }
                table {

                }
                tr, td {

                }
                .tahoma {
                    font-family: Tahoma;
                }

                .mgkop {
                    margin-left: 0.5cm;
                    margin-right: 0.5cm;
                }
                
                .mgform {
                    margin-left: 1.79cm;
                    margin-right: 1.79cm;
                    margin-bottom: 1.54cm;
                }

                .t-coll {
                    border-collapse: collapse;
                }

                .b-top {
                    border-top: 1px solid black;
                }

                .b-right {
                    border-right: 1px solid black;
                }
            }
        </style>

        <body onload="window.print()">
        <div>
            <!-- KOP SURAT START -->
            <table align="center">
                <tbody>
                    <tr>
                        <td style="text-align: center;" width="15%" rowspan="6">
                            <img src="img/logo/logo-bw-jateng.png" width="100">
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="font-size: 14pt">
                            <font face="Arial">
                                PEMERINTAH PROVINSI JAWA TENGAH
                            </font>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="font-size: 20pt">
                            <font face="Arial">
                                <strong>DINAS KELAUTAN DAN PERIKANAN</strong>
                            </font>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="font-size: 10pt">
                            <font face="Arial">
                                Jalan Imam Bonjol Nomor 134 Semarang Kode Pos 50132 Telepon 024-3546469, 3546607
                            </font>
                        </td>
                    </tr>   

                    <tr>
                        <td align="center" style="font-size: 10pt">
                            <font face="Arial">
                                Faksimile 024-3551289 Laman http://www.jatengprov.go.id
                            </font>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="font-size: 10pt">
                            <font face="Arial">
                                Surat Elektronik dkp@jatengprov.go.id
                            </font>
                        </td>   
                    </tr>
                </tbody>
            </table>
            <br>

            <img src="img/garis-pemisah-header.png" style="width: 100%; height: 7px;">
            <br>
            <br>
            <!-- KOP SURAT END -->
        </div>
        
        <div class="mgform tahoma">
            <div align="center" style="font-size:14pt">
                <strong><u>NOTA DINAS</u></strong>
            </div>
            <br>

            <!-- FORM TUJUAN START -->
            <table>
                <tbody>
                    <tr>
                        <td class="tahoma" width="90px">Kepada Yth.</td>
                        <td class="tahoma" width="1px">:</td>
                        <td class="tahoma">Kepala Dinas Kelautan dan Perikanan Provinsi Jawa Tengah</td>
                    </tr>

                    <tr>
                        <td class="tahoma" width="90px">Dari</td>
                        <td class="tahoma" width="1px">:</td>
                        <td class="tahoma">Yang Melaksanakan Tugas</td>
                    </tr>

                    <tr>
                        <td class="tahoma" width="90px">Tembusan</td>
                        <td class="tahoma" width="1px">:</td>
                        <td class="tahoma">Kasubag. Umum dan Kepegawaian</td>
                    </tr>

                    <tr>
    
    <?php
    $id_lhp = mysqli_real_escape_string($conn, $_GET['id_lhp']);
    $query = "SELECT*FROM lhp WHERE id_lhp=$id_lhp";
    $sql = mysqli_query($conn, $query);

    while ($data = mysqli_fetch_array($sql)) {
        echo '
                        <td class="tahoma" width="90px">Tanggal</td>
                        <td class="tahoma" width="1px">:</td>
                        <td class="tahoma">'.indoDate($data["tgl_lhp"]).'</td>
                    </tr>

                    <tr>
                        <td class="tahoma" width="90px">Nomor</td>
                        <td class="tahoma" width="1px">:</td>
                        <td class="tahoma">'.$data["no_lhp"].'</td>
                    </tr>

                    <tr>
                        <td class="tahoma" width="90px">Hal</td>
                        <td class="tahoma" width="1px">:</td>
                        <td class="tahoma">'.$data["hal_lhp"].'</td>
                    </tr>
                </tbody>
            </table>

            <table class="t-coll tahoma">
                <tbody>
                    <tr class="b-top">
                        <td valign="top" width="97px"></td>
                        <td valign="top" width="5px" class="b-right"></td>
                        <td style="padding: 15px">'.$data["isi_lhp"].'</td> 
        ';
    }
    ?>
                    </tr>
                </tbody>
            </table>
            <!-- FORM TUJUAN END -->
        </div>
    </body>
    
</html>
