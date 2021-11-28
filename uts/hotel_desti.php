<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hotel</title>
</head>
<body>
	<form style="margin-top: 100px;"  method="get" id="myform">
		<center>
			<h1>Pemesanan Hotel</h1>
		<table style="border:1px solid black;padding: 30px;">
			<tr>
				<td>
					<table>
						<tr>
							<td>Nama</td>
							<td> : </td>
							<td><input type="text" name="nama" id="nama" ></td>
						</tr>
						<tr>
							<td>Kode Booking</td>
							<td> : </td>
							<td><select name="kode" id="kode" >
								<option >pilih</option>
								<option value="AL02102" >AL02102</option>
								<option value="BG03025" >BG03025</option>
								<option value="CR02111" >CR02111</option>
								<option value="KM03075" >KM03075</option>
							</select></td>
						</tr>
						<tr>
							<td>Jumlah Orang</td>
							<td> : </td>
							<td><input type="number" name="jumlah" id="jumlah"> Orang</td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td>Lama </td>
							<td> : </td>
							<td><input type="number" name="lama" id="lama" > Hari</td>
						</tr>
						<tr>
							<td>Jenis Pembayaran</td>
							<td> : </td>
							<td><select name="jenis" id="jenis" >
								<option value="kredit" >Kartu Kredit</option>
								<option value="debit" >Debit</option>
								<option value="cash" >Cash</option>
							</select></td>
						</tr>
						
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3" style="float: center;">
					<button type="submit" >Proses</button>
					<input type="reset" value="Hapus">
				</td>
			</tr>
			
		</table>
		</center>

	</form>
	
		<?php
		function HitungTambahan($jumlah){
			if($jumlah > 2){
			   	$hargabed = "75000";
			   	$org = $jumlah - 2;
			   	$harga_spring =$hargabed * $org;
			}else{
			   	$harga_spring = "0";
			}
			return $harga_spring;
		}
		function HitungPotongan($total,$jenis){
			if($jenis == "kredit"){
			   	$potongan = $total * 2 / 100;
			}elseif($jenis == "debit"){
			   	$potongan = $total * 1.5 / 100;
			}else{
			   	$potongan = '0';
			   	}
			return $potongan;
		}

			if ((isset($_GET['nama']) != NULL) && (isset($_GET['kode']) != NULL) && (isset($_GET['jumlah'])!= NULL) && (isset($_GET['lama'])!= NULL) && (isset($_GET['jenis']) != NULL))
			{
				$kd = substr($_GET['kode'],0,2);
				if($kd == "AL"){
					$nama_kamar = "Alamanda";
					$harga_kamar = "450000";
				}elseif ($kd == "BG") {
					$nama_kamar = "Bougenvile";
					$harga_kamar = "350000";
				}elseif ($kd == "CR") {
					$nama_kamar = "Crysan";
					$harga_kamar = "375000";
				}else{
					$nama_kamar = "Kemuning";
					$harga_kamar = "425000";
				}
			   $lantai = substr($_GET['kode'],3,1);
			   $no_kamar = substr($_GET['kode'],4,3);
			   $biaya_tambahan = HitungTambahan($_GET['jumlah']);
			   $total = ($harga_kamar * $_GET['lama']) + $biaya_tambahan;
			   $biaya_potongan = HitungPotongan($total,$_GET['jenis']);
			   if($_GET['jenis'] == "kredit"){
			   		$subtotal = $total + $biaya_potongan;
				}else{
					$subtotal = $total - $biaya_potongan;
				}
			 	$output = "";
			 	$output .='<center>
				<h1>Florensia Hotel</h1>
				<table style="border:1px solid black;padding: 30px;">
					<tr>
						<td>
							<table>
								<tr>
									<td>Nama</td>
									<td>:</td>
									<td>'.$_GET['nama'].'</td>
								</tr>
								<tr>
									<td>Nama Kamar</td>
									<td>:</td>
									<td>'.$nama_kamar.'</td>
								</tr>
								<tr>
									<td>Nomor</td>
									<td>:</td>
									<td>'.$no_kamar.'</td>
								</tr>
								<tr>
									<td>Lama</td>
									<td>:</td>
									<td>'.$_GET['lama'].' hari</td>
								</tr>
								<tr>
									<td>Potongan / Tambahan</td>
									<td>:</td>
									<td>'.number_format($biaya_potongan).'</td>
								</tr>
								<tr>
									<td>Total Biaya seluruhnya</td>
									<td>:</td>
									<td>Rp.'.number_format($subtotal).'</td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr>
									<td>Kode Booking</td>
									<td>:</td>
									<td>'.$_GET['kode'].'</td>
								</tr>
								<tr>
									<td>Lantai</td>
									<td>:</td>
									<td>'.$lantai.'</td>
								</tr>
								<tr>
									<td>Jumlah</td>
									<td>:</td>
									<td>'.$_GET['jumlah'].' Orang</td>
								</tr>
								<tr>
									<td>Jenis Pembayaran</td>
									<td>:</td>
									<td>'.$_GET['jenis'].'</td>
								</tr>
								<tr>
									<td>Biaya Spring Bad Tambahan</td>
									<td>:</td>
									<td>'.$biaya_tambahan.'</td>
								</tr>
								
							</table>
						</td>
					</tr>
				</table>
				</center>';
			 	echo $output;

			   
  
			}else{
				echo "<center><h3>lengkapi data terlebih dahulu</h3></center>";
			}
			
			?>
</body>
</script>
</html>