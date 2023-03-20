let x = document.getElementById("login");
let y = document.getElementById("signup");
var z = document.getElementById("btn");
var m = document.getElementById("overflowedit");


function login() {
    x.style.top = "0px";
    y.style.visibility = "hidden";
    y.style.top = "100px"
    z.style.left = "0";
}

function signup() {
    x.style.top = "-1000px";
    y.style.top = "-300px";
    z.style.left = "200px";
    y.style.visibility = "visible";
    m.style.overflow = "hidden";

}