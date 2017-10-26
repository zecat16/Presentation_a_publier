document.addEventListener('keydown', function (event) {
    document.getElementById("down").textContent = event.keyCode;
});

document.addEventListener('keyup', function (event2) {
    document.getElementById("up").textContent = event2.keyCode;
});
document.addEventListener('keypress', function (event3) {
    document.getElementById("press").textContent = event3.keyCode;
});
