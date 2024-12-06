<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>Katalam</title>
    @inertiaHead
    @routes
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=ibm-plex-mono:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
    @vite(['resources/js/app.js'])
</head>
<body class="antialiased w-full bg-stone-900 text-stone-100 font-mono">
<div class="max-w-3xl mx-auto min-h-screen">
    @inertia
</div>
</body>
</html>
