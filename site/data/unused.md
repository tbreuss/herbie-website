-
  name: disqus
  code: string disqus(string shortname)
  desc: Bindet Diskussionen des Webservice Disqus ein.
  params:
    shortname: [string, 'Der Disqus Shortname']
  return: [string, 'Der JavaScript-Einbettungscode von Disqus']
-
  name: googleMaps
  code: string googleMaps([id = 'gmap'][, width = 600][, height = 450][, type = 'roadmap'][, class = 'gmap'][, zoom = 15][, address = ''])
  desc: Bindet eine Google Map via JavaScript ein inklusive eines statischen Bildes als Fallback.
  params:
    id: [string, 'Das HTML-Attribut ID']
    width: ['int', 'Die Breite der Karte (auch für statisches Bild)']
    height: ['int', 'Die Höhe der Karte (auch für statisches Bild)']
    type: ['string', 'Der Kartentyp: hybrid, roadmap, satellite, terrain']
    class: ['string', 'Das HTML-Attribut Klasse']
    zoom: ['int', 'Der Zoomfaktor']
    address: ['string', 'Die Adresse, die geocodiert und angezeigt werden soll']
  return: [string, 'Der Google Maps Einbettungscode']
  -
  name: vimeo
  code: string vimeo(string id [, int width = 480][, int height = 320][, int responsive = 1])
  desc: Bettet ein Vimeo-Video ein, das sich automatisch der Grösse des Displays des Benutzers anpasst.
  params:
    id: [string, 'Die ID des Videos.']
    width: [int, 'Die Breite des Videos in Pixel (default=480)']
    height: [int, 'Die Höhe des Videos in Pixel (default=320)']
    responsive: [bool, 'Definiert ob das Video anpassbar ist oder nicht (default=1)']
  return: [string, 'Der Einbettungscode des Videos.']
-
  name: youTube
  code: string youTube(string id [, int width = 480][, int height = 320][, int responsive = 1])
  desc: Bettet ein YouTube-Video ein, das sich automatisch der Grösse des Displays des Benutzers anpasst.
  params:
    id: [string, 'Die ID des Videos.']
    width: [int, 'Die Breite des Videos in Pixel (default=480)']
    height: [int, 'Die Höhe des Videos in Pixel (default=320)']
    responsive: [bool, 'Definiert ob das Video anpassbar ist oder nicht (default=1)']
  return: [string, 'Der Einbettungscode des Videos.']
-
  name: code
  code: '{% code language %} {% endcode %}'
  desc: Hebt die Syntax einer bestimmten Programmiersprache hervor. Das Tag ist ein Wrapper für den hervorragenden Syntax-Highlighter GeSHi.
  params:
    language: [string, 'Die gewünschte Programmiersprache']
  return: [string, 'Der Code mit hervorgehobener Syntax']
