<!DOCTYPE html>
<html>
<head>
<title>Data Mahasiswa</title>
</head>
<body><CENTER>
<table width="400" border="1" bgcolor="silver">
<tr>
<td colspan="2">INPUT DATA MAHASISWA </td>
</tr>
<form method="post" action="prosesinput.php">
<tr>
<td width="175">Kode Barang</td>
<td><input name="kode" type="text" id="kode" size="10" /></td>
</tr>
<tr>
<td>Nama Barang</td>
<td><input name="barang" type="text" id="barang" size="25"
/></td>
</tr>
<tr>
<td>Satuan</td>
<td width="300"><select name="satuan" id="satuan">
<option value="-">-</option>
<option value="L">Kilo Gram</option>
<option value="P">Liter</option>
</select></td>
</tr>
<tr>
<td>Kategori</td>
<td><input name="kategori" type="text" id="kategori" size="25" /></td>
</tr>
<tr>
<td>Harga Modal</td>
<td><input name="modal" type="text" id="modal" size="25" /></td>
</tr>
<tr>
<td>Harga Jual</td>
<td><input name="jual" type="text" id="jual" size="25" /></td>
</tr>
<tr><CENTER>
<td colspan="2">
<input name="BtnSave" type="submit" id="BtnSave" value="Save" />
<input name="BtnBatal" type="reset" id="BtnBatal" value="Cancel" />
</td></CENTER>
</tr>
</table></CENTER>
</form></body>
</html>