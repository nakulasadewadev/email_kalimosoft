<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
    <body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
        <table style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px #0057D9;">
        <thead>
            <tr>
            <th style="text-align:left;">
                <img style="max-width: 150px;" src="https://info.dossiersolutions.com/hs-fs/hubfs/Dossier-Main-logo%20(3).png?width=850&name=Dossier-Main-logo%20(3).png" alt="Health Dossier">
                <th style="text-align:right;font-weight:400;">@php echo date('d-m-Y') @endphp</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td style="height:35px;"></td>
            </tr>
            <tr>
            <td colspan="2" style="border: solid 1px #ddd; padding:10px 20px;">
                <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Subject</span><b style="color:green;font-weight:normal;margin:0">Tagihan Pembayaran</b></p>
                <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Referance ID</span> #{{$noid}}</p>
            </td>
            </tr>
            <tr>
            <td style="height:35px;"></td>
            </tr>
            <tr>
            <td style="width:50%;padding:20px;vertical-align:top">
                <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px">Nama</span>{{$nama}}</p>
                <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Alamat</span> {{$alamat}}</p>
            </td>
            <td style="width:50%;padding:20px;vertical-align:top">
                <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">No.Tlpn</span> {{$notlpn}} </p>
                <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">No.Pelanggan</span> #{{$nopel}}</p>
            </td>
            </tr>
            <tr>
            <td colspan="2" style="font-size:20px;padding:30px 15px 0 15px;">Tagihan:</td>
            </tr>
            <tr>
            <td colspan="2" style="padding:15px;">
                <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                <span style="display:block;font-size:13px;font-weight:normal;">{{$periode}}</span> Rp {{$tagihan}} <b style="font-size:12px;font-weight:300;"></b>
                </p>
            </td>
            </tr>
        </tbody>
        <tfooter>
            <tr>
                <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
                    <strong style="display:block;margin:0 0 10px 0;">Regards</strong><br><br><br>
                    <b>Phone:</b> 089822087121<br>
                    <b>Email:</b> contact@kalimosoft.co.id
                </td>
            </tr>            
        </tfooter>
        </table>
    </body>
</html>