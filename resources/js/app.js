import L from "leaflet";

import 'leaflet-draw/dist/leaflet.draw';
import 'leaflet/dist/leaflet.css';
import 'leaflet-draw/dist/leaflet.draw.css';

window.type = true;
document.addEventListener('DOMContentLoaded', function () {
    var map = L.map('map').setView([51.505, -0.09], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    var drawnItems = new L.FeatureGroup();
    var drawControl = new L.Control.Draw({
        draw: {
            polyline: false,
            circle: false,
            marker: false,
            circlemarker: false,
        },
        edit: {
            featureGroup: drawnItems,
            edit: false,
        }
    });

    map.addLayer(drawnItems);
    map.addControl(drawControl);
    
    map.on(L.Draw.Event.CREATED, function (e) {
        var type = e.layerType,
            layer = e.layer;
        
        console.log(type);
        console.log(layer._latlngs);

        map.addLayer(layer);

        Livewire.dispatch('open-form', { type: type, points: layer._latlngs[0] });
    });

});