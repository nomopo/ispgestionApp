
var la = document.getElementById("lineaActiva").value;
window.location.href = '?linea=' + la;

function mostrarDatos(){
    
    document.getElementById("sectionllamadas").style.display = "none";
    document.getElementById("sectionsms").style.display = "none";
    document.getElementById("sectionfacturas").style.display="none";
    document.getElementById("sectiondatos").style.display = "block";
}
function mostrarLlamadas(){
    
    document.getElementById("sectiondatos").style.display="none";
    document.getElementById("sectionsms").style.display="none";
    document.getElementById("sectionfacturas").style.display="none";
    document.getElementById("sectionllamadas").style.display="block";
}
function mostrarSms(){
    
    document.getElementById("sectionllamadas").style.display="none";
    document.getElementById("sectiondatos").style.display="none";
    document.getElementById("sectionfacturas").style.display="none";
    document.getElementById("sectionsms").style.display="block";
}
function mostrarFacturas(){
    
    document.getElementById("sectionllamadas").style.display="none";
    document.getElementById("sectiondatos").style.display="none";
    document.getElementById("sectionsms").style.display="none";
    document.getElementById("sectionfacturas").style.display="block";
}
function lineaActiva(){
    var la = document.getElementById("lineaActiva").value;
    window.location.href = '?linea=' + la;
};