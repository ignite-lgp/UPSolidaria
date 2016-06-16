function changeInfo() {
    var x, y, z;
    // Hide original contents
    x = document.getElementsByClassName("organization-section");
    y = document.getElementsByClassName("organization-section-add-group");
    z = document.getElementsByClassName("organization-section-add-activity");

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < y.length; i++) {
        y[i].style.display = "none";
    }
    for (i = 0; i < z.length; i++) {
        z[i].style.display = "none";
    }
    // Show new contents
    x = document.getElementsByClassName("organization-section-change-info");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "block";
    }
}

function addGroup() {
    var x, y, z;
    // Hide original contents
    x = document.getElementsByClassName("organization-section");
    y = document.getElementsByClassName("organization-section-change-info");
    z = document.getElementsByClassName("organization-section-add-activity");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < y.length; i++) {
        y[i].style.display = "none";
    }
    for (i = 0; i < z.length; i++) {
        z[i].style.display = "none";
    }
    // Show new contents
    x = document.getElementsByClassName("organization-section-add-group");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "block";
    }
}

function addActivity() {
    var x, y, z;
    // Hide original contents
    x = document.getElementsByClassName("organization-section");
    y = document.getElementsByClassName("organization-section-add-group");
    z = document.getElementsByClassName("organization-section-change-info");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < y.length; i++) {
        y[i].style.display = "none";
    }
    for (i = 0; i < z.length; i++) {
        z[i].style.display = "none";
    }
    // Show new contents
    x = document.getElementsByClassName("organization-section-add-activity");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "block";
    }
}
