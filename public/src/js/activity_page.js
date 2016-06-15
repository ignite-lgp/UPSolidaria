function addMembers() {
    var x, y;
    // Hide original contents
    x = document.getElementsByClassName("activity-section");
    y = document.getElementsByClassName("activity-section-add-user");

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < y.length; i++) {
        y[i].style.display = "none";
    }

    // Show new contents
    x = document.getElementsByClassName("organization-section-change-info");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "block";
    }
}
