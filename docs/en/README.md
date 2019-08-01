# IPSymconBMWConnectedDrive
[![Version](https://img.shields.io/badge/Symcon-PHPModule-red.svg)](https://www.symcon.de/service/dokumentation/entwicklerbereich/sdk-tools/sdk-php/)
[![Version](https://img.shields.io/badge/Symcon%20Version-%3E%205.1-green.svg)](https://www.symcon.de/en/service/documentation/installation/)
![Code](https://img.shields.io/badge/Code-PHP-blue.svg)
[![StyleCI](https://github.styleci.io/repos/118332358/shield?branch=master)](https://github.styleci.io/repos/118332358)

Module for IP Symcon Version 4 or higher. Enables communication with BMW Connected Drive.

## Documentation

**Table of Contents**

1. [Features](#1-features)
2. [Requirements](#2-requirements)
3. [Installation](#3-installation)
4. [Function reference](#4-functionreference)
5. [Configuration](#5-configuration)
6. [Annex](#6-annex)
7. [Version-History](#7-version-history)

## 1. Features

The module can be used to send commands to a BMW with BMW Connected Drive and display status messages via BMW Connected Drive in IP-Symcon (version 4 or higher).

### Send commands to BMW Connected Drive:

- Air conditioning on / off
- open / close doors
- Trigger flasher
- trigger the horn

### Status feedback:

- Vehicle data
- picture of the car, adjustable in perspective and size
- Vehicle position in map
- current latitude
- current longitude
- tank fill level
- range
- Status locking doors
- Mileage
- Service messages
- Course

## 2. Requirements

 - IPS 4.x
 - BMW with BMW Connected Drive

## 3. Installation

### a. Loading the module

Open the IP Console's web console with _http://<IP-Symcon IP>:3777/console/_.

Then click on the module store icon in the upper right corner.

![Store](img/store_icon.png?raw=true "open store")

In the search field type

```
BMW Connected Drive
```  


![Store](img/module_store_search_en.png?raw=true "module search")

Then select the module and click _Install_

![Store](img/install_en.png?raw=true "install")


#### Install alternative via Modules instance

_Open_ the object tree.

![Objektbaum](img/object_tree.png?raw=true "object tree")	

Open the instance _'Modules'_ below core instances in the object tree of IP-Symcon (>= Ver 5.x) with a double-click and press the _Plus_ button.

![Modules](img/modules.png?raw=true "modules")	

![Plus](img/plus.png?raw=true "Plus")	

![ModulURL](img/add_module.png?raw=true "Add Module")
 
Enter the following URL in the field and confirm with _OK_:


```	
https://github.com/Wolbolar/IPSymconBMWConnectedDrive
```
    
and confirm with _OK_.    
    
Then an entry for the module appears in the list of the instance _Modules_

By default, the branch _master_ is loaded, which contains current changes and adjustments.
Only the _master_ branch is kept current.

![Master](img/master.png?raw=true "master") 

If an older version of IP-Symcon smaller than version 5.1 (min 4.3) is used, click on the gear on the right side of the list.
It opens another window,

![SelectBranch](img/select_branch_en.png?raw=true "select branch") 

here you can switch to another branch, for older versions smaller than 5.1 (min 4.3) select _Old-Version_ .

### b.  Setup in IP-Symcon

In IP-Symcon _add Instance_ (_rightclick -> add object -> instance_) under the category under which you want to add the BMW instance,
and _BMW_.
In the configuration form, the _BMW Connected Drive User_, the _BMW Connected Drive Password_ and the _VIN_ (VIN) must be added and the model must be set.

## 4. Function reference

`BMW_GetVehicleData(integer $InstanceID)`

Reads vehicle data from BMW Connecteddrive

`BMW_StartClimateControl(integer $InstanceID)`

Starts air conditioning via BMW Connecteddrive

`BMW_LockTheDoors(integer $InstanceID)`

Lock vehicle via BMW Connecteddrive

`BMW_UnlockTheDoors(integer $InstanceID)`

Unlock vehicle via BMW Connecteddrive

`BMW_FlashHeadlights(integer $InstanceID)`

Trigger flashers on the vehicle via BMW Connecteddrive

`BMW_Honk(integer $InstanceID)`

Trigger the horn on the vehicle via BMW Connecteddrive

`BMW_GetCarPictureForAngle(integer $InstanceID, integer $angle)`

Picture of the vehicle for the angle _$angle_ retrieve via BMW Connect Drive

`BMW_SetUpdateIntervall(integer $InstanceID, int $Minutes)`

Set update interval. If the value of _Minutes_ equals 0, the configured value is used.

`BMW_GetRawData(integer $InstanceID, string $Name)`

Returns the data obtained with the corresponding HTTP calls. Are the same data that used to be stored in the variables of the same name.

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

## 5. Configuration:

### Variablen

| Property                 | Type    | Value        | Function                                  |
| :----------------------: | :-----: | :----------: | :---------------------------------------: |
| user                     | string  |              | User identification                       |
| password                 | string  |              | Password                                  |
| vin                      | string  |              | VIN                                       |
| bmw_server               | integer | 1            | BMW server                                |
| model                    | integer | 1            | Model (Electric, Hybrid, Standard)        |
|                          |         |              |                                           |
| active_climate           | boolean | false        | with air conditioning                     |
| active_lock              | boolean | false        | with door lock                            |
| active_lock_2actions     | boolean | false        | with door lock (separate actions)         |
| active_flash_headlights  | boolean | false        | with flasher                              |
| active_vehicle_finder    | boolean | false        | with vehicle search (not working)         |
| active_lock_data         | boolean | false        | with lock status                          |
| active_honk              | boolean | false        | with horn                                 |
| active_picture           | boolean | true         | with display of an image of the vehicle   |
| active_googlemap         | boolean | false        | with display of the map                   |
| googlemap_api_key        | string  |              | GoogleMaps API key                        |
| horizontal_mapsize       | integer | 600          |  ... horizontal size                      |
| vertical_mapsize         | integer | 400          |  ... vertical size                        |
| active_service           | boolean | false        | with information about the service        |
| active_current_position  | boolean | false        | with details of the current position      |
|                          |         |              |                                           |
| UpdateInterval           | integer | 10           | Update interval (in minutes)              |


## 6. Annex

###  a. GUIDs and data exchange:

#### BMW:

GUID: `{8FD2A163-E07A-A2A2-58CC-974155FAEE33}` 

### b. Sources

[BMW-i-Remote](https://github.com/edent/BMW-i-Remote "BMW-i-Remote") _edent_ (MIT)

## 7. Version History

- 1.7 @ 10.06.2019 11:48<br>
  - Typing error fixed

- 1.6 @ 10.02.2019 11:09<br>
  - Securing the data retrieval from GetRemoteServices()

- 1.5 @ 21.01.2019 18:13<br>
  - Fix to 1.4

- 1.4 @ 18.01.2019 18:20<br>
  - Security queries on empty structures, more debug

- 1.3 @ 04.01.2019 14:50<br>
  - for electric / hybrid: take over the information on the last journey, overall travel and efficiency

- 1.2 @ 13.10.2018 17:58<br>
  - Conversion of internal storage to avoid the warning _Buffer> 8kb_.

- 1.1 @ 04.09.2018 09:36<br>
  - use of soc / socMax (loading capacity) for e-models
  - Specifying the Google Maps API key (required since 06/2018)
  - Version history

- 1.0 @ 05.04.2017<br>
  Initial version

