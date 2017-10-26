document.addEventListener('DOMContentLoaded', function (event) {
    alert('tout est chargé');
});

document.addEventListener('scroll', function (event) {
    console.log(document.body.scrollTop);
});

window.addEventListener('resize', function (event) {
    console.log(this.innerHeight + " de haut et " + innerWidth + " de large"); 
});