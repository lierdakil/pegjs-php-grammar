const fs = require('fs');

var pegjs = require("pegjs");
var phppegjs = require("php-pegjs");

const data = fs.readFileSync('./grammar.peg').toString('utf8');

var parser = pegjs.buildParser(data, {
    plugins: [phppegjs]
});

fs.writeFileSync('./parser.php', parser);

