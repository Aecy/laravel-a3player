<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show the information of a player</title>
</head>
<body>
	<ul>
	@foreach($players as $player)
		<li>{{ $player->name }} have {{ $player->bankacc }} $</li>
	@endforeach
	<ul>
</body>
</html>