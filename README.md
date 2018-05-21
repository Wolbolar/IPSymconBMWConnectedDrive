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
Im Konfigurationsformular ist der _BMW Connected Drive User_,  das _BMW Connected Drive Passwort_ そowie die _VIN_ (Fahrgestellnummer) zu ergänzen und das Modell einzustellen.

### Beispiel Webfrontansicht
![BMW Webfront](docs/bmw_webfront.png?raw=true "BMW Webfront")

## 4. Funktionsreferenz

`BMW_GetVehicleData(integer $InstanceID)`

Liest Fahrzeugdaten von BMW Connect Drive aus

`BMW_StartClimateControl(integer $InstanceID)`

Startet Klimaanlage über BMW Connect Drive

`BMW_LockTheDoors(integer $InstanceID)`

Fahrzeug verrieglen über BMW Connect Drive

`BMW_UnlockTheDoors(integer $InstanceID)`

Fahrzeug entrieglen über BMW Connect Drive

`BMW_FlashHeadlights(integer $InstanceID)`

Lichthupe am Fahrzeug auslösen über BMW Connect Drive

`BMW_Honk(integer $InstanceID)`

Hupe am Fahrzeug auslösen über BMW Connect Drive

`BMW_GetCarPictureForAngle(integer $InstanceID, integer $angle)`

Bild vom Fahrzeug für den Winkel _$angle_ abrufen über BMW Connect Drive

`BMW_SetUpdateIntervall(integer $InstanceID, int $Minutes)`

Update-Intervall setzen. Ist der Wert von _Minutes_ gleich 0, wird der konfigurierte Wert verwendet.

`BMW_GetRawData(integer $InstanceID, string $Name)`

Liefert die Daten, die mit den entsprecheden HTTP-Aufrufen gewonnen werden. Sind die gleichen Daten, die früher in den gleichnamigen Variablen abgelegt wurden.

| Name                          | Interface          |
| :---------------------------: | :----------------: |
| bmw_dynamic_interface         | Dynamic            |
| bmw_navigation_interface      | Navigation         |
| bmw_efficiency_interface      | Efficiency         |
| bmw_image_interface           | Image              |
| bmw_mapupdate_interface       | Map Update         |
| bmw_history_interface         | History            |
| bmw_car_interface             | Car                |
| bmw_store_interface           | Store              |
| bmw_specs_interface           | Specs              |
| bmw_service_interface         | Service            |
| bmw_service_partner_interface | Service Partner    |
| bmw_remote_services_interface | Remote Services    |
| bmw_chargingprofile_interface | Chargingprofile    |

## 5. Konfiguration:

### Variablen

| Eigenschaft              | Typ     | Standardwert | Funktion                                  |
| :-----­-----------------: | :-----: | :----------: | :---------------------------------------: |
| user                     | string  |              | Benutzerkennung                           |
| password                 | string  |              | Passwort                                  |
| vin                      | string  |              | Fahrgestellnummer                         |
| bmw_server               | integer | 1            | zu verwendender BMW-Server                |
| model                    | integer | 1            | Modell (Elektisch, Hybrid, Standard)      |
|                          |         |              |                                           |
| active_climate           | boolean | false        | mit Klimatisierung                        |
| active_lock              | boolean | false        | mit Türverschluss                         |
| active_lock_2actions     | boolean | false        | mit Türverschluss (getrennte Aktionen)    |
| active_flash_headlights  | boolean | false        | mit Lichthupe                             |
| active_vehicle_finder    | boolean | false        | mit Fahrzeugsuche (nicht funktionsfähig)  |
| active_lock_data         | boolean | false        | mit Verschluss-Status                     |
| active_honk              | boolean | false        | mit Hupe                                  |
| active_picture           | boolean | true         | mit Anzeige einse Bildes des Fahrzeuge    |
| active_googlemap         | boolean | false        | mit Anzeige der Karte                     |
| horizontal_mapsize       | integer | 600          |  ... horizontale Größe                    |
| vertical_mapsize         | integer | 400          |  ... vertikale Größe                      |
| active_service           | boolean | false        | mit Angaben zum Service                   |
| active_current_position  | boolean | false        | mit Angaben der aktuellen Position        |
|                          |         |              |                                           |
| UpdateInterval           | integer | 10           | Update-Intervall (in Minuten)             |

## 6. Anhang

### a. GUIDs und Datenaustausch:

GUID: `{8FD2A163-E07A-A2A2-58CC-974155FAEE33}` 

### b. Quellen

[BMW-i-Remote](https://github.com/edent/BMW-i-Remote "BMW-i-Remote") _edent_ (MIT)
