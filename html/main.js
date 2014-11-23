/**
 * Created by cjones on 11/19/2014.
 */
var conn = new WebSocket('ws://eznetservers.com:8085');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
};