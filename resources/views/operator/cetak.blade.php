<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pasien {{$pasien->id_pasien}}</title>
</head>

<body>
	<style type="text/css">
		.tg {
			border-collapse: collapse;
			border-spacing: 0;
		}

		.tg td {
			border-color: black;
			border-style: solid;
			border-width: 1px;
			font-family: Arial, sans-serif;
			font-size: 14px;
			overflow: hidden;
			padding: 10px 5px;
			word-break: normal;
		}

		.tg th {
			border-color: black;
			border-style: solid;
			border-width: 1px;
			font-family: Arial, sans-serif;
			font-size: 14px;
			font-weight: normal;
			overflow: hidden;
			padding: 10px 5px;
			word-break: normal;
		}

		.tg .tg-km2t {
			border-color: #ffffff;
			color: #003049;
			font-weight: bold;
			text-align: left;
			vertical-align: top
		}

		.tg .tg-zv41m {
			border-color: #ffffff;
			color: #003049;
			font-weight: bold;
			text-align: left;
			vertical-align: top
		}

		.tg .tg-zv4m {
			border-color: #ffffff;
			color: #003049;
			text-align: left;
			vertical-align: top
		}

		.tg .tg-8jgo {
			border-color: #ffffff;
			color: #003049;
			text-align: center;
			vertical-align: top
		}

		.tg .tg-78fz {
			background-color: #003049;
			border-color: #003049;
			color: #ffffff;
			text-align: center;
			vertical-align: top
		}

		.tg .tg-292r {
			background-color: #003049;
			border-color: #003049;
			color: #ffffff;
			text-align: left;
			vertical-align: middle
		}

		.tg .tg-xaus {
			background-color: #003049;
			border-color: #ffffff;
			color: #ffffff;
			text-align: center;
			vertical-align: top
		}

		.tg .tg-yj3z {
			background-color: #003049;
			border-color: #003049;
			color: #ffffff;
			text-align: center;
			vertical-align: middle
		}

		.tg .tg-50pj {
			background-color: #003049;
			border-color: #003049;
			text-align: left;
			vertical-align: top
		}
	</style>
	<table class="tg">
		<thead>

		</thead>
		<tbody>
			<tr>
				<td class="tg-xaus" colspan="3">Pasien</td>
			</tr>
			<tr>
				<td class="tg-zv4m" colspan="3">Kode Pasien - {{$pasien->id_pasien}}</td>
			</tr>

			<tr>
				<td class="tg-zv41m">Detail Pasien</td>
				<td class="tg-zv4m"></td>
				<td class="tg-zv4m"></td>
			</tr>
            <tr>
				<td class="tg-zv4m">Nama Pasien</td>
				<td class="tg-zv4m"></td>
				<td class="tg-zv41m">{{ $pasien->nama }}</td>
			</tr>
            <tr>
				<td class="tg-zv4m">Alamat</td>
				<td class="tg-zv4m"></td>
				<td class="tg-zv41m">{{ $pasien->alamat }}</td>
			</tr>
			<tr>
				<td class="tg-zv4m">No Telepon</td>
				<td class="tg-zv4m"></td>
				<td class="tg-zv41m">{{ $pasien->no_telp }}</td>
			</tr>
			<tr>
				<td class="tg-zv4m">RT</td>
				<td class="tg-zv4m"></td>
				<td class="tg-zv41m">{{ $pasien->rt }}</td>
			</tr>
			<tr>
				<td class="tg-zv4m">RW</td>
				<td class="tg-zv4m"></td>
				<td class="tg-zv41m"> {{ $pasien->rw}}</td>
			</tr>
            <tr>
				<td class="tg-zv4m">Tanggal Lahir</td>
				<td class="tg-zv4m"></td>
				<td class="tg-zv41m"> {{ $pasien->tgl_lahir}}</td>
			</tr>
            <tr>
				<td class="tg-zv4m">Jenis Kelamin</td>
				<td class="tg-zv4m"></td>
				<td class="tg-zv41m"> {{ $pasien->jk}}</td>
			</tr>

            <tr>
				<td class="tg-zv4m">Kelurahan</td>
				<td class="tg-zv4m"></td>
				<td class="tg-zv41m"> {{ $pasien->kelurahan->kelurahan}}</td>
			</tr>

		</tbody>
	</table>
</body>

</html>
