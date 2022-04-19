const userLocation = document.getElementById("location");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showAddress);
    } else {
        userLocation.innerHTML =
            "Geolocation is not supported by this browser.";
    }
}

function showAddress(position) {
    fetch(
        "https://nominatim.openstreetmap.org/reverse.php?" +
            "lat=" +
            position.coords.latitude +
            "&lon=" +
            position.coords.longitude +
            "&zoom=16&format=jsonv2"
    )
        .then((response) => response.json())
        .then((data) => {
            userLocation.innerHTML =
                position.coords.latitude + "," + position.coords.longitude;
            userLocation.innerHTML += "<br/>" + data.display_name;
            console.log(data);
        });
}
