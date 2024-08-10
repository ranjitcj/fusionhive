const express = require('express');
const { createProxyMiddleware } = require('http-proxy-middleware');
const app = express();
const port = 8000;

// Proxy requests to PHP server
app.use('/', createProxyMiddleware({ target: 'http://localhost:8000', changeOrigin: true }));

app.listen(port, () => {
  console.log(`Server listening at http://localhost:${port}`);
});
