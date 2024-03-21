let mapOptions = {
    center: [48.30404161623466, 4.082274250779181],
    zoom: 25
}

let map = new L.map('maCarte', mapOptions)

let layer = new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
map.addLayer(layer);

let customIcon = {
    iconUrl: "../wp-content/themes/cecref/assets/icons/location-pink.png",
    iconSize:[80,80]
}

let myIcon = L.icon(customIcon);

let iconOptions = {
    icon:myIcon
}

let marker = new L.Marker([48.30404161623466, 4.082274250779181], iconOptions)
marker.addTo(map)