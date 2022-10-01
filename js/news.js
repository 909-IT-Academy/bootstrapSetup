// WARNING: For GET requests, body is set to null by browsers.
var data = new FormData();

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;


xhr.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("GET", "https://newsapi.org/v2/top-headlines?country=au&apiKey=00f7b498d6174daeac53548a343345de");
xhr.setRequestHeader("Access-Control-Allow-Origin","*.");

$response = xhr.send(data);

console.log($response);