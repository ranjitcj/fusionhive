const express = require("express");
const { createProxyMiddleware } = require("http-proxy-middleware");

const app = express();
const port = process.env.PORT || 3001;

// Proxy requests to the PHP server
app.use("/", createProxyMiddleware({
    target: "http://localhost:8000", // PHP server address
    changeOrigin: true,
    pathRewrite: { "^/": "/" }
}));

app.listen(port, () => console.log(`Example app listening on port ${port}!`));
