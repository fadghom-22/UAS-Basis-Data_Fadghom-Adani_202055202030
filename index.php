
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title >Tugas UAS Basis Data</title>
    <link rel="stylesheet" href="main.css">

  </head>
<body>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="text-center ">
        <h1 class="text-center">TABEL BARANG</h1>
       
      </div>
      <div class="modal-body"><br/>
	<br/>
	
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">HARGA</th>
      <th scope="col">STOCK</th>
	    <th scope="col">OPSI</th>
    </tr>
  </thead>
  <tbody>
  <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from barang");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['stock']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>

  </tbody>
</table>
  <div class="modal-header "><button onclick='change();'  value='show' id='btn1' type="button" class="btn btn-info rounded-pill">TAMBAH BARANG</button></a></div>
<br>


<div id='div1' style="visibility:hidden;">
<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga"></td>
			</tr>
			<tr>
				<td>Stock</td>
				<td><input type="number" name="stock"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</div>

<script>
function change()
{
    var btn_text = $("#btn1").val();
    if(btn_text == "hide")
    {
      document.getElementById("div1").style.visibility = "hidden";
      $("#btn1").val("show");

    }
    else if(btn_text == "show")
    {
      document.getElementById("div1").style.visibility = "visible";
      $("#btn1").val("hide");

    }
}
</script>
      </div>
    </div>
  </div>


<script type="text/JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>