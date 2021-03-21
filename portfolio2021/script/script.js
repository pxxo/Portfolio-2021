document.getElementById("humburgerIco").onclick = function() {
    document.getElementById("barFirst").classList.toggle("moveBar01");
    document.getElementById("barSecond").classList.toggle("moveBar02");
    document.getElementById("barTherd").classList.toggle("moveBar03");

    document.getElementById("menu").classList.toggle("menuToggle");
    document.getElementById("all").classList.add("displayFilter");
}
document.getElementById("closeMenu").onclick = function() {
    document.getElementById("barFirst").classList.remove("moveBar01");
    document.getElementById("barSecond").classList.remove("moveBar02");
    document.getElementById("barTherd").classList.remove("moveBar03");

    document.getElementById("menu").classList.toggle("menuToggle");
    document.getElementById("all").classList.remove("displayFilter");
}
document.getElementById("allDisplay").onclick = function() {
    document.getElementById("barFirst").classList.remove("moveBar01");
    document.getElementById("barSecond").classList.remove("moveBar02");
    document.getElementById("barTherd").classList.remove("moveBar03");

    document.getElementById("menu").classList.remove("menuToggle");
    document.getElementById("all").classList.remove("displayFilter");
}

document.getElementById("rotateCard").onclick = function() {
    document.getElementById("rotateCard").classList.toggle("rotateCard");
    var changeContent = function(params) {
        document.getElementById("content01").classList.toggle("displayNone");
        document.getElementById("content02").classList.toggle("displayInline");
    }
    setTimeout(changeContent, 250);
};
