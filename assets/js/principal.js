
var la = document.getElementById("lineaActiva").value;
window.location.href = '?linea=' + la;

function mostrarHome(){
    
    document.getElementById("sectionhome").style.display = "block";
    document.getElementById("sectionllamadas").style.display = "none";
    document.getElementById("sectionsms").style.display = "none";
    document.getElementById("sectionfacturas").style.display="none";
    document.getElementById("sectiondatos").style.display = "none";

    document.getElementById("btnHome").style.backgroundColor = "snow";
    document.getElementById("ihome").style.color = "#10B0E6";
    document.getElementById("btnLlamadas").style.backgroundColor = "#10B0E6";
    document.getElementById("illamada").style.color = "snow";
    document.getElementById("btnDatos").style.backgroundColor = "#10B0E6";
    document.getElementById("idatos").style.color = "snow";
    document.getElementById("btnSms").style.backgroundColor = "#10B0E6";
    document.getElementById("isms").style.color = "snow";
    document.getElementById("btnFacturas").style.backgroundColor = "#10B0E6";
    document.getElementById("ifacturas").style.color = "snow";
}
function mostrarDatos(){
    
    document.getElementById("sectionhome").style.display = "none";
    document.getElementById("sectionllamadas").style.display = "none";
    document.getElementById("sectionsms").style.display = "none";
    document.getElementById("sectionfacturas").style.display="none";
    document.getElementById("sectiondatos").style.display = "block";

    document.getElementById("btnHome").style.backgroundColor = "#10B0E6";
    document.getElementById("ihome").style.color = "snow";
    document.getElementById("btnLlamadas").style.backgroundColor = "#10B0E6";
    document.getElementById("illamada").style.color = "snow";
    document.getElementById("btnDatos").style.backgroundColor = "snow";
    document.getElementById("idatos").style.color = "#10B0E6";
    document.getElementById("btnSms").style.backgroundColor = "#10B0E6";
    document.getElementById("isms").style.color = "snow";
    document.getElementById("btnFacturas").style.backgroundColor = "#10B0E6";
    document.getElementById("ifacturas").style.color = "snow";
}
function mostrarLlamadas(){
    
    document.getElementById("sectionhome").style.display = "none";
    document.getElementById("sectiondatos").style.display="none";
    document.getElementById("sectionsms").style.display="none";
    document.getElementById("sectionfacturas").style.display="none";
    document.getElementById("sectionllamadas").style.display="block";

    document.getElementById("btnHome").style.backgroundColor = "#10B0E6";
    document.getElementById("ihome").style.color = "snow";
    document.getElementById("btnLlamadas").style.backgroundColor = "snow";
    document.getElementById("illamada").style.color = "#10B0E6";
    document.getElementById("btnDatos").style.backgroundColor = "#10B0E6";
    document.getElementById("idatos").style.color = "snow";
    document.getElementById("btnSms").style.backgroundColor = "#10B0E6";
    document.getElementById("isms").style.color = "snow";
    document.getElementById("btnFacturas").style.backgroundColor = "#10B0E6";
    document.getElementById("ifacturas").style.color = "snow";
}
function mostrarSms(){
    
    document.getElementById("sectionhome").style.display = "none";
    document.getElementById("sectionllamadas").style.display="none";
    document.getElementById("sectiondatos").style.display="none";
    document.getElementById("sectionfacturas").style.display="none";
    document.getElementById("sectionsms").style.display="block";

    document.getElementById("btnHome").style.backgroundColor = "#10B0E6";
    document.getElementById("ihome").style.color = "snow";
    document.getElementById("btnLlamadas").style.backgroundColor = "#10B0E6";
    document.getElementById("illamada").style.color = "snow";
    document.getElementById("btnDatos").style.backgroundColor = "#10B0E6";
    document.getElementById("idatos").style.color = "snow";
    document.getElementById("btnSms").style.backgroundColor = "snow";
    document.getElementById("isms").style.color = "#10B0E6";
    document.getElementById("btnFacturas").style.backgroundColor = "#10B0E6";
    document.getElementById("ifacturas").style.color = "snow";
}
function mostrarFacturas(){
    
    document.getElementById("sectionhome").style.display = "none";
    document.getElementById("sectionllamadas").style.display="none";
    document.getElementById("sectiondatos").style.display="none";
    document.getElementById("sectionsms").style.display="none";
    document.getElementById("sectionfacturas").style.display="block";

    document.getElementById("btnHome").style.backgroundColor = "#10B0E6";
    document.getElementById("ihome").style.color = "snow";
    document.getElementById("btnLlamadas").style.backgroundColor = "#10B0E6";
    document.getElementById("illamada").style.color = "snow";
    document.getElementById("btnDatos").style.backgroundColor = "#10B0E6";
    document.getElementById("idatos").style.color = "snow";
    document.getElementById("btnSms").style.backgroundColor = "#10B0E6";
    document.getElementById("isms").style.color = "snow";
    document.getElementById("btnFacturas").style.backgroundColor = "snow";
    document.getElementById("ifacturas").style.color = "#10B0E6";
}
function lineaActiva(){
    var la = document.getElementById("lineaActiva").value;
    window.location.href = '?linea=' + la;
};