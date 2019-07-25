var app = angular.module('omtourApp', ['duScroll']).value('duScrollOffset', 195);

app.controller('mainController', function($scope, $http){
    $scope.sendMail = function(nombre, email, telefono, comentario){
        var data = {
            nombre : nombre,
            email : email,
            telefono: telefono,
            comentario : comentario
        }
        $http.post('sendmail.php', JSON.stringify(data)).then(function(response){
            console.log(response);
        }, function(error){

        });
        console.log('aqui');
    }
})
app.controller('itinerarioController', function($scope){

    /*europa del este*/
    let itinerario_europaDelEste = [
        {
            'dia' : 'Día 1º SANTIAGO – VIENA',
            'plan' : 'Nos juntaremos en el Aeropuerto de Santiago con destino a nuestro primer país, Austria, y su capital, Viena como parte de esta gran ruta por Europa del este. Vuelo conexión en Amsterdan. Noche a bordo '
        },
        {
            'dia' : 'Día 2º VIENA:',
            'plan' : 'Llegada a la capital de Austria, traslado y recepción en Hotel. Luego  tendremos la tarde libre para descansar o tener una primera impresión con la ciudad, previa consulta con nuestro Guía coordinador. Alojamiento en la ciudad de Viena. '
        },
        {
            'dia' : 'Día 3º VIENA:',
            'plan' : 'Empezaremos con nuestra aventura con un recorrido para tener una vista panorámica de la ciudad de Viena, con sus majestuosos palacios, la famosa avenida Ringstrasse, siendo la calle mas importante de la ciudad, un paso por el Danubio, y por el casco histórico de la ciudad, visitando lugares como hofburg y  una panorámica  exterior por el museo Albertina. Durante la tarde habrá tiempo libre para actividades personales o descansar. Alojamiento en Viena.'
        },
        {
            'dia' : 'Día 4º VIENA– BRATISLAVA – BUDAPEST:',
            'plan' : 'Partiremos con un nuevo recorrido de 260 km atravesando las llanuras de Moravia, hacia Bratislavia, capital de Eslovaquia, con sus lindas calles y Puerta de San Miguel, una de los últimos vestigios de la antigua ciudad amurallada. Luego continuaremos con nuestro rumbo, a través de la llanura del Danubio. Llegada a la ciudad de Budapest y recepción en hotel. Alojamiento en la capital de Hungria.'
        },
        {
            'dia' : 'Día 5º BUDAPEST:',
            'plan' : 'comenzamos nuestro día con una visita Panorámica por la ciudad que se encuentra dividida en dos por el gran rio Danubio, situándose a la izquierda la conocida zona de Buda con el castillo de la ciudadadela y el bastion de los pescadores, y a la derecha la zona de Pest, donde encontraremos el parlamento y otros edificios históricos. Luego regresamos al hotel para una tarde libre.'
        },
        {
            'dia' : 'Día 6 BUDAPEST:',
            'plan' : 'Jornada libre para que nuestros viajeros puedan realizar compras, hacer algún tour opcional con la asistencia de nuestro Guía coordinador o descansar. Alojamiento en Budapest.'
        },
        {
            'dia' : 'Día 7º BUDAPEST - CRACOVIA:',
            'plan' : 'Nuestro séptimo día empieza con el recorrido de 400 kms cruzando los campos de Europa del este hacia la capital de Polonia, una de sus ciudades mas antiguas e importantes del país, situada cercana al rio Vístula. Llegada y recepción en el hotel. Alojamiento en Cracovia.'
        },
        {
            'dia' : 'Día 8º CRACOVIA',
            'plan' : 'Empezaremos con una visita panorámica de la ciudad mas grande e importante de Polonia, llena a de historia y cultura, visitando su casco histórico medieval, la plaza del mercado, edificios de gran valor cultural que rodean la plaza,  como la iglesia de Santa María, la torre del ayuntamiento y la catedral de Vawel. Despues disfrutaremos de una rica tarde libre en las instalaciones del hotel o podremos salir a recorrer por cuenta propia las calles de la capital. Alojamiento en Cracovia.'
        },
        {
            'dia' : 'Día 9º CRACOVIA – CZESTOCHOWA - VARSOVIA:',
            'plan' : 'El día comienza con el recorrido por Polonia, donde pasaremos por Czestochowa, ciudad situada a orillas del rio Warta. En aquel lugar, peregrinos de todo el mundo llegan al monasterio de Jasna Gora, para venerar la imagen de la Virgen negra. Llegada y recepción en hotel. Alojamiento en Varsovia.'
        },
        {
            'dia' : 'Día 10º VARSOVIA:',
            'plan' : 'Comenzaremos nuestra visita y aventura por una de las ciudades históricas de Polonia, visitando la catedral de San Juan, la plaza del mercado y del Castillo Real, una ciudad entorno a la realeza y aristocracia. Tarde libre para descansar o salir de compras. Alojamiento en Varsovia.'
        },
        {
            'dia' : 'Día 11º VARSOVIA – POZNAN - BERLÍN:',
            'plan' : 'Partiremos temprano hacia Poznan, gran ciudad comercial e industrial, donde es conocida turísticamente por sus iglesias góticas y el museo nacional. Luego cruzaremos la frontera en dirección a la capital de Alemania, Berlín. Recepción y llegada al hotel. Alojamiento en Berlín.'
        },
        {
            'dia' : 'Día 12º BERLÍN:',
            'plan' : 'Nuestro día empieza con una visita panorámica por la capital de Alemania, recorriendo la famosa puerta de Brandenburgo, la iglesia memorial del Kaiser Guillermo, el Reichstag y los restos del muro de Berlín, lugar lleno de historia y cultura mundial.Tarde libre para descansar o coordinar algún panorama opcional con nuestro guía coordinador. Alojamiento en Berlín.'
        },
        {
            'dia' : 'Día 13º BERLÍN:',
            'plan' : 'Día libre para realizar compras en los principales centros comerciales de la ciudad o recorrer los mayores puntos de atracción turística, con el apoyo o asistencia de nuestro guía coordinador. Almuerzo por cuenta de los viajeros. Alojamiento en Berlín.'
        },
        {
            'dia' : 'Día 14º BERLÍN – DRESDEN -PRAGA:',
            'plan' : 'Comenzaremos nuestra aventura tomando nuestro bus privado en dirección a Dresden, donde habrá tiempo libre para recorrer esta ciudad típica de Alemania. Llegada y recepción en el hotel en Praga, sumando así otro país mas en nuestro gran tour por Europa del este. Alojamiento en Praga.'
        },
        {
            'dia' : 'Día 15º PRAGA:',
            'plan' : 'La experiencia este día parte con una visita panorámica por una de las ciudades mas lindas de Republica Checa, conocida como la ciudad dorada, donde podremos ver el puente de Carlos con sus lindas estatuas y la famosa torre del ayuntamiento con el reloj astronómico. Alojamiento en Praga.'
        },
        {
            'dia' : 'Día 16º PRAGA:',
            'plan' : 'Día libre para nuestros viajeros, y así puedan disfrutar de las instalaciones del hotel, salir de compras por la ciudad o alternativas de tours, que pueden ser planificadas junto a nuestro guía coordinador. Alojamiento en Praga.'
        },
        {
            'dia' : 'Dia 17º PRAGA - MADRID',
            'plan' : 'Traslado hacia el Aeropuerto de la ciudad, para salir con destino a Madrid, donde llegaremos a la capital española para tener una noche de descanso antes de nuestro traslado final a Santiago de Chile.'
        },
        {
            'dia' : 'Día 18º MADRID - SANTIAGO:',
            'plan' : 'Tomaremos nuestro vuelo desde Madrid con dirección a Santiago, finalizando esta gran experiencia pero dando inicio a una nueva gran familia viajera, la familia Omtour.'
        },
    ];
    $scope.itinerario_europaDelEste = itinerario_europaDelEste;

    let hoteles__europaDelEste = [
        {
            'ciudad' : 'Viena',
            'hotel' : 'Hotel Senator'
        },
        {
            'ciudad' : 'Budapest',
            'hotel' : 'Hotel Park inn by Radisson'
        },
        {
            'ciudad' : 'Cracovia',
            'hotel' : 'Hotel INX Design'
        },
        {
            'ciudad' : 'Varsovia',
            'hotel' : 'Hotel Radisson Blue Sobieski'
        },
        {
            'ciudad' : 'Berlín',
            'hotel' : 'Hotel Centro park'
        },
        {
            'ciudad' : 'Praga',
            'hotel' : 'Hotel Duo'
        },
        {
            'ciudad' : 'Madrid',
            'hotel' : 'Hotel'
        },
    ];
    $scope.hoteles__europaDelEste = hoteles__europaDelEste;

    let vuelos_europaDelEste = [
        {
            'tipo' : 'ida',
            'vuelo' : 'IB 6830',
            'fecha' : '4 DE OCT',
            'origen-destino' : 'Santiago - Madrid',
            'salida' : '12:30',
            'llegada' : '06:20 (+1)'
        },
        {
            'tipo' : 'ida',
            'vuelo' : 'IB 3120',
            'fecha' : '5 DE OCT',
            'origen-destino' : 'Madrid - Viena',
            'salida' : '08:40',
            'llegada' : '11:35'
        },
        {
            'tipo' : 'regreso',
            'vuelo' : 'IB 3149',
            'fecha' : '20 DE OCT',
            'origen-destino' : 'Praga - Madrid',
            'salida' : '15:00',
            'llegada' : '18:05'
        },
        {
            'tipo' : 'regreso',
            'vuelo' : 'IB 6831',
            'fecha' : '21 DE OCT',
            'origen-destino' : 'Madrid - Santiago',
            'salida' : '23:45',
            'llegada' : '08:20(+1)'
        },

    ];
    $scope.vuelos_europaDelEste = vuelos_europaDelEste;

    let terminosDelEste = [
        {
            'texto' : 'Valores e itinerarios intermediados por Agencia de viajes y tour operador turístico Omtour SpA. pueden ser modificados sin previo aviso por los proveedores de los respectivos servicios. Las Tarifas podrían sufrir variación de acuerdo a las clases aéreas disponibles al momento de solicitar la reserva y compra. El valor de las tarifas se encuentra sujeto a la disponibilidad de la misma por parte de sus respectivos proveedores al momento de su reserva y pago. Por lo mismo, ciertas tarifas pueden no estar disponibles para determinadas fechas y deberán ser confirmadas al momento de efectuar su reserva y pago. Cualquier modificación puede considerar otros valores, ademas de estar sujetos a posibles variaciones dependiendo el tipo de cambio y/o impuestos.'
        },
        {
            'texto' : 'Cupos y servicios serán confirmados al momento de realizar el pago. Las ofertas, tarifas y servicios turísticos son limitados y se encontrarán vigentes hasta agotar la cantidad que disponga unilateralmente el proveedor respectivo, sin ulterior responsabilidad para Agencia de viajes y tour operador turistico Omtour SpA. '
        },
        {
            'texto' : 'Programa sujeto a multas por concepto de anulación o modificación de servicios en caso que lo permita.'
        },
        {
            'texto' : 'Una vez confirmados y pagados los cupos, estos no tienen derecho a devolución ni a reembolso.'
        },
        {
            'texto' : 'Servicios no utilizados no son reembolsables. '
        },
        {
            'texto' : 'Los cambios de nombres e itinerario aéreo están sujeto a disponibilidad por parte de la línea aérea.'
        },
        {
            'texto' : 'La línea aérea aplicará multa y un diferencial de clase tarifaria por cualquier remisión que se necesite con una previa autorización por parte de la línea aérea. Los cambios de ruta o nombres por parte del pasajero no están permitidos en las líneas aéreas.'
        },
        {
            'texto' : 'En caso de haber cambio de nombres o cambio de itinerario por solicitud del pasajero, la agencia aplicará aparte un cobro operativo de USD 100 por pasajero.'
        },
        {
            'texto' : 'El peso máximo permitido por pasajero está sujeto a las normativas de cada línea aérea, pudiendo variar de acuerdo a cada compañía.'
        },
        {
            'texto' : 'La regulación tarifaria no permite reserva de asientos. '
        },
        {
            'texto' : 'Al ser reserva grupal, el proceso de check-in solo podrá realizarse por Agencia Omtour 24 horas antes de la salida del vuelo.'
        },
        {
            'texto' : 'Los horarios de check in y check out rigen de acuerdo a las políticas de cada hotel.'
        },
        {
            'texto' : 'Documentos requeridos de viaje: Cedula de Identidad ó Pasaporte vigente y en buen estado y todos aquellos documentos necesarios para salir de Chile y poder ingresar al país de destino. Documentación de viaje es de responsabilidad de cada pasajero. '
        },
        {
            'texto' : 'Es de exclusiva responsabilidad de los pasajeros cumplir con los requisitos obligatorios (visas y vacunas), tanto de salida del país como de ingreso a los países de destino, recomendamos verificar la vigencia de su documento de viaje; Pasaporte o Cédula de Identidad deben contar con mínimo 6 meses a partir de la fecha de viaje. Menores de Edad (18 años) que viajen con sus padres deben presentar libreta de familia. En caso de hacerlo solo o con uno de los padres, debe presentar autorización notarial en triplicado.'
        },
        {
            'texto' : 'Pasajeros menores de 18 años que viajen solos, requieren autorización notarial en triplicado de ambos padres para salir del país. En esta autorización, se debe especificar el destino y en compañía de quien viajará, además debe llevar un Certificado de Nacimiento en original. Pasajeros menores de 18 años que viajen en compañía de uno de sus padres, requieren autorización notarial en triplicado de padre/madre que no lo acompañe y necesariamente deberá llevar la libreta de familia o Certificado de Nacimiento en original.'
        },
        {
            'texto' : 'Agencia de viajes y tour operador turístico Omtour SpA. no se responsabiliza por retraso o cambio de fechas, producto de las condiciones climáticas, negligencia de cualquier otro operador ajeno a la empresa, problemas mecánicos y otros derivados de fuerza mayor o caso fortuito.'
        },
        {
            'texto' : 'Tarifas cotizadas solo serán garantizadas hasta la emisión de los respectivos boletos aéreos, voucher de hoteles u otros servicios. '
        },
        {
            'texto' : 'Agencia de viajes y tour operador turístico Omtour SpA  informa que al vender boletos aéreos lo hace en calidad de mandatario de la línea aerea o intermediario, en consecuencia, los efectos del contrato de transporte celebrado entre el pasajero y la línea aérea o intermediario se radican en el patrimonio de esta última.  Agencia de viajes y tour operador turístico Omtour SpA actúa en calidad de mandatario del cliente para estos efectos.'
        },
    ];
    $scope.terminosDelEste = terminosDelEste;


    /**marruecos */

    let itinerario_Marruecos = [
        {
            'dia' : 'Día 1º SANTIAGO – MADRID:',
            'plan' : 'Nos juntaremos en el Aeropuerto de Santiago para partir a nuestro primer destino; Madrid. '
        },
        {
            'dia' : 'Día 2º MADRID:',
            'plan' : 'Llegada al Aeropuerto Internacional de Barajas-Madrid, traslado y recepción en Hotel. Alojamiento en Madrid '
        },
        {
            'dia' : 'Día 3º MADRID:',
            'plan' : 'Empezaremos con nuestra aventura con una visita panorámica de la ciudad de Madrid con amplio recorrido por las avenidas, plazas y edificios mas importantes de la ciudad y llenos de historia como Gran vía, Cibeles, Puerta de Alcalá, Plaza de España, Plaza de Oriente, entre otros. Durante la tarde habrá tiempo libre para actividades personales que pueden ser organizadas con el apoyo de nuestro Guía coordinador. Alojamiento en Madrid.'
        },
        {
            'dia' : 'Día 4º MADRID – CÁCERES – SEVILLA:',
            'plan' : 'Partiremos con un nuevo recorrido durante el día de 560 km por Extremadura, para llegar a Cáceres, con tiempo libre para caminar por el casco histórico y antiguo desde tiempos medievales, un verdadero Patrimonio de la Humanidad. Almuerzo por cuenta de nuestros viajeros. Posteriormente tomaremos rumbo a la ciudad de Sevilla por la Autovía de la Plata. Alojamiento en Sevilla'
        },
        {
            'dia' : 'Día 5º SEVILLA:',
            'plan' : 'Empezaremos nuestro día de aventura con una visita Panorámica por la ciudad de Sevilla y sus principales puntos turísticos como el Parque de María Luisa, la Plaza de España de Sevilla, el exterior de la imponente Catedral de la ciudad, la Giralda, y el típico Barrio de Santa Cruz. Disfrutaremos de una tarde libre donde podremos organizar actividades opcionales con nuestro Guía Coordinador o simplemente descansar. Alojamiento en Sevilla.'
        },
        {
            'dia' : 'Día 6 SEVILLA – RONDA – MARBELLA:',
            'plan' : 'Partiremos a la increíble ciudad española de Marbella y su hermosa costa, conocida como Costa del Sol. La ruta escogida será la ruta de los pueblos blancos destacada por su increíble arquitectura, llegando a Ronda, un hermoso pueblo Andaluz, donde contaremos con tiempo Libre para recorrer y tomar nuestras fotografías. Luego continuaremos nuestro camino hacia Marbella. Alojamiento en Marbella.'
        },
        {
            'dia' : 'Día 7º MARBELLA:',
            'plan' : 'Nuestros viajeros contaran con el día libre para aprovechar la linda costa que ofrece Marbella y poder descansar. Se pueden coordinar actividades opcionales con nuestro Guía coordinador. 	Alojamiento en Marbella.'
        },
        {
            'dia' : 'Día 8º MARBELLA – TANGER - RABAT MARRUECOS:',
            'plan' : 'Realizaremos nuestro traslado al Puerto de la ciudad, para comenzar una nueva y mágica aventura, el cruce del estrecho de Gibraltar, que une las aguas del Océano Atlántico con el Mediterráneo, y que conecta el continente Europeo con África, la zona norte de Marruecos a través de una ruta por medio de estas ciudades con una distancia de 140 km aprox en tan solo unas horas. Luego tendremos la recogida desde el puerto para comenzar nuestro recorrido por la ciudad de Tanger en Marruecos, haciendo una visita panorámica por uno de los lugares del país árabe con mas influencias de diferentes civilizaciones durante la historia, presentando una gran diversidad cultural. Continuaremos nuestro recorrido por la ciudad de Azul de Chaouen. Por la tarde llegaremos al Hotel en la ciudad de Rabat..'
        },
        {
            'dia' : 'Día 9º RABAT – CASABLANCA – MARRAKECH:',
            'plan' : 'Partiremos con una vista panorámica de Rabat, capital administrativa del Reino de Marruecos, con visitas al Mausoleo de su Majestad Mohamed V, caracterizado por su construcción en Mármol blanco, un paso por la Mezquita y torre de Hassan, con 200 columnas y su principal minarete, hecho de piedra rosa. Luego tomaremos rumbo a Casablanca, para una vista panorámica de la capital económica del país, con su palacio Real y finalizaremos nuestro rumbo hacia Marrakech. '
        },
        {
            'dia' : 'Día 10º MARRAKECH:',
            'plan' : 'Comenzaremos nuestro día con una visita y aventura por una de las ciudades imperiales mas lindas del país. Recorrido por su Media, y su laberinto de clásicas callejuelas, una mezcla de colores con sus murallas rojas a la sombra de su milenario palmeral. Conoceremos su fascinante pasado, un verdadero viaje por la historia, a través de sus monumentos, los jardines de Menara, el minarete de Koutobia, el palacio de la Bahia, las tumbas Saadies, para terminar con una visita por los zocos, uno de los principales mercados de la ciudad. Alojamiento Marrakech.'
        },
        {
            'dia' : 'Día 11º MARRAKERCH – AIT BEN HADDOU – OURZAZATE:',
            'plan' : 'Partiremos temprano nuestra nueva aventura en el país Marroki, a Erfoud, ciudad situada en un oasis del Desierto del Sahara, llegando a uno de los puntos mas altos de la zona (2.260 msnm). Luego visitaremos el fuerte Kasba Ait Ben Haddou, Patrimonio de la Humanidad por la UNESCO, y la Kasbah de Taourirt , los estudios donde se filmaron parte de las películas mas famosas de hace un tiempo, como “El Gladiador”, “La Momia” y “El príncipe de Persia”. Finalizaremos nuestro día con la llegada a  Ourzazate.'
        },
        {
            'dia' : 'Día 12º OURZAZATE – TINERHIR – ERFOUD MERZOUGA:',
            'plan' : 'Comenzaremos nuestro día con rumbo a Boumalen Dades, atravesando la ruta de las mil kasbahs el valle de las Rosas hacia Kella M’gouna,  el  famoso valle conocido  por  su  fabricación artesanal de perfumes y cremas. A continuación seguiremos con la “Ruta de las Kasbahs”, recorrido por una serie de fortalezas construidas en adobe rojo, franqueadas por cuatro torretas. Ademas visitaremos las gargantas de Dades, donde podremos ver famosas formaciones rocosas, para continuar con el recorrido al Palmeral de Tinherir, donde en ruta apreciaremos una increíble catarata, utilizado para un antiguo sistema de irrigación. Finalmente llegaremos a Erfoud para dirigirnos a nuestras “Jaimas”, verdaderos campamentos de lujo, en pleno desierto del Sahara, como una verdadera aventura de tiempos antiguos y tradicionales. Empezaremos con un paseo en Dromedario para ver una de las puestas de sol mas increíbles del mundo, para regresar a nuestras “Jaimas” y tener una cena típica del desierto llamada “Berebere”. Alojamiento en Desierto del Sahara, Merzouga.'
        },
        {
            'dia' : 'Día 13º MERZOUGA – MIDELT AZROU – IFRAN –FEZ:',
            'plan' : 'Desayuno clásico “Berebere” y apreciar el hermoso amanecer en el Desierto, en pleno Sahara, para luego tomar rumbo hacia Midelt, cruzando la garganta de ZIZ y Tizi n’talgham, desde donde disfrutaremos de unas vistas increíbles. Pasaremos por Midelt, la capital del medio Atlas, famosas cadena montañosa de Marruecos, luego realizaremos cruzaremos por Azrou, conocida ciudad rodeada por bosques de cedros, e Ifran, pueblo de montaña conocido por su antigua estación de esquí. Finalmente llegaremos a Fez. '
        },
        {
            'dia' : 'Día 14º FEZ:',
            'plan' : 'Comenzaremos con una visita  histórica  de  la ciudad, incluyendo las puertas monumentales de Bab el Boujloud y del Palacio Real, el barrio judío o “Mellah”, la Medersa Bouanania, el Mausoleo de Moulay Idriss, el mercado de las especias, los curtidores, el zoco y la Fuente Nejarin. Fez es de las recordadas ciudades imperiales, y uno de los símbolos más importantes de Marruecos. Cuenta con calles laberínticas y la Medina de Fez el-Bali (antiguo Fez) siendo uno de los mayores emplazamientos medievales que existen actualmente en el  mundo. Rica tarde libre para disfrutar de un descanso o la ciudad. Alojamiento en Fez.'
        },
        {
            'dia' : 'Día 15º FEZ - -VOLUBILIS – FEZ:',
            'plan' : 'Partiremos nuestra experiencia cultural trasladándonos a Meknes, ricas por su historia y reconocida ciudad santa para los musulmanes. Realizando un paso por los antiguos graneros y establos nacionales, la mezquita Mulay Ismail y las puertas monumentales de Bab Mansour y Bab el khemis, luego continuaremos con la visita de Volubilis, antigua ciudad romana emplazada en Marruecos y finalmente regresar a nuestro hotel.'
        },
        {
            'dia' : 'Día 16º FEZ – TANGER – TORREMOLINOS:',
            'plan' : 'Partiremos a Tanger, y tomar nuestro Ferry de regreso a España, y trasladarnos finalmente a Torremolinos en la provincia de Málaga, donde tendremos nuestra cena de despedida de esta gran experiencia que termina.'
        },
        {
            'dia' : 'Dia 17º TORREMOLINOS – MADRID – SANTIAGO DE CHILE',
            'plan' : 'Desayuno y check out en hotel. Traslado hacia el Aeropuerto de Málaga, para salir con destino a Santiago de Chile, con vuelo de conexión en Madrid, finalizando esta experiencia y dando comienzo a una nueva familia, la familia viajera Omtour..'
        },
    ];
    $scope.itinerario_Marruecos = itinerario_Marruecos;

    let hoteles__Marruecos = [
        {
            'ciudad' : 'Madrid',
            'hotel' : 'Florida  Norte'
        },
        {
            'ciudad' : 'Sevilla',
            'hotel' : 'Silken Al Andalus'
        },
        {
            'ciudad' : 'Marbella',
            'hotel' : 'NH  Marbella'
        },
        {
            'ciudad' : 'Torremolinos',
            'hotel' : 'Melia Torremolinos'
        },
        {
            'ciudad' : 'Marrakech ',
            'hotel' : 'Atlas medina &spa/ o Adam parc'
        },
        {
            'ciudad' : 'Ouarzazate',
            'hotel' : 'Riad Dar Chamaa'
        },
        {
            'ciudad' : 'Merzouga camp',
            'hotel' : 'Jaima'
        },
        {
            'ciudad' : 'Fez',
            'hotel' : 'Hotel Ramada o Riad Arabesque'
        },
    ];
    $scope.hoteles__Marruecos = hoteles__Marruecos;

    let vuelos_Marruecos = [
        {
            'tipo' : 'ida',
            'vuelo' : 'IB 6832',
            'fecha' : '18 DE NOV',
            'origen-destino' : 'Santiago - Madrid',
            'salida' : '00:55',
            'llegada' : '17:45'
        },
        {
            'tipo' : 'regreso',
            'vuelo' : 'IB 8951',
            'fecha' : '4 DE DIC',
            'origen-destino' : 'Malaga - Madrid',
            'salida' : '21:30',
            'llegada' : '22:45'
        },
        {
            'tipo' : 'regreso',
            'vuelo' : 'IB 6833',
            'fecha' : '4 DE DIC',
            'origen-destino' : 'Madrid - Santiago',
            'salida' : '23:45',
            'llegada' : '09:15 (+1)'
        },

    ];
    $scope.vuelos_Marruecos = vuelos_Marruecos;

    let terminosMarruecos = [
        {
            'texto' : 'Valores e itinerarios intermediados por Agencia de viajes y tour operador turístico Omtour SpA. pueden ser modificados sin previo aviso por los proveedores de los respectivos servicios. Las Tarifas podrían sufrir variación de acuerdo a las clases aéreas disponibles al momento de solicitar la reserva y compra. El valor de las tarifas se encuentra sujeto a la disponibilidad de la misma por parte de sus respectivos proveedores al momento de su reserva y pago. Por lo mismo, ciertas tarifas pueden no estar disponibles para determinadas fechas y deberán ser confirmadas al momento de efectuar su reserva y pago. Cualquier modificación puede considerar otros valores, ademas de estar sujetos a posibles variaciones dependiendo el tipo de cambio y/o impuestos.'
        },
        {
            'texto' : 'Cupos y servicios serán confirmados al momento de realizar el pago. Las ofertas, tarifas y servicios turísticos son limitados y se encontrarán vigentes hasta agotar la cantidad que disponga unilateralmente el proveedor respectivo, sin ulterior responsabilidad para Agencia de viajes y tour operador turistico Omtour SpA. '
        },
        {
            'texto' : 'Programa sujeto a multas por concepto de anulación o modificación de servicios en caso que lo permita.'
        },
        {
            'texto' : 'Una vez confirmados y pagados los cupos, estos no tienen derecho a devolución ni a reembolso.'
        },
        {
            'texto' : 'Servicios no utilizados no son reembolsables. '
        },
        {
            'texto' : 'Los cambios de nombres e itinerario aéreo están sujeto a disponibilidad por parte de la línea aérea.'
        },
        {
            'texto' : 'La línea aérea aplicará multa y un diferencial de clase tarifaria por cualquier remisión que se necesite con una previa autorización por parte de la línea aérea. Los cambios de ruta o nombres por parte del pasajero no están permitidos en las líneas aéreas.'
        },
        {
            'texto' : 'En caso de haber cambio de nombres o cambio de itinerario por solicitud del pasajero, la agencia aplicará aparte un cobro operativo de USD 100 por pasajero.'
        },
        {
            'texto' : 'El peso máximo permitido por pasajero está sujeto a las normativas de cada línea aérea, pudiendo variar de acuerdo a cada compañía.'
        },
        {
            'texto' : 'La regulación tarifaria no permite reserva de asientos. '
        },
        {
            'texto' : 'Al ser reserva grupal, el proceso de check-in solo podrá realizarse por Agencia Omtour 24 horas antes de la salida del vuelo.'
        },
        {
            'texto' : 'Los horarios de check in y check out rigen de acuerdo a las políticas de cada hotel.'
        },
        {
            'texto' : 'Documentos requeridos de viaje: Cedula de Identidad ó Pasaporte vigente y en buen estado y todos aquellos documentos necesarios para salir de Chile y poder ingresar al país de destino. Documentación de viaje es de responsabilidad de cada pasajero.  '
        },
        {
            'texto' : '•Es de exclusiva responsabilidad de los pasajeros cumplir con los requisitos obligatorios (visas y vacunas), tanto de salida del país como de ingreso a los países de destino, recomendamos verificar la vigencia de su documento de viaje; Pasaporte o Cédula de Identidad deben contar con mínimo 6 meses a partir de la fecha de viaje. Menores de Edad (18 años) que viajen con sus padres deben presentar libreta de familia. En caso de hacerlo solo o con uno de los padres, debe presentar autorización notarial en triplicado.'
        },
        {
            'texto' : 'Pasajeros menores de 18 años que viajen solos, requieren autorización notarial en triplicado de ambos padres para salir del país. En esta autorización, se debe especificar el destino y en compañía de quien viajará, además debe llevar un Certificado de Nacimiento en original. Pasajeros menores de 18 años que viajen en compañía de uno de sus padres, requieren autorización notarial en triplicado de padre/madre que no lo acompañe y necesariamente deberá llevar la libreta de familia o Certificado de Nacimiento en original.'
        },
        {
            'texto' : 'Agencia de viajes y tour operador turístico Omtour SpA. no se responsabiliza por retraso o cambio de fechas, producto de las condiciones climáticas, negligencia de cualquier otro operador ajeno a la empresa, problemas mecánicos y otros derivados de fuerza mayor o caso fortuito.'
        },
        {
            'texto' : 'Tarifas cotizadas solo serán garantizadas hasta la emisión de los respectivos boletos aéreos, voucher de hoteles u otros servicios. '
        },
        {
            'texto' : 'Agencia de viajes y tour operador turístico Omtour SpA  informa que al vender boletos aéreos lo hace en calidad de mandatario de la línea aerea o intermediario, en consecuencia, los efectos del contrato de transporte celebrado entre el pasajero y la línea aérea o intermediario se radican en el patrimonio de esta última.  Agencia de viajes y tour operador turístico Omtour SpA actúa en calidad de mandatario del cliente para estos efectos.'
        },
    ];
    $scope.terminosMarruecos = terminosMarruecos;
    
})
