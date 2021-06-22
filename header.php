   <!-- Startup configuration -->
<link rel="manifest" href="/manifest.json">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Duonymity is a website where you can disclose all your hidden thoughts, feelings, ideas, etc through messages and pictures anonymously.">
    <meta name="robots" content="index, follow" />
    <meta property="og:url" content="https://duonymity.com/" />

	<meta property="og:type" content="website" />

	<meta property="og:title" content="Anonynous messages and Pictures --Duonymity" />

	<meta property="og:description"
		content="Duonymity is a website where you can disclose all your hidden thoughts, feelings, ideas, etc through messages and pictures anonymously." />

	<meta property="og:image" content="duonymity/images/cover.jpg" />


	<meta name="theme-color" content="#03b035">
    <link rel="icon" type="image/png" href="duonymity/images/icons/favicon.png" />

    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='application-name' content='Duonymity'>
    <meta name='apple-mobile-web-app-status-bar-style' content='green'>
    <meta name='apple-mobile-web-app-title' content='Duonymity'>
    <link rel='icon' sizes='192x192' href='duonymity/images/logo-icon-192.png'>
	<link rel='apple-touch-icon'  href='duonymity/images/logo-icon-192.png'>
	

    <link rel="stylesheet" type="text/css" href="duonymity/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="duonymity/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="duonymity/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="duonymity/css/util.css">

    <link rel="stylesheet" type="text/css" href="css/main.css">





    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163341808-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-163341808-1');
    </script>
    <script>
if('serviceWorker' in navigator) {
  navigator.serviceWorker
           .register('/sw.js')
           .then(function() { console.log("Service Worker Registered"); });
}
</script>