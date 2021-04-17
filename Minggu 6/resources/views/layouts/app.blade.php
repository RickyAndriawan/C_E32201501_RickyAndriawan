 <!DOCTYPE html>
 <html lang="{[ str_repleace('_','-', app() ->getlocate())]">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="widht-device-widht, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie-edge">
 	<title>{{ config('app.name')}}</title>
 </head>
 <body bgcolor= #00ffdd>
 	<div class="jumbatron jumbatron-fluid">
 		<div class="container">
 			@yield('content')
 		</div>
 	</div>
 </body>
 </html>