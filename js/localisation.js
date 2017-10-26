var maDiv = document.getElementsByClassName("couleurRouge")[0];
maDiv.addEventListener('click', function (event) {
    alert('on a cliqué');
});
maDiv.addEventListener("mousemove", function (event) {
    maDiv.textContent = "x : " + event.offsetX + " y : " + event.offsetY;
    if (event.offsetX > 100 && event.offsetY > 100) {
        alert("Trouvé !");
    }
});

mLeave = function (event) {
    maDiv.textContent = "Reviens !";
};

maDiv.addEventListener("mouseleave", mLeave);
maDiv.removeEventListener("mouseleave", mLeave);