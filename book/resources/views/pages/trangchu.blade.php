<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="">Home</a></li>
				<li><a href="admin/login">Login</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<header>
			<h1>Home Page</h1>
		</header>
		<div id="content">
			<article>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Author</th>
							<th>Img</th>
							<th>created_at</th>
							<th>update_at</th>
						</tr>
					</thead>
					<tbody>
						@foreach($book as $bk)
						<tr>
							<td>{{$bk->title}}</td>
							<td>{{$bk->description}}</td>
							<td>{{$bk->author}}</td>
							<td>{{$bk->img}}</td>
							<td>{{$bk->created_at}}</td>
							<td>{{$bk->updated_at}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</article>
		</div>
		<footer>

		</footer>
	</div>

</body>
</html>
