const express = require('express');
const { exec } = require('child_process');
const app = express();
const port = 8080;

app.get('/', (req, res) => {
  exec('php-cgi index.php', (error, stdout, stderr) => {
    if (error) {
      res.status(500).send('Error executing PHP script');
      return;
    }
    res.send(stdout);
  });
});

app.listen(port, () => {
  console.log(`Node.js server running at http://localhost:${port}`);
});
