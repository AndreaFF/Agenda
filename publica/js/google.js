/* Libreria para poder cargar mapas de google */

var mapa;
var geocoder;

function findLocation(direccion)
    /* Parametros de Entrada: Una cadena.
		Parametros de Salida: Ninguno.
		Acción: Mostrar la dirección indicada en el mapa.
	*/
    {
        geocoder.getLocations(direccion, addAddressToMap);
    }

function load(direccion)
    /* Parametros de Entrada: La dirección a buscar.
		Parametros de Salida: Ninguno.
		Acción: Llamara a las distintas funciones para mostrar el mapa.
	*/
    {
        var divElemento = document.getElementById("mapa");
        divElemento.style.display = "block";

        mapa = new GMap2(document.getElementById("mapa"));
        mapa.addControl(new GSmallMapControl());
        mapa.addControl(new GMapTypeControl());
        mapa.setCenter(new GLatLng(40.433049270815296, -3.6328911781311035), 5);
        geocoder = new GClientGeocoder();
        findLocation(direccion);
        window.scrollTo(0, 500);
    }


function addAddressToMap(response)
    /* Parametros de Entrada: Una cadena.
		Parametros de Salida: Ninguno.
		Acción: Mostrara el mapa.
	*/
    {

        var icono = new GIcon(G_DEFAULT_ICON);
        icono.image = "img/fotogoogle.png";
        icono.iconSize = new GSize(40, 40);
        icono.iconAnchor = new GPoint(40, 80);
        icono.infoWindowAnchor = new GPoint(40, 4);

        mapa.clearOverlays();
        if (!response || response.Status.code != 200) {
            mapa.openInfoWindowHtml(mapa.getCenter(), '<div id="errorDireccion">No existe direcci&oacute;n</div>');
        } else {
            mapa.setZoom(16);
            place = response.Placemark[0];
            point = new GLatLng(place.Point.coordinates[1],
                place.Point.coordinates[0]);
            marker = new GMarker(point, icono);
            mapa.addOverlay(marker);
            marker.openInfoWindowHtml('<div id="direccionContacto">CONTACTO:</div><div id="direccion">' + place.address + '</div>');
        }
    }
