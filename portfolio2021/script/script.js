document.getElementById("humburgerIco").onclick = function() {
    document.getElementById("barFirst").classList.toggle("moveBar01");
    document.getElementById("barSecond").classList.toggle("moveBar02");
    document.getElementById("barTherd").classList.toggle("moveBar03");

    document.getElementById("menu").classList.toggle("menuToggle");
    document.getElementById("all").classList.toggle("displayFilter");
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
    var changeContent = function() {
        document.getElementById("content01").classList.toggle("displayNone");
        document.getElementById("content02").classList.toggle("displayInline");
    }
    setTimeout(changeContent, 250);
};

document.getElementById("displayMenu").style.transform = "translateX(-200%)";

loadScreenHeight = screen.height;
halfHeight = loadScreenHeight / 2;
halfHeight = String(halfHeight) + "px";
document.getElementById("demo-1").style.marginTop = halfHeight;

screenWidth = screen.width
if (screenWidth > 430) {
    screenHeight = String(screen.height / 2) + "px";
    document.getElementById("section").style.paddingTop = screenHeight;
}

var displayContent = () => {
    var delayDisplay = () => {
        document.getElementById("displayMenu").style.transform = "none";
        document.getElementById("top").style.backgroundColor = "white";
        document.getElementById("allDisplay").style.display = "inline";
        document.getElementById("demo-1").style.display = "none";
        // set
        var typeK = () => {
            document.getElementById("typingZone").innerHTML = "k";
            document.getElementById("typingZone").style.textDecoration = "underline";
        }
        var typeKo = () => {
            document.getElementById("typingZone").innerHTML = "ko";
        }
        var typeKos = () => {
            document.getElementById("typingZone").innerHTML = "kos";
        }
        var typeKose = () => {
            document.getElementById("typingZone").innerHTML = "kose";
        }
        var typeKosei = () => {
            document.getElementById("typingZone").innerHTML = "kosei";
        }
        var pressEnter = () => {
                document.getElementById("typingZone").innerHTML = "Kosei";
                document.getElementById("typingZone").style.textDecoration = "none";
                // document.getElementById("flicker").style.display = "none";
            }
            //run
        setTimeout(typeK, 100);
        setTimeout(typeKo, 200);
        setTimeout(typeKos, 300);
        setTimeout(typeKose, 400);
        setTimeout(typeKosei, 500);
        setTimeout(pressEnter, 800);
    }
    setTimeout(delayDisplay, 2000);
}

window.addEventListener('load', displayContent);

var flickerE = () => {
    document.getElementById("flicker").style.opacity = "0";
}
var flickerS = () => {
    document.getElementById("flicker").style.opacity = "1";
    setTimeout(flickerE, 1000);
}

setInterval(flickerS, 2000);

function confirmation() {
    var form_count = 0;
    nameelem = document.getElementById('name');
    namevalue = nameelem.value;
    mailelem = document.getElementById('mail');
    mailvalue = mailelem.value;
    subjectelem = document.getElementById('subject');
    subjectvalue = subjectelem.value;
    contentselem = document.getElementById('contents');
    contentsvalue = contentselem.value;

    if (namevalue !== "") {
        form_count++;
        nameelem.style.border = "none";
    } else {
        nameelem.style.borderLeft = "solid red 4px";
    }
    if (mailvalue !== "") {
        form_count++;
        mailelem.style.border = "none";
    } else {
        mailelem.style.borderLeft = "solid red 4px";
    }
    if (subjectvalue !== "") {
        form_count++;
        subjectelem.style.border = "none";
    } else {
        subjectelem.style.borderLeft = "solid red 4px";
    }
    if (contentsvalue !== "") {
        form_count++;
        contentselem.style.border = "none";
    } else {
        contentselem.style.borderLeft = "solid red 4px";
    }


    if (form_count == 4) {
        document.contact_form.submit();
    }
}

function getWidth() {
    var width01 = screen.width;
}
setInterval(getWidth, 100);

$(function() {
    $('a[href^="#"]').click(function() {
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - 20;
        $('body,html').animate({ scrollTop: position }, speed, 'swing');
        return false;
    });
});


var link01 = document.getElementById('link01');
var link02 = document.getElementById('link02');
var link03 = document.getElementById('link03');
var link04 = document.getElementById('link04');
var link05 = document.getElementById('link05');
var link06 = document.getElementById('link06');

function params() {
    var paramY = window.pageYOffset;
    integer = Math.floor(paramY);
    scrollY = Number(integer);
    document.getElementById('param').innerHTML = scrollY;
}
setInterval(params, 1);

function backgroundColor() {
    if (scrollY >= 2000) {
        link01.style.backgroundColor = "black";
        link02.style.backgroundColor = "black";
        link03.style.backgroundColor = "black";
        link04.style.backgroundColor = "black";
        link05.style.backgroundColor = "black";
        link06.style.backgroundColor = "black";
    } else {
        link01.style.backgroundColor = "white";
        link02.style.backgroundColor = "white";
        link03.style.backgroundColor = "white";
        link04.style.backgroundColor = "white";
        link05.style.backgroundColor = "white";
        link06.style.backgroundColor = "white";
    }

    if (scrollY >= 2000) {
        document.getElementById('param').style.opacity = "0.06";
        document.getElementById('param').style.color = "black";
        document.getElementById('param').style.zIndex = "-1";
    } else {
        document.getElementById('param').style.color = "white";
        document.getElementById('param').style.opacity = "0.22";
        document.getElementById('param').style.zIndex = "1";
    }

    if (scrollY >= 500) {
        document.getElementById('param').style.opacity = "0.22";
        if (scrollY >= 2950) {
            document.getElementById('param').style.opacity = "0";
            if (scrollY >= 3050) {
                document.getElementById('param').style.display = "none";
            } else {
                document.getElementById('param').style.display = "block";
            }
        } else {
            document.getElementById('param').style.opacity = "0.06";
        }
    } else {
        document.getElementById('param').style.opacity = "0";
    }

    // if(scrollY >= 700){
    //   document.getElementById('param').style.display = "none";
    // }else{
    //   document.getElementById('param').style.display = "none";
    // }
}
setInterval(backgroundColor, 1);

link01.addEventListener("click", function() {
    link01.classList.add('headerAnimation');
    if (link01.classList.contains('headerAnimation')) {
        setTimeout(function() {
            link01.classList.remove('headerAnimation');
        }, 1000)
    }
});
link02.addEventListener("click", function() {
    link02.classList.add('headerAnimation');
    if (link02.classList.contains('headerAnimation')) {
        setTimeout(function() {
            link02.classList.remove('headerAnimation');
        }, 1000)
    }
});
link03.addEventListener("click", function() {
    link03.classList.add('headerAnimation');
    if (link03.classList.contains('headerAnimation')) {
        setTimeout(function() {
            link03.classList.remove('headerAnimation');
        }, 1000)
    }
});
link04.addEventListener("click", function() {
    link04.classList.add('headerAnimation');
    if (link04.classList.contains('headerAnimation')) {
        setTimeout(function() {
            link04.classList.remove('headerAnimation');
        }, 1000)
    }
});
link05.addEventListener("click", function() {
    link05.classList.add('headerAnimation');
    if (link05.classList.contains('headerAnimation')) {
        setTimeout(function() {
            link05.classList.remove('headerAnimation');
        }, 1000)
    }
});
link06.addEventListener("click", function() {
    link06.classList.add('headerAnimation');
    if (link06.classList.contains('headerAnimation')) {
        setTimeout(function() {
            link06.classList.remove('headerAnimation');
        }, 1000)
    }
});