<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

	<!-- Styles -->
	@vite('resources/css/app.css')
	<style>
	</style>
</head>
<body class="antialiased bg-black">
	<div class="block-header flex text-white">EUROPE</div>
	<div class="block-content flex gap-2 m-2">
		@foreach( countryModelController()->fetchAll() as $country )
			@include(
			'components.card-country',
			[
				'headTitle' => $country->name,
				'icon' => 'img/flag_ukraine.png',
				'iso2' => $country->iso2,
				'mcc' => '255',
			]
		)
		@endforeach
	</div>
</body>
</html>
