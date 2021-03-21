var h = window.innerHeight;
console.log(h);
h = String(h);
h = h + "px";
document.getElementById('content').style.height = h;
document.getElementById('content').style.lineHeight = h;
function notfound02() {
  document.getElementById('content').style.display = "block";
  document.getElementById('content').style.opacity = "1";
  document.getElementById('content').classList.add('tenmetu');
  document.getElementById('content').innerHTML = "Back home";
}
function notfound() {
  document.getElementById('content').style.display = "none";
  setTimeout(notfound02, 500);
}
num = 750;
function minus() {
  if (num >= 405) {
    random = Math.random();
    num = num - random;
    num = Math.floor(num);
    document.getElementById('content').innerHTML = num;
  } else if (num == 404) {
    document.getElementById('content').style.opacity = "0";
    num--;
    setTimeout(notfound, 1000);
  }
}
setInterval(minus, 1);