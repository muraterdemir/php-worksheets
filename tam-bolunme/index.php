<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<div class="container h-100">
		<div class="row d-flex flex-column min-vh-100 justify-content-center align-items-center">
			<div class="col-6 text-center">
					<form action="kontrol.php" method="post">
						<div class="form-group">
							<h2>Bir Sayı Giriniz</h2>
							<input type="text" name="sayi"><br>
							<button type="submit" class="btn btn-primary mx-auto" style="margin:20px auto 0px auto;">Kontrol Et</button>
						</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>