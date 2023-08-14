document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("limpiarBtn").addEventListener("click", function() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = false;
        });
    });
});
document.getElementById("calculateColorBtn").addEventListener("click", function() {
    let columnNumber = 4; // Número de la columna a calcular
    let checkboxes = document.querySelectorAll(`td:nth-child(${columnNumber}) input[type="checkbox"]`);
    let totalCheckboxes = checkboxes.length;
    let checkedCheckboxes = 0;

    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            checkedCheckboxes++;
        }
    });

    let percentage = (checkedCheckboxes / totalCheckboxes) * 100;
    let color;

    if (percentage >= 80) {
        color = 'green'; 
    } else if (percentage >= 30) {
        color = 'yellow'; 
    } else {
        color = 'red'; 
    }

    console.log("Color:", color);

    setImageByColor(color);
});

function setImageByColor(color) {
    let imageName = "";

    if (color === 'green') {
        imageName = "FeVerde.jpg";
    } else if (color === 'yellow') {
        imageName = "FeAmarilo.jpeg";
    } else {
        imageName = "FeRojo.jpeg";
    }

    let imgElement = document.getElementById("defaultImage");
    imgElement.src = imageName;
    imgElement.alt = "Imagen " + imageName;
}


