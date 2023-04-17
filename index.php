<?php
   $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'].'/';
$scan = preg_grep('/^([^.])/', scandir("images/"));
$i = array_rand($scan);

$selectedBg = $scan[$i];

//echo $selectedBg;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Domain is Parked</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      background-color: #292929;
      background-image: url(<?php echo $protocol.$domainName . 'images/' . $selectedBg ?>);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: rgba(255, 255, 255, 0.8);
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      height: 100%;
      text-align: center;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      display: flex;
      flex-flow: column nowrap;
      justify-content: center;
      align-items: center;
      padding: 0 1rem;
      height: 100vh;
    }

    header {
      width: 100%;
      flex-grow: 1;
      display: flex;
      flex-flow: column nowrap;
      justify-content: center;
    }

    .emoji {
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    h1 {
      white-space: nowrap;
      display: inline-block;
      line-height: 1;
      font-weight: 800;
    }

    footer {
      margin-bottom: 2rem;
      font-size: 0.95rem;
      letter-spacing: 1px;
    }

    p {
      line-height: 1.625;
    }

a:link, a:visited, a:hover, a:active {
  //color: white;
  color: rgba(255, 255, 255, 0.8);
  background-color: transparent;
  text-decoration: none;
}

  </style>


</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NYBBYYBM9D"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NYBBYYBM9D');
</script>
<body>
  <div class="container">
    <header class="block">
      <div>
        <h1><span id="site_domain">Domain is Parked</span></h1>
      </div>
    </header>
    <footer>
      <p>This domain is currently parked. <a href="https://www.cloudns.net/aff/id/54697/" target="_blank">DNS is hosted by ClouDNS.</a></p>
    </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fitty/2.3.2/fitty.min.js"></script>
  <script>
    var url = window.location.hostname;
    var site_domain = document.querySelector('#site_domain');
    site_domain.innerHTML = url;
    fitty('h1');
  </script>

</body>

</html>
