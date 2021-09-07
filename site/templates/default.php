<html>
<head>
  <title>API Example</title>
</head>

<body>
<script>
  const csrf = "<?= csrf() ?>";

  fetch("http://localhost:8000/api/pages/projects", {
    method: "GET",
    headers: {
      // "X-CSRF" : csrf
      'Authorization': 'Basic ' + btoa('public@public.com:publickey'),
    }
  })
    .then(response => response.json())
    .then(response => {
      const page = response.data;
      console.log( page )
    })
    .catch(error => {
      // something went wrong
    });
</script>
</body>
</html>
