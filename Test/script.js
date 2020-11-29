const apiUrl = "https://dev.kwayisi.org/apis/gse/equities/";
var symbols = new Array();


$.getJSON(apiUrl,
    function (symbol) {
        symbols.push(symbol);
    }
);

console.log(symbols);