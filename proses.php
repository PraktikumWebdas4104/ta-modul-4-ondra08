<h1> FORM COBAAN </h1>

	<form action="" method="POST" enctype="multipart/form-data">
		Gambar : <input type="file" name="gambar" width="50px"><br>
		Hobi : <br><input type="checkbox" name="hobi[]" value="Bersepeda">Bersepeda<br>
			 	<input type="checkbox" name="hobi[]" value="Olahraga">Olahraga<br>
			 	<input type="checkbox" name="hobi[]" value="Menggambar">Menggambar<br>
			 	<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
			 	<input type="checkbox" name="hobi[]" value="Ngoding">Ngoding<br><br>	
		Genre film : <br><input type="checkbox" name="film[]" value="Horor">Horor<br>
			 	<input type="checkbox" name="film[]" value="Action">Action<br>
			 	<input type="checkbox" name="film[]" value="Anime">Anime<br>
			 	<input type="checkbox" name="film[]" value="Thriller">Thriller<br>
			 	<input type="checkbox" name="film[]" value="Animasi">Animasi<br><br>
		Tempat Wisata Tujuan Travelling : <br><input type="checkbox" name="wisata[]" value="Bali">Bali<br>
			 	<input type="checkbox" name="wisata[]" value="Raja Ampat">Raja Ampat<br>
			 	<input type="checkbox" name="wisata[]" value="Pulau Derawan">Pulau Derawan<br>
			 	<input type="checkbox" name="wisata[]" value="Bangka Belitung">Bangka Belitung<br>
			 	<input type="checkbox" name="wisata[]" value="Labuan Bajo">Labuan Bajo<br><br>	    	    

			<input type="submit" name="submit" value="Kirim"> </td>


	</form>


<?php
	 if (isset($_POST['submit'])) {
	 	$gambar =$_FILES['gambar']['name'];
		$hobi = $_POST['hobi'];
		$film = $_POST['film'];
		$wisata = $_POST['wisata'];
		echo "<img src= $gambar>";
		echo "<br><br>";
		//Hobbi
		if(!empty($_POST['hobi'])){
	 		echo "Hobi &nbsp; : ";
	 		foreach ($hobi as $nilai) {
		  		echo  $nilai.",&nbsp;" ;
		  	
			}
	 	}else{
	 		echo "Hobi &nbsp; : - ";
	 	}
	 	echo "<br>";
	 	//Genre Film
	 	if(!empty($_POST['film'])){
	 		echo "Film &nbsp; : ";
	 		foreach ($film as $datafilm ) {
				echo  $datafilm.",&nbsp;" ;
			
			}
	 	}else{
	 		echo "Film &nbsp; : - ";
	 	}
	 	echo "<br>";
		//Wisata
	 	if(!empty($_POST['wisata'])){
	 		echo "Wisata &nbsp; : ";
	 		foreach ($wisata as $tempat) {
				echo  $tempat.",&nbsp;" ;
			
			}
	 	}else{
	 		echo "Wisata &nbsp; : - ";
	 	}
	 	echo "<br>";
	
		
	 }
?>
</body>
