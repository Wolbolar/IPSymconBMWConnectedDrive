# IPSymconBMWConnectedDrive

Modul für IP-Symcon ab Version 4. Ermöglicht die Kommunikation mit BMW Connected Drive.

## Dokumentation

**Inhaltsverzeichnis**

1. [Funktionsumfang](#1-funktionsumfang)  
2. [Voraussetzungen](#2-voraussetzungen)  
3. [Installation](#3-installation)  
4. [Funktionsreferenz](#4-funktionsreferenz)
5. [Konfiguration](#5-konfiguartion)  
6. [Anhang](#6-anhang)  

## 1. Funktionsumfang

Mit dem Modul lassen sich Befehle an einen BMW mit BMW Connected Drive schicken und Statusmeldungen über BMW Connected Drive in IP-Symcon (ab Version 4) darstellen. 

### Befehle an BMW Connected Drive senden:  

 - Klimaanlage ein / aus 
 - Türen öffnen /verschließen
 - Lichthupe auslösen
 - Hupe auslösen

### Status Rückmeldung:  

 - Fahrzeugdaten
 - Autobild, einstellbar in Perspektive und Größe
 - Fahrzeugposition in Karte
 - aktueller Breitengard
 - aktueller Längengrad
 - Tankinhalt
 - Tankreichweite
 - Status Veriegelung Türen
 - Kilometerstand
 - Tankinhalt	
 - Tankreichweite
 - Servicemeldungen
 - Verlauf

## 2. Voraussetzungen

 - IPS 4.x
 - ein BMW mit BMW Connected Drive

## 3. Installation

### a. Laden des Moduls


Die IP-Symcon (min Ver. 4.x) Konsole öffnen. Im Objektbaum unter Kerninstanzen die Instanz __*Modules*__ durch einen doppelten Mausklick öffnen.

![Modules](docs/Modules.png?raw=true "Modules")

In der _Modules_ Instanz rechts oben auf den Button __*Hinzufügen*__ drücken.

![Modules](docs/Hinzufuegen.png?raw=true "Hinzufügen")
 
In dem sich öffnenden Fenster folgende URL hinzufügen:

	
    `https://github.com/Wolbolar/IPSymconBMWConnectedDrive`  
    
und mit _OK_ bestätigen.    


### b. Einrichtung in IPS
	
In IP-Symcon nun _Instanz hinzufügen_ (_CTRL+1_) auswählen unter der Kategorie, unter der man die BMW Instanz hinzufügen will, und _BMW_ auswählen.
Im Konfigurationsformular ist der BMW Connected Drive User und das BMW Connected Drive Passwort zu ergänzen. 

### Beispiel Webfrontansicht
![BMW Webfront](docs/bmw_webfront.png?raw=true "BMW Webfront")

## 4. Funktionsreferenz

### BMW:

_**Liest Fahrzeug Status aus**_
          
 ```php
 BMW_GetVehicleStatus(integer $InstanceID);
 ``` 
 Parameter _$InstanceID_ __*ObjektID*__ der BMW Instanz 

_**Klimaanlage starten**_
          
 ```php
 BMW_StartClimateControl(integer $InstanceID);
 ``` 
 Parameter _$InstanceID_ __*ObjektID*__ der BMW Instanz 

_**Türen schließen**_
          
 ```php
 BMW_LockTheDoors(integer $InstanceID);
 ``` 
 Parameter _$InstanceID_ __*ObjektID*__ der BMW Instanz 

_**Lichthupe auslösen**_
          
 ```php
 BMW_FlashHeadlights(integer $InstanceID);
 ``` 
 Parameter _$InstanceID_ __*ObjektID*__ der BMW Instanz 

_**Hupe auslösen**_
          
 ```php
 BMW_Honk(integer $InstanceID);
 ``` 
 Parameter _$InstanceID_ __*ObjektID*__ der BMW Instanz 	


## 5. Konfiguration:

### BMW:

| Eigenschaft | Typ     | Standardwert | Funktion                                  |
| :---------: | :-----: | :----------: | :---------------------------------------: |
| user        | string  |              | BMW User                                  |
| password    | string  |              | BMW      Passwort                         |







## 6. Anhang

###  a. Funktionen:

#### BMW:

`BMW_GetVehicleData(integer $InstanceID)`

Liest Fahrzeugdaten von BMW Connect Drive aus

`BMW_StartClimateControlV1(integer $InstanceID)`

Startet Klimaanlage über BMW Connect Drive

`BMW_LockTheDoorsV1(integer $InstanceID)`

Fahrzeug verrieglen über BMW Connect Drive

`BMW_UnlockTheDoorsV1(integer $InstanceID)`

Fahrzeug entrieglen über BMW Connect Drive

`BMW_FlashHeadlightsV1(integer $InstanceID)`

Lichthupe am Fahrzeug auslösen über BMW Connect Drive

`BMW_Honk(integer $InstanceID)`

Hupe am Fahrzeug auslösen über BMW Connect Drive

`BMW_GetCarPictureForAngle(integer $InstanceID, integer $angle)`

Bild vom Fahrzeug für den Winkel _$angle_ abrufen über BMW Connect Drive


###  b. GUIDs und Datenaustausch:

#### BMW:

GUID: `{8FD2A163-E07A-A2A2-58CC-974155FAEE33}` 

### c. Quellen

[BMW-i-Remote](https://github.com/edent/BMW-i-Remote "BMW-i-Remote") _edent_ (MIT)







