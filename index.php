<?php 
include 'views/header.php';

 ?>

	<div class="col-md-4 col-md-offset-4" >
		
			<form action="sign.php" method="post">
				<div class="form-group">
					<label for="file">Dodaj plik</label>
					<input type="file" name="file" id="file" accept=".json">
				</div><br>
				<button type="submit" name="submit">Zakoduj plik/Weryfikuj plik </button>
			</form>
		
	</div>

<?php 

include 'views/footer.php';

 ?>