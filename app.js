const express = require("express");
const app = express();
const port = process.env.PORT || 3001;

// const phpServerUrl = "http://localhost:8080/index.php"; // Replace with the actual URL of your PHP server
const phpServerUrl = "https://fusionhive.onrender.com/index.php";
app.get("/", (req, res) => {
	res.redirect(phpServerUrl);
});

const server = app.listen(port, () => console.log(`Example app listening on port ${port}!`));

server.keepAliveTimeout = 120 * 1000;
server.headersTimeout = 120 * 1000;
