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
 - 

### Status Rückmeldung:  

 - Fahrzeugdaten
	
  

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


## 4. Funktionsreferenz

### BMW:

Text.
	


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


###  b. GUIDs und Datenaustausch:

#### BMW:

GUID: `{8FD2A163-E07A-A2A2-58CC-974155FAEE33}` 




