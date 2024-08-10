const express = require("express");
const path = require("path");
const app = express();
const port = process.env.PORT || 3001;

// Serve static files from the "fusionhive" directory
app.use(express.static(path.join(__dirname, 'fusionhive')));

// Route handler for root path
app.get("/", (req, res) => {
    res.sendFile(path.join(__dirname, 'fusionhive', 'index.php'));
});

// Start the server
const server = app.listen(port, () => console.log(`Example app listening on port ${port}!`));

// Set keep-alive and headers timeout
server.keepAliveTimeout = 120 * 1000;
server.headersTimeout = 120 * 1000;
