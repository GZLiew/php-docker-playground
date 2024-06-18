<?php

  $payload = array(
    "iss" => "http://example.org",
    "aud" => "http://example.com",
    "scope" => "http://example.com",
    "exp" => floor(time()) + 3600,
    "iat" => floor(time())
  );
  
?>

<script>
  var hello = `<?php echo json_encode($payload);  ?>`;
  const parsed = JSON.parse(hello);
  console.log(JSON.parse(hello));

  window.onload = function() {
    const container = document.querySelector('.container')
    container.innerText = parsed.iss;
  };

</script>

<div class="container">hello</div>


