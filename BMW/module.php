<?php

if (@constant('IPS_BASE') == null) { //Nur wenn Konstanten noch nicht bekannt sind.
// --- BASE MESSAGE
    define('IPS_BASE', 10000);                             //Base Message
    define('IPS_KERNELSHUTDOWN', IPS_BASE + 1);            //Pre Shutdown Message, Runlevel UNINIT Follows
    define('IPS_KERNELSTARTED', IPS_BASE + 2);             //Post Ready Message
// --- KERNEL
    define('IPS_KERNELMESSAGE', IPS_BASE + 100);           //Kernel Message
    define('KR_CREATE', IPS_KERNELMESSAGE + 1);            //Kernel is beeing created
    define('KR_INIT', IPS_KERNELMESSAGE + 2);              //Kernel Components are beeing initialised, Modules loaded, Settings read
    define('KR_READY', IPS_KERNELMESSAGE + 3);             //Kernel is ready and running
    define('KR_UNINIT', IPS_KERNELMESSAGE + 4);            //Got Shutdown Message, unloading all stuff
    define('KR_SHUTDOWN', IPS_KERNELMESSAGE + 5);          //Uninit Complete, Destroying Kernel Inteface
// --- KERNEL LOGMESSAGE
    define('IPS_LOGMESSAGE', IPS_BASE + 200);              //Logmessage Message
    define('KL_MESSAGE', IPS_LOGMESSAGE + 1);              //Normal Message                      | FG: Black | BG: White  | STLYE : NONE
    define('KL_SUCCESS', IPS_LOGMESSAGE + 2);              //Success Message                     | FG: Black | BG: Green  | STYLE : NONE
    define('KL_NOTIFY', IPS_LOGMESSAGE + 3);               //Notiy about Changes                 | FG: Black | BG: Blue   | STLYE : NONE
    define('KL_WARNING', IPS_LOGMESSAGE + 4);              //Warnings                            | FG: Black | BG: Yellow | STLYE : NONE
    define('KL_ERROR', IPS_LOGMESSAGE + 5);                //Error Message                       | FG: Black | BG: Red    | STLYE : BOLD
    define('KL_DEBUG', IPS_LOGMESSAGE + 6);                //Debug Informations + Script Results | FG: Grey  | BG: White  | STLYE : NONE
    define('KL_CUSTOM', IPS_LOGMESSAGE + 7);               //User Message                        | FG: Black | BG: White  | STLYE : NONE
// --- MODULE LOADER
    define('IPS_MODULEMESSAGE', IPS_BASE + 300);           //ModuleLoader Message
    define('ML_LOAD', IPS_MODULEMESSAGE + 1);              //Module loaded
    define('ML_UNLOAD', IPS_MODULEMESSAGE + 2);            //Module unloaded
// --- OBJECT MANAGER
    define('IPS_OBJECTMESSAGE', IPS_BASE + 400);
    define('OM_REGISTER', IPS_OBJECTMESSAGE + 1);          //Object was registered
    define('OM_UNREGISTER', IPS_OBJECTMESSAGE + 2);        //Object was unregistered
    define('OM_CHANGEPARENT', IPS_OBJECTMESSAGE + 3);      //Parent was Changed
    define('OM_CHANGENAME', IPS_OBJECTMESSAGE + 4);        //Name was Changed
    define('OM_CHANGEINFO', IPS_OBJECTMESSAGE + 5);        //Info was Changed
    define('OM_CHANGETYPE', IPS_OBJECTMESSAGE + 6);        //Type was Changed
    define('OM_CHANGESUMMARY', IPS_OBJECTMESSAGE + 7);     //Summary was Changed
    define('OM_CHANGEPOSITION', IPS_OBJECTMESSAGE + 8);    //Position was Changed
    define('OM_CHANGEREADONLY', IPS_OBJECTMESSAGE + 9);    //ReadOnly was Changed
    define('OM_CHANGEHIDDEN', IPS_OBJECTMESSAGE + 10);     //Hidden was Changed
    define('OM_CHANGEICON', IPS_OBJECTMESSAGE + 11);       //Icon was Changed
    define('OM_CHILDADDED', IPS_OBJECTMESSAGE + 12);       //Child for Object was added
    define('OM_CHILDREMOVED', IPS_OBJECTMESSAGE + 13);     //Child for Object was removed
    define('OM_CHANGEIDENT', IPS_OBJECTMESSAGE + 14);      //Ident was Changed
    define('OM_CHANGEDISABLED', IPS_OBJECTMESSAGE + 15);   //Operability has changed
// --- INSTANCE MANAGER
    define('IPS_INSTANCEMESSAGE', IPS_BASE + 500);         //Instance Manager Message
    define('IM_CREATE', IPS_INSTANCEMESSAGE + 1);          //Instance created
    define('IM_DELETE', IPS_INSTANCEMESSAGE + 2);          //Instance deleted
    define('IM_CONNECT', IPS_INSTANCEMESSAGE + 3);         //Instance connectged
    define('IM_DISCONNECT', IPS_INSTANCEMESSAGE + 4);      //Instance disconncted
    define('IM_CHANGESTATUS', IPS_INSTANCEMESSAGE + 5);    //Status was Changed
    define('IM_CHANGESETTINGS', IPS_INSTANCEMESSAGE + 6);  //Settings were Changed
    define('IM_CHANGESEARCH', IPS_INSTANCEMESSAGE + 7);    //Searching was started/stopped
    define('IM_SEARCHUPDATE', IPS_INSTANCEMESSAGE + 8);    //Searching found new results
    define('IM_SEARCHPROGRESS', IPS_INSTANCEMESSAGE + 9);  //Searching progress in %
    define('IM_SEARCHCOMPLETE', IPS_INSTANCEMESSAGE + 10); //Searching is complete
// --- VARIABLE MANAGER
    define('IPS_VARIABLEMESSAGE', IPS_BASE + 600);              //Variable Manager Message
    define('VM_CREATE', IPS_VARIABLEMESSAGE + 1);               //Variable Created
    define('VM_DELETE', IPS_VARIABLEMESSAGE + 2);               //Variable Deleted
    define('VM_UPDATE', IPS_VARIABLEMESSAGE + 3);               //On Variable Update
    define('VM_CHANGEPROFILENAME', IPS_VARIABLEMESSAGE + 4);    //On Profile Name Change
    define('VM_CHANGEPROFILEACTION', IPS_VARIABLEMESSAGE + 5);  //On Profile Action Change
// --- SCRIPT MANAGER
    define('IPS_SCRIPTMESSAGE', IPS_BASE + 700);           //Script Manager Message
    define('SM_CREATE', IPS_SCRIPTMESSAGE + 1);            //On Script Create
    define('SM_DELETE', IPS_SCRIPTMESSAGE + 2);            //On Script Delete
    define('SM_CHANGEFILE', IPS_SCRIPTMESSAGE + 3);        //On Script File changed
    define('SM_BROKEN', IPS_SCRIPTMESSAGE + 4);            //Script Broken Status changed
// --- EVENT MANAGER
    define('IPS_EVENTMESSAGE', IPS_BASE + 800);             //Event Scripter Message
    define('EM_CREATE', IPS_EVENTMESSAGE + 1);             //On Event Create
    define('EM_DELETE', IPS_EVENTMESSAGE + 2);             //On Event Delete
    define('EM_UPDATE', IPS_EVENTMESSAGE + 3);
    define('EM_CHANGEACTIVE', IPS_EVENTMESSAGE + 4);
    define('EM_CHANGELIMIT', IPS_EVENTMESSAGE + 5);
    define('EM_CHANGESCRIPT', IPS_EVENTMESSAGE + 6);
    define('EM_CHANGETRIGGER', IPS_EVENTMESSAGE + 7);
    define('EM_CHANGETRIGGERVALUE', IPS_EVENTMESSAGE + 8);
    define('EM_CHANGETRIGGEREXECUTION', IPS_EVENTMESSAGE + 9);
    define('EM_CHANGECYCLIC', IPS_EVENTMESSAGE + 10);
    define('EM_CHANGECYCLICDATEFROM', IPS_EVENTMESSAGE + 11);
    define('EM_CHANGECYCLICDATETO', IPS_EVENTMESSAGE + 12);
    define('EM_CHANGECYCLICTIMEFROM', IPS_EVENTMESSAGE + 13);
    define('EM_CHANGECYCLICTIMETO', IPS_EVENTMESSAGE + 14);
    // --- MEDIA MANAGER
    define('IPS_MEDIAMESSAGE', IPS_BASE + 900);           //Media Manager Message
    define('MM_CREATE', IPS_MEDIAMESSAGE + 1);             //On Media Create
    define('MM_DELETE', IPS_MEDIAMESSAGE + 2);             //On Media Delete
    define('MM_CHANGEFILE', IPS_MEDIAMESSAGE + 3);         //On Media File changed
    define('MM_AVAILABLE', IPS_MEDIAMESSAGE + 4);          //Media Available Status changed
    define('MM_UPDATE', IPS_MEDIAMESSAGE + 5);
    // --- LINK MANAGER
    define('IPS_LINKMESSAGE', IPS_BASE + 1000);           //Link Manager Message
    define('LM_CREATE', IPS_LINKMESSAGE + 1);             //On Link Create
    define('LM_DELETE', IPS_LINKMESSAGE + 2);             //On Link Delete
    define('LM_CHANGETARGET', IPS_LINKMESSAGE + 3);       //On Link TargetID change
// --- DATA HANDLER
    define('IPS_DATAMESSAGE', IPS_BASE + 1100);             //Data Handler Message
    define('FM_CONNECT', IPS_DATAMESSAGE + 1);             //On Instance Connect
    define('FM_DISCONNECT', IPS_DATAMESSAGE + 2);          //On Instance Disconnect
// --- SCRIPT ENGINE
    define('IPS_ENGINEMESSAGE', IPS_BASE + 1200);           //Script Engine Message
    define('SE_UPDATE', IPS_ENGINEMESSAGE + 1);             //On Library Refresh
    define('SE_EXECUTE', IPS_ENGINEMESSAGE + 2);            //On Script Finished execution
    define('SE_RUNNING', IPS_ENGINEMESSAGE + 3);            //On Script Started execution
// --- PROFILE POOL
    define('IPS_PROFILEMESSAGE', IPS_BASE + 1300);
    define('PM_CREATE', IPS_PROFILEMESSAGE + 1);
    define('PM_DELETE', IPS_PROFILEMESSAGE + 2);
    define('PM_CHANGETEXT', IPS_PROFILEMESSAGE + 3);
    define('PM_CHANGEVALUES', IPS_PROFILEMESSAGE + 4);
    define('PM_CHANGEDIGITS', IPS_PROFILEMESSAGE + 5);
    define('PM_CHANGEICON', IPS_PROFILEMESSAGE + 6);
    define('PM_ASSOCIATIONADDED', IPS_PROFILEMESSAGE + 7);
    define('PM_ASSOCIATIONREMOVED', IPS_PROFILEMESSAGE + 8);
    define('PM_ASSOCIATIONCHANGED', IPS_PROFILEMESSAGE + 9);
    // --- TIMER POOL
    define('IPS_TIMERMESSAGE', IPS_BASE + 1400);            //Timer Pool Message
    define('TM_REGISTER', IPS_TIMERMESSAGE + 1);
    define('TM_UNREGISTER', IPS_TIMERMESSAGE + 2);
    define('TM_SETINTERVAL', IPS_TIMERMESSAGE + 3);
    define('TM_UPDATE', IPS_TIMERMESSAGE + 4);
    define('TM_RUNNING', IPS_TIMERMESSAGE + 5);
    // --- STATUS CODES
    define('IS_SBASE', 100);
    define('IS_CREATING', IS_SBASE + 1); //module is being created
    define('IS_ACTIVE', IS_SBASE + 2); //module created and running
    define('IS_DELETING', IS_SBASE + 3); //module us being deleted
    define('IS_INACTIVE', IS_SBASE + 4); //module is not beeing used
// --- ERROR CODES
    define('IS_EBASE', 200);          //default errorcode
    define('IS_NOTCREATED', IS_EBASE + 1); //instance could not be created
// --- Search Handling
    define('FOUND_UNKNOWN', 0);     //Undefined value
    define('FOUND_NEW', 1);         //Device is new and not configured yet
    define('FOUND_OLD', 2);         //Device is already configues (InstanceID should be set)
    define('FOUND_CURRENT', 3);     //Device is already configues (InstanceID is from the current/searching Instance)
    define('FOUND_UNSUPPORTED', 4); //Device is not supported by Module
    define('vtBoolean', 0);
    define('vtInteger', 1);
    define('vtFloat', 2);
    define('vtString', 3);
    define('vtArray', 8);
    define('vtObject', 9);
}

// module for BMW

// Model
if (!defined('BMW_MODEL_ELECTRIC')) {
    define('BMW_MODEL_ELECTRIC', 1);
}
if (!defined('BMW_MODEL_HYBRID')) {
    define('BMW_MODEL_HYBRID', 2);
}
if (!defined('BMW_MODEL_STANDARD')) {
    define('BMW_MODEL_STANDARD', 3);
}

// chargingConnector
if (!defined('BMW_CONNECTOR_UNKNOWN')) {
    define('BMW_CONNECTOR_UNKNOWN', -1);
}
if (!defined('BMW_CONNECTOR_DISCONNECTED')) {
    define('BMW_CONNECTOR_DISCONNECTED', 0);
}
if (!defined('BMW_CONNECTOR_CONNECTED')) {
    define('BMW_CONNECTOR_CONNECTED', 1);
}

// chargingStatus
if (!defined('BMW_CHARGING_UNKNOWN')) {
    define('BMW_CHARGING_UNKNOWN', -1);
}
if (!defined('BMW_CHARGING_NO')) {
    define('BMW_CHARGING_NO', 0);
}
if (!defined('BMW_CHARGING_ACTIVE')) {
    define('BMW_CHARGING_ACTIVE', 1);
}
if (!defined('BMW_CHARGING_ENDED')) {
    define('BMW_CHARGING_ENDED', 2);
}

// GoogleMap
if (!defined('BMW_GOOGLEMAP_ROADMAP')) {
    define('BMW_GOOGLEMAP_ROADMAP', 0);
}
if (!defined('BMW_GOOGLEMAP_SATELLITE')) {
    define('BMW_GOOGLEMAP_SATELLITE', 1);
}
if (!defined('BMW_GOOGLEMAP_HYBRID')) {
    define('BMW_GOOGLEMAP_HYBRID', 2);
}
if (!defined('BMW_GOOGLEMAP_TERRAIN')) {
    define('BMW_GOOGLEMAP_TERRAIN', 3);
}

// Area
if (!defined('BMW_AREA_GERMANY')) {
    define('BMW_AREA_GERMANY', 1);
}
if (!defined('BMW_AREA_SWITZERLAND')) {
    define('BMW_AREA_SWITZERLAND', 2);
}
if (!defined('BMW_AREA_EUROPE')) {
    define('BMW_AREA_EUROPE', 3);
}
if (!defined('BMW_AREA_USA')) {
    define('BMW_AREA_USA', 4);
}
if (!defined('BMW_AREA_CHINA')) {
    define('BMW_AREA_CHINA', 5);
}
if (!defined('BMW_AREA_OTHER')) {
    define('BMW_AREA_OTHER', 6);
}

class BMWConnectedDrive extends IPSModule
{
    public function Create()
    {
        //Never delete this line!
        parent::Create();

        //These lines are parsed on Symcon Startup or Instance creation
        //You cannot use variables here. Just static values.

        $this->RegisterPropertyString('user', '');
        $this->RegisterPropertyString('password', '');
        $this->RegisterPropertyString('app_id', 'dbf0a542-ebd1-4ff0-a9a7-55172fbfce35');
        $this->RegisterPropertyString('vin', '');
        $this->RegisterPropertyInteger('bmw_server', 1);
        $this->RegisterPropertyInteger('model', 1);
        $this->RegisterPropertyBoolean('active_climate', false);
        $this->RegisterPropertyBoolean('active_lock', false);
        $this->RegisterPropertyBoolean('active_lock_2actions', false);
        $this->RegisterPropertyBoolean('active_flash_headlights', false);
        $this->RegisterPropertyBoolean('active_vehicle_finder', false);
        $this->RegisterPropertyBoolean('active_lock_data', false);
        $this->RegisterPropertyBoolean('active_honk', false);
        $this->RegisterPropertyBoolean('active_picture', true);
        $this->RegisterPropertyBoolean('active_googlemap', false);
        $this->RegisterPropertyInteger('horizontal_mapsize', 600);
        $this->RegisterPropertyInteger('vertical_mapsize', 400);
        $this->RegisterPropertyBoolean('active_service', false);
        $this->RegisterPropertyBoolean('active_current_position', false);
        $this->RegisterPropertyInteger('UpdateInterval', 10);

        $this->RegisterTimer('BMWDataUpdate', 0, 'BMW_DataUpdate(' . $this->InstanceID . ');');
    }

    public function ApplyChanges()
    {
        //Never delete this line!
        parent::ApplyChanges();

		$associations = [];
        $associations[] = [0, 'Start', '', 0x3ADF00];
        $this->RegisterProfileAssociation('BMW.Start', 'Execute', '', '', 0, 0, 0, 0, 1, $associations);

		$associations = [];
		$associations[] = [0, $this->Translate('roadmap'), '', 0x3ADF00];
		$associations[] = [BMW_GOOGLEMAP_SATELLITE, $this->Translate('satellite'), '', 0x3ADF00];
		$associations[] = [BMW_GOOGLEMAP_HYBRID, $this->Translate('hybrid'), '', 0x3ADF00];
		$associations[] = [BMW_GOOGLEMAP_TERRAIN, $this->Translate('terrain'), '', 0x3ADF00];
		$this->RegisterProfileAssociation('BMW.Googlemap', 'Car', '', '', 0, 3, 0, 0, 1, $associations);

		$associations = [];
		$associations[] = [BMW_CONNECTOR_UNKNOWN, $this->Translate('unknown'), '', 0xEE0000];
		$associations[] = [BMW_CONNECTOR_DISCONNECTED, $this->Translate('disconnected'), '', -1];
		$associations[] = [BMW_CONNECTOR_CONNECTED, $this->Translate('connected'), '', 0x228B22];
		$this->RegisterProfileAssociation('BMW.ConnectorStatus', '', '', '', 0, 0, 0, 0, 1, $associations);

		$associations = [];
		$associations[] = [BMW_CHARGING_UNKNOWN, $this->Translate('unknown'), '', 0xEE0000];
		$associations[] = [BMW_CHARGING_NO, $this->Translate('no charging'), '', -1];
		$associations[] = [BMW_CHARGING_ACTIVE, $this->Translate('charging active'), '', 0x228B22];
		$associations[] = [BMW_CHARGING_ENDED, $this->Translate('charging ended'), '', 0x0000FF];
		$this->RegisterProfileAssociation('BMW.ChargingStatus', '', '', '', 0, 0, 0, 0, 1, $associations);

        $this->RegisterProfile('BMW.Mileage', 'Distance', '', ' ' . $this->GetMileageUnit(), 0, 0, 0, 0, 1);
        $this->RegisterVariableInteger('bmw_mileage', $this->Translate('mileage'), 'BMW.Mileage', 4);
        $this->RegisterProfile('BMW.TankCapacity', 'Gauge', '', ' Liter', 0, 0, 0, 0, 2);
        $this->RegisterVariableFloat('bmw_tank_capacity', $this->Translate('tank capacity'), 'BMW.TankCapacity', 5);
        $this->RegisterProfile('BMW.RemainingRange', 'Gauge', '', ' km', 0, 0, 0, 0, 2);
        $this->RegisterVariableFloat('bmw_remaining_range', $this->Translate('remaining range'), 'BMW.RemainingRange', 6);

        $model = $this->ReadPropertyInteger('model');
        if ($model != BMW_MODEL_STANDARD) { // standard, no electric
            $this->RegisterVariableFloat('bmw_remaining_electric_range', $this->Translate('remaining electric range'), 'BMW.RemainingRange', 6);
            $this->RegisterProfile('BMW.ChargingLevel', '', '', ' %', 0, 0, 0, 0, 2);
            $this->RegisterVariableFloat('bmw_charging_level', $this->Translate('charging level'), 'BMW.ChargingLevel', 6);
            $this->RegisterVariableInteger('bmw_connector_status', $this->Translate('connector status'), 'BMW.ConnectorStatus', 6);
            $this->RegisterVariableInteger('bmw_charging_status', $this->Translate('charging status'), 'BMW.ChargingStatus', 6);
            $this->RegisterVariableInteger('bmw_charging_end', $this->Translate('charging end'), '~UnixTimestampTime', 6);
        } else {
            $this->UnregisterVariable('bmw_remaining_electric_range');
            $this->UnregisterVariable('bmw_charging_level');
            $this->UnregisterVariable('bmw_connector_status');
            $this->UnregisterVariable('bmw_charging_status');
            $this->UnregisterVariable('bmw_charging_end');
        }

        $this->RegisterVariableString('bmw_history', $this->Translate('course'), '~HTMLBox', 7);

        // Variablen löschen, Zugriff nun via BMW_GetRawData() unter gleichem Variablennamen
        $this->UnregisterVariable('bmw_dynamic_interface');
        $this->UnregisterVariable('bmw_navigation_interface');
        $this->UnregisterVariable('bmw_efficiency_interface');
        $this->UnregisterVariable('bmw_image_interface');
        $this->UnregisterVariable('bmw_mapupdate_interface');
        $this->UnregisterVariable('bmw_history_interface');
        $this->UnregisterVariable('bmw_car_interface');
        $this->UnregisterVariable('bmw_store_interface');
        $this->UnregisterVariable('bmw_specs_interface');
        $this->UnregisterVariable('bmw_service_interface');
        $this->UnregisterVariable('bmw_service_partner_interface');
        $this->UnregisterVariable('bmw_remote_services_interface');
        $this->UnregisterVariable('bmw_chargingprofile_interface');

        $this->ValidateConfiguration();
    }

    /**
     * Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
     * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verfügung gestellt:.
     */
    private function ValidateConfiguration()
    {
        $user = $this->ReadPropertyString('user');
        $password = $this->ReadPropertyString('password');
        $app_id = $this->ReadPropertyString('app_id');
        $vin = $this->ReadPropertyString('vin');

        $this->SetUpdateIntervall();

        //check user and password
        if ($user == '' || $password == '' || $app_id == '' || $vin == '') {
            $this->SetStatus(205);
            return;
        }

        $model = $this->ReadPropertyInteger('model');
        if ($model == BMW_MODEL_ELECTRIC) {
            $this->SendDebug(__FUNCTION__, 'electric selected', 0);
        }
        if ($model == BMW_MODEL_HYBRID) {
            $this->SendDebug(__FUNCTION__, 'hybrid selected', 0);
        }
        if ($model == BMW_MODEL_STANDARD) {
            $this->SendDebug(__FUNCTION__, 'standard, no electric selected', 0);
        }
        $active_climate = $this->ReadPropertyBoolean('active_climate');
        $active_lock = $this->ReadPropertyBoolean('active_lock');
        $active_lock_2actions = $this->ReadPropertyBoolean('active_lock_2actions');
        $active_flash_headlights = $this->ReadPropertyBoolean('active_flash_headlights');
        $active_vehicle_finder = $this->ReadPropertyBoolean('active_vehicle_finder');
        $active_lock_data = $this->ReadPropertyBoolean('active_lock_data');
        $active_honk = $this->ReadPropertyBoolean('active_honk');
        $active_picture = $this->ReadPropertyBoolean('active_picture');
        $active_googlemap = $this->ReadPropertyBoolean('active_googlemap');
        $active_service = $this->ReadPropertyBoolean('active_service');
        $active_current_position = $this->ReadPropertyBoolean('active_current_position');

        if ($active_climate) {
            $this->RegisterVariableInteger('bmw_start_air_conditioner', $this->Translate('start air conditioner'), 'BMW.Start', 20);
            $this->EnableAction('bmw_start_air_conditioner');
        } else {
            $this->UnregisterVariable('bmw_start_air_conditioner');
        }
        if ($active_lock_2actions) {
            $this->RegisterVariableInteger('bmw_start_lock', $this->Translate('lock door'), 'BMW.Start', 21);
            $this->RegisterVariableInteger('bmw_start_unlock', $this->Translate('unlock door'), 'BMW.Start', 22);
            $this->EnableAction('bmw_start_lock');
            $this->EnableAction('bmw_start_unlock');
        } elseif ($active_lock) {
            $this->RegisterVariableBoolean('bmw_start_lock', $this->Translate('lock'), '~Lock', 21);
            $this->EnableAction('bmw_start_lock');
        } else {
            $this->UnregisterVariable('bmw_start_lock');
            $this->UnregisterVariable('bmw_start_unlock');
        }
        if ($active_flash_headlights) {
            $this->RegisterVariableInteger('bmw_start_flash_headlights', $this->Translate('flash headlights'), 'BMW.Start', 23);
            $this->EnableAction('bmw_start_flash_headlights');
        } else {
            $this->UnregisterVariable('bmw_start_flash_headlights');
        }
        if ($active_honk) {
            $this->RegisterVariableInteger('bmw_start_honk', $this->Translate('honk'), 'BMW.Start', 24);
            $this->EnableAction('bmw_start_honk');
        } else {
            $this->UnregisterVariable('bmw_start_honk');
        }
        if ($active_vehicle_finder) {
            $this->RegisterVariableInteger('bmw_start_vehicle_finder', $this->Translate('search vehicle'), 'BMW.Start', 25);
            $this->EnableAction('bmw_start_vehicle_finder');
        } else {
            $this->UnregisterVariable('bmw_start_vehicle_finder');
        }
        if ($active_picture) {
            $this->RegisterVariableString('bmw_car_picture', $this->Translate('picture'), '~HTMLBox', 1);
            $this->RegisterVariableInteger('bmw_car_picture_zoom', $this->Translate('car zoom'), '~Intensity.100', 2);
            $this->EnableAction('bmw_car_picture_zoom');
            $this->RegisterProfile('BMW.Perspective', 'Eyes', '', '°', 0, 360, 30, 0, 1);
            $this->RegisterVariableInteger('bmw_perspective', $this->Translate('perspective'), 'BMW.Perspective', 3);
            $this->EnableAction('bmw_perspective');
        } else {
            $this->UnregisterVariable('bmw_car_picture');
            $this->UnregisterVariable('bmw_car_picture_zoom');
            $this->UnregisterVariable('bmw_perspective');
        }

        if ($active_googlemap) {
            $this->RegisterVariableString('bmw_car_googlemap', $this->Translate('map'), '~HTMLBox', 10);
            $this->RegisterVariableInteger('bmw_googlemap_maptype', $this->Translate('map type'), 'BMW.Googlemap', 11);
            $this->RegisterVariableInteger('bmw_googlemap_zoom', $this->Translate('map zoom'), '~Intensity.100', 12);
            $this->EnableAction('bmw_googlemap_maptype');
            $this->EnableAction('bmw_googlemap_zoom');
        } else {
            $this->UnregisterVariable('bmw_car_googlemap');
            $this->UnregisterVariable('bmw_googlemap_maptype');
            $this->UnregisterVariable('bmw_googlemap_zoom');
        }

        if ($active_current_position) {
            $this->RegisterProfile('BMW.Location', 'Car', '', ' °', 0, 0, 0, 5, 2);
            $this->RegisterVariableFloat('bmw_current_latitude', $this->Translate('current latitude'), 'BMW.Location', 13);
            $this->RegisterVariableFloat('bmw_current_longitude', $this->Translate('current longitude'), 'BMW.Location', 14);
        } else {
            $this->UnregisterVariable('bmw_current_latitude');
            $this->UnregisterVariable('bmw_current_longitude');
        }
        if ($active_service) {
            $this->RegisterVariableString('bmw_service', $this->Translate('Service'), '~HTMLBox', 15);
        } else {
            $this->UnregisterVariable('bmw_service');
        }

        if ($active_lock_data) {
            $this->RegisterVariableBoolean('bmw_doorDriverFront', $this->Translate('door driver front'), '~Lock', 30);
            $this->RegisterVariableBoolean('bmw_doorDriverRear', $this->Translate('door driver rear'), '~Lock', 31);
            $this->RegisterVariableBoolean('bmw_doorPassengerFront', $this->Translate('door passenger front'), '~Lock', 32);
            $this->RegisterVariableBoolean('bmw_doorPassengerRear', $this->Translate('door passenger rear'), '~Lock', 33);
            $this->RegisterVariableBoolean('bmw_windowDriverFront', $this->Translate('window driver front'), '~Lock', 34);
            $this->RegisterVariableBoolean('bmw_windowDriverRear', $this->Translate('window driver rear'), '~Lock', 35);
            $this->RegisterVariableBoolean('bmw_windowPassengerFront', $this->Translate('window passenger front'), '~Lock', 36);
            $this->RegisterVariableBoolean('bmw_windowPassengerRear', $this->Translate('window passenger rear'), '~Lock', 37);
            $this->RegisterVariableBoolean('bmw_trunk', $this->Translate('trunk'), '~Lock', 38);
            $this->RegisterVariableBoolean('bmw_rearWindow', $this->Translate('rear window'), '~Lock', 39);
            $this->RegisterVariableBoolean('bmw_convertibleRoofState', $this->Translate('convertible roof'), '~Lock', 40);
            $this->RegisterVariableBoolean('bmw_hood', $this->Translate('hood'), '~Lock', 41);
            $this->RegisterVariableBoolean('bmw_doorLockState', $this->Translate('door lock state'), '~Lock', 42);
        } else {
            $this->UnregisterVariable('bmw_doorDriverFront');
            $this->UnregisterVariable('bmw_doorDriverRear');
            $this->UnregisterVariable('bmw_doorPassengerFront');
            $this->UnregisterVariable('bmw_doorPassengerRear');
            $this->UnregisterVariable('bmw_windowDriverFront');
            $this->UnregisterVariable('bmw_windowDriverRear');
            $this->UnregisterVariable('bmw_windowPassengerFront');
            $this->UnregisterVariable('bmw_windowPassengerRear');
            $this->UnregisterVariable('bmw_trunk');
            $this->UnregisterVariable('bmw_rearWindow');
            $this->UnregisterVariable('bmw_convertibleRoofState');
            $this->UnregisterVariable('bmw_hood');
            $this->UnregisterVariable('bmw_doorLockState');
        }
        // Status Aktiv
        $this->SetStatus(102);
    }

    public function SetUpdateIntervall(int $Minutes = null)
    {
        if (!($Minutes > 0)) {
            $Minutes = $this->ReadPropertyInteger('UpdateInterval');
        }
        $interval = $Minutes * 60 * 1000;
        $this->SendDebug(__FUNCTION__, 'minutes=' . $Minutes, 0);
        $this->SetTimerInterval('BMWDataUpdate', $interval);
    }

    public function DataUpdate()
    {
        $active_picture = $this->ReadPropertyBoolean('active_picture');

        //$this->GetVehicleStatus();
        $this->GetDynamicData();
        $this->GetNavigationData();
        $this->GetEfficiency();
        $this->GetMapUpdate();

        if ($active_picture) {
            $angle = GetValue($this->GetIDForIdent('bmw_perspective'));
            $zoom = GetValue($this->GetIDForIdent('bmw_car_picture_zoom'));
            $this->GetCarPictureForAngle($angle, $zoom);
        }

        $this->GetStore();
        $this->GetSpecs();
        $this->GetService();
        $this->GetServicePartner();
        $this->GetChargingProfile();
        $this->GetRemoteServices();
    }

    protected function GetMileageUnit()
    {
        $lang = 'de';
        if ($lang == 'de') {
            $unit = 'km';
        } elseif ($lang == 'eng') {
            $unit = 'miles';
        } else {
            $unit = 'miles';
        }
        return $unit;
    }

    protected function GetBMWServerURL($area)
    {
        if ($area == BMW_AREA_GERMANY) { // Germany
            $server = 'Germany';
            $url = 'https://www.bmw-connecteddrive.de';
        } elseif ($area == BMW_AREA_SWITZERLAND) { // Switzerland
            $server = 'Switzerland';
            $url = 'https://www.bmw-connecteddrive.ch';
        } elseif ($area == BMW_AREA_EUROPE) { // Europe
            $server = 'Europe';
            $url = 'https://b2vapi.bmwgroup.com';
        } elseif ($area == BMW_AREA_USA) { // USA
            $server = 'USA';
            $url = 'https://b2vapi.bmwgroup.us';
        } elseif ($area == BMW_AREA_CHINA) { // China
            $server = 'China';
            $url = 'https://b2vapi.bmwgroup.cn:8592';
        } else { // Rest of World
            $server = 'Europe';
            $url = 'https://b2vapi.bmwgroup.com';
        }

        // Die Adresse ist für die Schweiz. Vermutlich .de anstatt .ch für Deutschland?
        // $api = 'https://www.bmw-connecteddrive.ch/api';
        $this->SendDebug(__FUNCTION__, 'use server location ' . $server, 0);
        $this->SendDebug(__FUNCTION__, 'server url: ' . $url, 0);
        return $url;
    }

    public function GetToken()
    {
        $user = $this->ReadPropertyString('user');
        $password = $this->ReadPropertyString('password');
        $app_id = $this->ReadPropertyString('app_id');

        $auth_api = 'https://customer.bmwgroup.com/gcdm/oauth/authenticate';
        $postfields = http_build_query([
            'username'      => $user,
            'password'      => $password,
            'client_id'     => $app_id,
            'redirect_uri'  => 'https://www.bmw-connecteddrive.com/app/default/static/external-dispatch.html',
            'response_type' => 'token',
            'locale'        => 'DE-de'
        ]);

        $this->SendDebug(__FUNCTION__, 'postfields=' . $postfields, 0);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $auth_api);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_COOKIESESSION, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        curl_close($ch);

        if (empty($response) || $response === false || !empty($curl_error)) {
            $this->SendDebug(__FUNCTION__, 'Empty answer from Bearerinterface: ' . $curl_error, 0);
            return false;
        }

        // extract token
        preg_match('/access_token=([\w\d]+).*token_type=(\w+).*expires_in=(\d+)/', $response, $matches);

        // check token type
        if (empty($matches[2]) or $matches[2] !== 'Bearer') {
            $this->SendDebug(__FUNCTION__, 'No remote token received - username or password might be wrong: ' . $response, 0);
            return false;
        }

        $token = $matches[1];
        $token_expiration = time() + $matches[3] - 60;
        $this->SendDebug(__FUNCTION__, 'set access_token: ' . $token . ', expiration=' . $token_expiration, 0);

        $jtoken = [
                'token'            => $token,
                'token_expiration' => $token_expiration
            ];
        $this->SetBuffer('Token', json_encode($jtoken));
        return $token;
    }

    public function CheckToken()
    {
        $dtoken = $this->GetBuffer('Token');
        $jtoken = json_decode($dtoken, true);
        $token = isset($jtoken['token']) ? $jtoken['token'] : '';
        $token_expiration = isset($jtoken['token_expiration']) ? $jtoken['token_expiration'] : 0;
        if ($token == '' || time() > $token_expiration) {
            $this->SendDebug(__FUNCTION__, 'no token or token expired, get new token', 0);
            $token = $this->GetToken();
        }

        $this->SendDebug(__FUNCTION__, "token=$token", 0);
        return $token;
    }

    public function MessageSink($TimeStamp, $SenderID, $Message, $Data)
    {
        IPS_LogMessage(__CLASS__ . '::' . __FUNCTION__, 'SenderID: ' . $SenderID . ', Message: ' . $Message . ', Data:' . json_encode($Data));
    }

    /**
     * Get Vehicle Data.
     *
     * @return mixed
     */
    public function GetVehicleData()
    {
        $command = '/api/v1/user/vehicles/';
        $response = $this->SendBMWAPI($command);
        $data = json_decode($response);
        return $data;
    }

    /**
     * Get Vehicle Info.
     *
     * @return mixed
     */
    public function GetVehicleInfo()
    {
        $command = '/api/me/vehicles/v2';
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $this->SetBuffer('bmw_car_interface', $response);
        $data = json_decode($response);
        return $data;
    }

    /**
     * Get Navigation Data.
     *
     * @return mixed
     */
    public function GetNavigationData()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/vehicle/navigation/v1/' . $vin;
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $this->SetBuffer('bmw_navigation_interface', $response);
        return $response;
    }

    /**
     * Set car position to google map.
     *
     * @param $maptype
     * @param $zoom
     * @param null $latitude
     * @param null $longitude
     */
    protected function SetGoogleMap($maptype, $zoom, $latitude = null, $longitude = null)
    {
        $active_googlemap = $this->ReadPropertyBoolean('active_googlemap');
        $active_current_position = $this->ReadPropertyBoolean('active_current_position');

        if (!$active_googlemap) {
            return;
        }

        if (empty($latitude) || empty($longitude)) {
            if ($active_current_position) {
                $latitude = GetValue($this->GetIDForIdent('bmw_current_latitude'));
                $longitude = GetValue($this->GetIDForIdent('bmw_current_longitude'));
            }
            if ($latitude == '' || $longitude == '') {
                $data = $this->GetDynamicData();
                $carinfo = $data->attributesMap;
                $longitude = $carinfo->gps_lng;
                $latitude = $carinfo->gps_lat;
            }
        }
        if ($latitude != '' && $longitude != '') {
            $pos = $latitude . ',' . $longitude;
            $horizontal_size = $this->ReadPropertyInteger('horizontal_mapsize');
            $vertical_value = $this->ReadPropertyInteger('vertical_mapsize');
            $markercolor = 'red';
            // zoom 0 world - 21 building
            $this->SendDebug(__FUNCTION__, 'zoom Level=' . $zoom, 0);
            $ausgabe = '<img src="http://maps.google.com/maps/api/staticmap?center=' . $pos . '&zoom=' . $zoom . '&size=' . $horizontal_size . 'x' . $vertical_value . '&maptype=' . $maptype . '&markers=color:' . $markercolor . '%7C' . $pos . '&sensor=true" />';
            $this->SendDebug(__FUNCTION__, 'http://maps.google.com/maps/api/staticmap?center=' . $pos . '&zoom=' . $zoom . '&size=' . $horizontal_size . 'x' . $vertical_value . '&maptype=' . $maptype . '&markers=color:' . $markercolor . '%7C' . $pos . '&sensor=true', 0);
            $this->SetValue('bmw_car_googlemap', $ausgabe); //Stringvariable HTML-Box
        }
    }

    /**
     * Set Google map type.
     *
     * @param $value
     */
    protected function SetGoogleMapType($value)
    {
        $active_googlemap = $this->ReadPropertyBoolean('active_googlemap');

        if (!$active_googlemap) {
            return;
        }

        $zoom_value = GetValue($this->GetIDForIdent('bmw_googlemap_zoom'));
        $zoom = round(($zoom_value / 100) * 21);
        $this->SetGoogleMap($this->GetGoogleMapType($value), $zoom);
    }

    /**
     * Get Google map type.
     *
     * @param $value
     *
     * @return string
     */
    protected function GetGoogleMapType($value)
    {
        $maptype = 'roadmap';
        if ($value == BMW_GOOGLEMAP_ROADMAP) {
            $maptype = 'roadmap';
        } elseif ($value == BMW_GOOGLEMAP_SATELLITE) {
            $maptype = 'satellite';
        } elseif ($value == BMW_GOOGLEMAP_HYBRID) {
            $maptype = 'hybrid';
        } elseif ($value == BMW_GOOGLEMAP_TERRAIN) {
            $maptype = 'terrain';
        }
        $this->SendDebug(__FUNCTION__, 'map type=' . $maptype, 0);
        return $maptype;
    }

    /**
     * Set Map Zoom.
     *
     * @param $zoom
     */
    protected function SetMapZoom($zoom)
    {
        $active_googlemap = $this->ReadPropertyBoolean('active_googlemap');
        $active_current_position = $this->ReadPropertyBoolean('active_current_position');

        if (!$active_googlemap || !$active_current_position) {
            return;
        }

        $latitude = GetValue($this->GetIDForIdent('bmw_current_latitude'));
        $longitude = GetValue($this->GetIDForIdent('bmw_current_longitude'));
        $maptype = $this->GetGoogleMapType(GetValue($this->GetIDForIdent('bmw_googlemap_maptype')));
        $this->SetGoogleMap($maptype, $zoom, $latitude, $longitude);
    }

    /**
     * Get Efficiency.
     *
     * @return mixed
     */
    public function GetEfficiency()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/vehicle/efficiency/v1/' . $vin;
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $this->SetBuffer('bmw_efficiency_interface', $response);
        return $response;
    }

    /**
     * Get Charging Profile.
     *
     * @return mixed
     */
    public function GetChargingProfile()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/vehicle/remoteservices/chargingprofile/v1/' . $vin;
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $this->SetBuffer('bmw_chargingprofile_interface', $response);
        return $response;
    }

    /**
     * Get map update.
     *
     * @return mixed
     */
    public function GetMapUpdate()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/me/service/mapupdate/download/v1/' . $vin;
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $this->SetBuffer('bmw_mapupdate_interface', $response);
        return $response;
    }

    /**
     * Get Store Values.
     *
     * @return mixed
     */
    public function GetStore()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/store/v2/' . $vin . '/offersAndPortfolios';
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $this->SetBuffer('bmw_store_interface', $response);
        return $response;
    }

    /**
     * Get specs.
     *
     * @return mixed
     */
    public function GetSpecs()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/vehicle/specs/v1/' . $vin;
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $this->SetBuffer('bmw_specs_interface', $response);
        return $response;
    }

    /**
     * Get service.
     *
     * @return mixed
     */
    public function GetService()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/vehicle/service/v1/' . $vin;
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $this->SetBuffer('bmw_service_interface', $response);
        return $response;
    }

    /**
     * Get servive partner.
     *
     * @return mixed
     */
    public function GetServicePartner()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/vehicle/servicepartner/v1/' . $vin;
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $this->SetBuffer('bmw_service_partner_interface', $response);
        return $response;
    }

    /**
     * Get Remote Service.
     *
     * @return mixed
     */
    public function GetRemoteServices()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/vehicle/remoteservices/v1/' . $vin . '/history';
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $this->SetBuffer('bmw_history_interface', $response);
        $data = json_decode($response, true);
        $type = [
                'RCN' => 'climate now',
                'RCT' => 'climate timer',
                'RHB' => 'horn blow',
                'RLF' => 'light flash',
                'RDL' => 'door lock',
                'RDU' => 'door unlock',
                'RCP' => 'charge preferences',
            ];
        $status = [
                'SUCCESS'   => 'success',
                'PENDING'   => 'pending',
                'INITIATED' => 'initiated',
                'FAILED'    => 'failed',
                'CANCELLED' => 'cancelled',
            ];

        if (isset($data)) {
            $html = "<style>\n";
            $html .= "th, td { padding: 2px 10px; } \n";
            $html .= "</style>\n";
            $html .= "<table>\n";
            for ($index = 0; $index < count($data); $index++) {
                $_ts = $data[$index]['creationTime'] / 1000;
                $ts = date('d.m. H:i:s', $_ts);
                $_rst = $data[$index]['remoteServiceType'];
                $rst = $this->Translate(isset($type[$_rst]) ? $type[$_rst] : 'unknown service');
                $_st = $data[$index]['status'];
                $st = $this->Translate(isset($status[$_st]) ? $status[$_st] : 'unknown status');

                $html .= "<tr>\n";
                $html .= '<td>' . $ts . "</td>\n";
                $html .= '<td>' . $rst . "</td>\n";
                $html .= '<td>' . $st . "</td>\n";
                $html .= "</tr>\n";
            }
            $html .= "</table>\n";
        } else {
            $html = 'Keine Information zum Verlauf vorhanden';
        }
        $this->SetValue('bmw_history', $html);

        return $response;
    }

    /**
     * Get dynamic data.
     *
     * @return mixed
     */
    public function GetDynamicData()
    {
        $active_lock = $this->ReadPropertyBoolean('active_lock');
        $active_lock_data = $this->ReadPropertyBoolean('active_lock_data');
        $active_googlemap = $this->ReadPropertyBoolean('active_googlemap');
        $active_service = $this->ReadPropertyBoolean('active_service');
        $active_current_position = $this->ReadPropertyBoolean('active_current_position');

        $vin = $this->ReadPropertyString('vin');
        $command = '/api/vehicle/dynamic/v1/' . $vin . '?offset=' . date('Z') / -60;
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $this->SetBuffer('bmw_dynamic_interface', $response);

        $data = json_decode($response);
        if (isset($data->attributesMap)) {
            $carinfo = $data->attributesMap;
            if (isset($carinfo->mileage)) {
                $mileage = $carinfo->mileage;
                $this->SetValue('bmw_mileage', $mileage);
            }
            if ($active_lock) {
                if (isset($carinfo->door_lock_state)) {
                    $doorLockState = $carinfo->door_lock_state;
                    $this->SetLockState('bmw_start_lock', $doorLockState);
                }
            }
            if ($active_lock_data) {
                if (isset($carinfo->door_driver_front)) {
                    $doorDriverFront = $carinfo->door_driver_front;
                    $this->SetLockState('bmw_doorDriverFront', $doorDriverFront);
                }
                if (isset($carinfo->door_driver_rear)) {
                    $doorDriverRear = $carinfo->door_driver_rear;
                    $this->SetLockState('bmw_doorDriverRear', $doorDriverRear);
                }
                if (isset($carinfo->door_passenger_front)) {
                    $doorPassengerFront = $carinfo->door_passenger_front;
                    $this->SetLockState('bmw_doorPassengerFront', $doorPassengerFront);
                }
                if (isset($carinfo->door_passenger_rear)) {
                    $doorPassengerRear = $carinfo->door_passenger_rear;
                    $this->SetLockState('bmw_doorPassengerRear', $doorPassengerRear);
                }
                if (isset($carinfo->window_driver_front)) {
                    $windowDriverFront = $carinfo->window_driver_front;
                    $this->SetLockState('bmw_windowDriverFront', $windowDriverFront);
                }
                if (isset($carinfo->window_driver_rear)) {
                    $windowDriverRear = $carinfo->window_driver_rear;
                    $this->SetLockState('bmw_windowDriverRear', $windowDriverRear);
                }
                if (isset($carinfo->window_passenger_front)) {
                    $windowPassengerFront = $carinfo->window_passenger_front;
                    $this->SetLockState('bmw_windowPassengerFront', $windowPassengerFront);
                }
                if (isset($carinfo->window_passenger_rear)) {
                    $windowPassengerRear = $carinfo->window_passenger_rear;
                    $this->SetLockState('bmw_windowPassengerRear', $windowPassengerRear);
                }
                if (isset($carinfo->trunk_state)) {
                    $trunk = $carinfo->trunk_state;
                    $this->SetLockState('bmw_trunk', $trunk);
                }
                if (isset($carinfo->rear_window)) {
                    $rearWindow = $carinfo->rear_window;
                    $this->SetLockState('bmw_rearWindow', $rearWindow);
                }
                if (isset($carinfo->convertible_roof_state)) {
                    $convertibleRoofState = $carinfo->convertible_roof_state;
                    $this->SetLockState('bmw_convertibleRoofState', $convertibleRoofState);
                }
                if (isset($carinfo->hood_state)) {
                    $hood = $carinfo->hood_state;
                    $this->SetLockState('bmw_hood', $hood);
                }
                if (isset($carinfo->door_lock_state)) {
                    $doorLockState = $carinfo->door_lock_state;
                    $this->SetLockState('bmw_doorLockState', $doorLockState);
                }
            }
            if (isset($carinfo->remaining_fuel)) {
                $remainingFuel = floatval($carinfo->remaining_fuel);
                $this->SetValue('bmw_tank_capacity', $remainingFuel);
            }
            if (isset($carinfo->beRemainingRangeFuel)) {
                $remaining_range = floatval($carinfo->beRemainingRangeFuel);
                $this->SetValue('bmw_remaining_range', $remaining_range);
            }

            $model = $this->ReadPropertyInteger('model');
            if ($model != BMW_MODEL_STANDARD) { // standard, no electric
                if (isset($carinfo->beRemainingRangeElectricKm)) {
                    $electric_range = floatval($carinfo->beRemainingRangeElectricKm);
                    $this->SetValue('bmw_remaining_electric_range', $electric_range);
                }
                if (isset($carinfo->chargingLevelHv)) {
                    $charging_level = floatval($carinfo->chargingLevelHv);
                    $this->SetValue('bmw_charging_level', $charging_level);
                }

                $connector_status = BMW_CONNECTOR_UNKNOWN;
                if (isset($carinfo->connectorStatus)) {
                    switch ($carinfo->connectorStatus) {
                        case 'DISCONNECTED':
                            $connector_status = BMW_CONNECTOR_CONNECTED;
                            break;
                        case 'CONNECTED':
                            $connector_status = BMW_CONNECTOR_DISCONNECTED;
                            break;
                        default:
                            $this->SendDebug(__FUNCTION__, 'unknown connectorStatus "' . $carinfo->connectorStatus . '"', 0);
                            break;
                    }
                }

                $charging_status = BMW_CHARGING_UNKNOWN;
                if (isset($carinfo->charging_status)) {
                    switch ($carinfo->charging_status) {
                        case 'NOCHARGING':
                            $charging_status = BMW_CHARGING_NO;
                            break;
                        case 'CHARGINGACTIVE':
                            $charging_status = BMW_CHARGING_ACTIVE;
                            break;
                        case 'CHARGINGENDED':
                            $charging_status = BMW_CHARGING_ENDED;
                            break;
                        default:
                            $this->SendDebug(__FUNCTION__, 'unknown charging_status "' . $carinfo->charging_status . '"', 0);
                            break;
                    }
                }

                $charging_end = 0;
                if ($connector_status == BMW_CONNECTOR_CONNECTED && $charging_status == BMW_CHARGING_ACTIVE) {
                    if (isset($carinfo->chargingTimeRemaining)) {
                        $chargingTimeRemaining = floatval($carinfo->chargingTimeRemaining);
                        if ($chargingTimeRemaining > 0) {
                            $dateTime = new DateTime(date('Y-m-d H:i:s', time()));
                            $addMinutes = 'PT' . $chargingTimeRemaining . 'M';
                            $dateTime->add(new DateInterval($addMinutes));
                            $charging_end = $dateTime->format('U');
                        }
                    }
                }

                $this->SetValue('bmw_connector_status', $connector_status);
                $this->SetValue('bmw_charging_status', $charging_status);
                $this->SetValue('bmw_charging_end', $charging_end);
            }

            if (isset($carinfo->gps_lng) && isset($carinfo->gps_lat)) {
                $longitude = $carinfo->gps_lng;
                $latitude = $carinfo->gps_lat;

                if ($active_googlemap) {
                    $maptype = GetValue($this->GetIDForIdent('bmw_googlemap_maptype'));
                    $zoom = GetValue($this->GetIDForIdent('bmw_googlemap_zoom'));
                    $this->SetGoogleMap($maptype, $zoom, $latitude, $longitude);
                }
                if ($active_current_position) {
                    $this->SetValue('bmw_current_latitude', $latitude);
                    $this->SetValue('bmw_current_longitude', $longitude);
                }
            }
        }
        if (isset(json_decode($response)->vehicleMessages->cbsMessages)) {
            if ($active_service) {
                $HTML = '<body><style type="text/css">table.liste { width: 100%; border-collapse: collapse ;} table.liste td { border: 1px solid #444455; } table.liste th { border: 1px solid #444455; }</style>';
                $HTML .= '<table frame="box" class="liste">';
                $HTML .= '<tr>';
                $HTML .= '<th>Servicart</th>';
                $HTML .= '<th>Beschreibung</th>';
                $HTML .= '<th>Datum</th>';
                $HTML .= '<th>Kilometer</th>';
                $HTML .= '</tr>';

                $service = json_decode($response)->vehicleMessages->cbsMessages;
                foreach ($service as $key => $servicemessage) {
                    $description = $servicemessage->description;
                    $text = $servicemessage->text;
                    $date = $servicemessage->date;
                    if (isset($servicemessage->unitOfLengthRemaining)) {
                        $dist = $servicemessage->unitOfLengthRemaining;
                    } else {
                        $dist = 'Nicht angegeben';
                    }

                    $HTML .= '<tr align="center"><td>' . $text . '</td>';
                    $HTML .= '<td>' . $description . '</td>';
                    $HTML .= '<td>' . $date . '</td>';
                    $HTML .= '<td>' . $dist . '</td></tr>';
                }
                $HTML .= '</table></body>';
                $this->SetValue('bmw_service', $HTML);
            }
        }
        return $data;
    }

    /**
     * set lock state.
     *
     * @param $ident
     * @param $command
     */
    protected function SetLockState($ident, $command)
    {
        $this->SendDebug(__FUNCTION__, 'ident=' . $ident . ', command=' . $command, 0);
        if ($command == 'CLOSED' || $command == 'LOCKED') {
            $this->SetValue($ident, true);
        } else {
            $this->SetValue($ident, false);
        }
    }

    /**
     * Get Vehicle Status.
     *
     * @return mixed
     */
    public function GetVehicleStatus()
    {
        $active_lock = $this->ReadPropertyBoolean('active_lock');
        $active_lock_data = $this->ReadPropertyBoolean('active_lock_data');

        $vin = $this->ReadPropertyString('vin');
        $command = '/api/v1/user/vehicles/' . $vin . '/status';
        $response = $this->SendBMWAPI($command);
        $data = json_decode($response);
        $carinfo = $data->vehicleStatus;
        $current_vin = $carinfo->vin;
        if ($vin == $current_vin) {
            $mileage = $carinfo->mileage;
            $this->SetValue('bmw_mileage', $mileage);

            $remainingFuel = $carinfo->remainingFuel;
            $this->SetValue('bmw_tank_capacity', $remainingFuel);

            if ($active_lock) {
                if (isset($carinfo->door_lock_state)) {
                    $doorLockState = $carinfo->door_lock_state;
                    $this->SetLockState('bmw_start_lock', $doorLockState);
                }
            }
            if ($active_lock_data) {
                if (isset($carinfo->doorDriverFront)) {
                    $doorDriverFront = $carinfo->doorDriverFront;
                    $this->SetLockState('bmw_doorDriverFront', $doorDriverFront);
                }
                if (isset($carinfo->doorDriverFront)) {
                    $doorDriverRear = $carinfo->doorDriverFront;
                    $this->SetLockState('bmw_doorDriverRear', $doorDriverRear);
                }
                if (isset($carinfo->doorPassengerFront)) {
                    $doorPassengerFront = $carinfo->doorPassengerFront;
                    $this->SetLockState('bmw_doorPassengerFront', $doorPassengerFront);
                }
                if (isset($carinfo->doorPassengerRear)) {
                    $doorPassengerRear = $carinfo->doorPassengerRear;
                    $this->SetLockState('bmw_doorPassengerRear', $doorPassengerRear);
                }
                if (isset($carinfo->windowDriverFront)) {
                    $windowDriverFront = $carinfo->windowDriverFront;
                    $this->SetLockState('bmw_windowDriverFront', $windowDriverFront);
                }
                if (isset($carinfo->windowDriverRear)) {
                    $windowDriverRear = $carinfo->windowDriverRear;
                    $this->SetLockState('bmw_windowDriverRear', $windowDriverRear);
                }
                if (isset($carinfo->windowPassengerFront)) {
                    $windowPassengerFront = $carinfo->windowPassengerFront;
                    $this->SetLockState('bmw_windowPassengerFront', $windowPassengerFront);
                }
                if (isset($carinfo->windowPassengerRear)) {
                    $windowPassengerRear = $carinfo->windowPassengerRear;
                    $this->SetLockState('bmw_windowPassengerRear', $windowPassengerRear);
                }
                if (isset($carinfo->trunk)) {
                    $trunk = $carinfo->trunk;
                    $this->SetLockState('bmw_trunk', $trunk);
                }
                if (isset($carinfo->rearWindow)) {
                    $rearWindow = $carinfo->rearWindow;
                    $this->SetLockState('bmw_rearWindow', $rearWindow);
                }
                if (isset($carinfo->convertibleRoofState)) {
                    $convertibleRoofState = $carinfo->convertibleRoofState;
                    $this->SetLockState('bmw_convertibleRoofState', $convertibleRoofState);
                }
                if (isset($carinfo->hood)) {
                    $hood = $carinfo->hood;
                    $this->SetLockState('bmw_hood', $hood);
                }
                if (isset($carinfo->doorLockState)) {
                    $doorLockState = $carinfo->doorLockState;
                    $this->SetLockState('bmw_doorLockState', $doorLockState);
                }
            }
        }
        return $data;
    }

    /**
     * Get car picture.
     *
     * @return bool
     */
    public function GetCarPicture()
    {
        $active_picture = $this->ReadPropertyBoolean('active_picture');
        if (!$active_picture) {
            return '';
        }

        $angle = 0;
        $zoom = 100;
        $response = $this->GetCarPictureForAngle($angle, $zoom);
        $this->SetBuffer('bmw_image_interface', $response);
        return $response;
    }

    /**
     * Get car picture for angle.
     *
     * @param int $angle
     * @param int $zoom
     *
     * @return bool
     */
    public function GetCarPictureForAngle(int $angle, int $zoom)
    {
        $active_picture = $this->ReadPropertyBoolean('active_picture');

        $vin = $this->ReadPropertyString('vin');
        $command = '/api/vehicle/image/v1/' . $vin . '?startAngle=' . $angle . '&stepAngle=10&width=780';
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $this->SetBuffer('bmw_image_interface', $response);
        $images = json_decode($response);
        if (isset($images->vin) && $active_picture) {
            $picture_url = false;
            $picture_vin = $images->vin;
            if ($vin == $picture_vin) {
                $images_angle = $images->angleUrls;
                $picture_angle = $angle;
                foreach ($images_angle as $key => $image_angle) {
                    $angle = $image_angle->angle;
                    if ($picture_angle == $angle) {
                        $picture_url = $image_angle->url;
                    }
                }
                if ($picture_url) {
                    $HTML = '<!DOCTYPE html>' . PHP_EOL . '
							<html>' . PHP_EOL . '
							<body>' . PHP_EOL . '
							<img src="' . $picture_url . '" alt="car picture" width="' . $zoom . '%" height="' . $zoom . '%">' . PHP_EOL . '
							</body>' . PHP_EOL . '
							</html>';
                    $this->SetValue('bmw_car_picture', $HTML);
                }
            }
        } else {
            $picture_url = false;
        }
        return $picture_url;
    }

    /**
     * Set car picture zoom.
     *
     * @param $zoom
     */
    public function SetCarPictureZoom(int $zoom)
    {
        $angle = GetValue($this->GetIDForIdent('bmw_perspective'));
        $this->GetCarPictureForAngle($angle, $zoom);
    }

    /**
     * Get last trip.
     *
     * @return mixed
     */
    public function GetLastTrip()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/v1/user/vehicles/' . $vin . '/statistics/lastTrip';
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $data = json_decode($response);
        return $data;
    }

    /**
     * Get charging times.
     *
     * @return mixed
     */
    public function GetChargingTimes()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/v1/user/vehicles/' . $vin . '/chargingprofile';
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $chargingtimes = json_decode($response);
        return $chargingtimes;
    }

    /**
     * Get vehicle destinations.
     *
     * @return mixed
     */
    public function GetVehicleDestinations()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/v1/user/vehicles/' . $vin . '/destinations';
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $destination = json_decode($response);
        return $destination;
    }

    /**
     * Get all trip details.
     *
     * @return mixed
     */
    public function GetAllTripDetails()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/v1/user/vehicles/' . $vin . '/statistics/allTrips';
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $tripdetails = json_decode($response);
        return $tripdetails;
    }

    /**
     * Generate a polyline displaying the predicted range of the vehicle.
     *
     * @return mixed
     */
    public function GetRangeMap()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/v1/user/vehicles/' . $vin . '/rangemap';
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        /*
         * ECO_PRO_PLUS driving using the efficient Eco mode.
            COMFORT driving using comfort mode.
         */
        $rangemap = json_decode($response);
        return $rangemap;
    }

    public function GetSoCData()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/v1/user/vehicles/' . $vin . '/rangemap';
        $action = false;
        $response = $this->SendBMWAPIV1($command, $action);
        $soc_data = json_decode($response);
        return $soc_data;
    }

    /**
     * Sending information to the car.
     *
     * @param $service
     *
     * @return mixed
     */
    protected function GetRequestStatus($service)
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/v1/user/vehicles/' . $vin . '/serviceExecutionStatus?serviceType=' . $service;
        $response = $this->SendBMWAPI($command);
        $state = json_decode($response);
        return $state;
    }

    /**
     * Instructs the car to perform an action.
     *
     * @param $service
     *
     * @return mixed
     */
    protected function PerfomAction($service)
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/v1/user/vehicles/' . $vin . '/' . $service;
        $response = $this->SendBMWAPI($command);
        return $response;
    }

    /**
     * Instructs the car to perform an action.
     *
     * @param $service
     * @param $action
     *
     * @return mixed
     */
    protected function PerfomActionV1($service, $action)
    {
        $vin = $this->ReadPropertyString('vin');
        $command = '/api/vehicle/remoteservices/v1/' . $vin . '/' . $service;
        $response = $this->SendBMWAPIV1($command, $action);
        return $response;
    }

    /**
     * Initiate Charging.
     *
     * @return mixed
     */
    public function InitiateCharging()
    {
        $service = 'serviceType=CHARGE_NOW';
        $result = $this->PerfomAction($service);
        return $result;
    }

    /**
     * Start climate control.
     *
     * @return mixed
     */
    public function StartClimateControl()
    {
        $service = 'RCN';
        $action = 'CLIMATE_NOW';
        $result = $this->PerfomActionV1($service, $action);
        $this->SendDebug(__FUNCTION__, 'service=' . $service . ', action=' . $action . ', result=' . $result, 0);
        return $result;
    }

    /**
     * lock doors.
     *
     * @return mixed
     */
    public function LockTheDoors()
    {
        $service = 'RDL';
        $action = 'DOOR_LOCK';
        $result = $this->PerfomActionV1($service, $action);
        $this->SendDebug(__FUNCTION__, 'service=' . $service . ', action=' . $action . ', result=' . $result, 0);
        return $result;
    }

    /**
     * unlock doors.
     *
     * @return mixed
     */
    public function UnlockTheDoors()
    {
        $service = 'RDU';
        $action = 'DOOR_UNLOCK';
        /*
        * If you recievce an error after DOOR_UNLOCK that looks like {"error":{"code":500,"description":"(SmartPhoneUtil-A-2013) Action is forbidden. secretKnowledge is missing but required!"}}

An addition field must be included

serviceType=DOOR_UNLOCK
bmwSkAnswer=BMW_ACCOUNT_SECURITY_QUESTION_ANSWER
        */
        $result = $this->PerfomActionV1($service, $action);
        $this->SendDebug(__FUNCTION__, 'service=' . $service . ', action=' . $action . ', result=' . $result, 0);
        return $result;
    }

    /**
     * If you can't find the vehicle, or need to illuminate something in its vicinity, you can briefly activate the headlights.
     *
     * @return mixed
     */
    public function FlashHeadlights()
    {
        $service = 'RLF';
        $action = 'LIGHT_FLASH&count=2';
        $result = $this->PerfomActionV1($service, $action);
        $this->SendDebug(__FUNCTION__, 'service=' . $service . ', action=' . $action . ', result=' . $result, 0);
        return $result;
    }

    /**
     * honk.
     *
     * @return mixed
     */
    public function Honk()
    {
        $service = 'RHB';
        $action = 'HORN_BLOW';
        $result = $this->PerfomActionV1($service, $action);
        $this->SendDebug(__FUNCTION__, 'service=' . $service . ', action=' . $action . ', result=' . $result, 0);
        return $result;
    }

    /*
    public function ChargingSchedule()
    {
        $service = "serviceType=CHARGING_CONTROL";
        $this->PerfomAction($service);
    }
    */

    /**
     * vehicle finder.
     *
     * @return mixed
     */
    public function VehicleFinder()
    {
        $service = 'serviceType=VEHICLE_FINDER';
        $result = $this->PerfomAction($service);
        $this->SendDebug(__FUNCTION__, 'service=' . $service . ', action=' . $action . ', result=' . $result, 0);
        return $result;
    }

    /**
     * Find vehicle.
     *
     * @return mixed
     */
    public function FindVehicle()
    {
        $service = 'RVF';
        $action = 'VEHICLE_FINDER';
        $result = $this->PerfomActionV1($service, $action);
        $this->SendDebug(__FUNCTION__, 'service=' . $service . ', action=' . $action . ', result=' . $result, 0);
        return $result;
    }

    /*
    public function SendPOI()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = "/webapi/v1/user/vehicles/".$vin."/sendpoi";
        //$response = $this->SendBMWAPI($command);
    }
    */

    /**
     * Send to BMW API.
     *
     * @param $command
     * @param $action
     *
     * @return mixed
     */
    protected function SendBMWAPIV1($command, $action)
    {
        $token = $this->CheckToken();

        $area = $this->ReadPropertyInteger('bmw_server');
        $api = $this->GetBMWServerURL($area);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api . $command);
        $this->SendDebug(__FUNCTION__, 'Send to url: ' . $api . $command, 0);
        $header = ['Content-Type: application/json', 'Authorization: Bearer ' . $token];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $this->SendDebug(__FUNCTION__, 'header=' . print_r($header, true), 0);
        if ($action) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['serviceType' => $action]));
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($httpcode != 200) {
            $this->SendDebug(__FUNCTION__, "got http-code $httpcode", 0);
        }
        if ($httpcode == 401) {
            $response = '';
        } elseif ($response === false) {
            $curl_error = curl_error($ch);
            $this->SendDebug(__FUNCTION__, 'curl error: ' . $curl_error, 0);
        } else {
            $this->SendDebug(__FUNCTION__, 'response=' . $response, 0);
        }
        curl_close($ch);
        return $response;
    }

    /**
     * Send to BMW API.
     *
     * @param $command
     *
     * @return mixed
     */
    protected function SendBMWAPI($command)
    {
        $token = $this->CheckToken();

        $area = $this->ReadPropertyInteger('bmw_server');
        $api = $this->GetBMWServerURL($area);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api . $command);
        $this->SendDebug(__FUNCTION__, 'Send to url: ' . $api . $command, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Authorization: Bearer ' . $token]);
        $this->SendDebug(__FUNCTION__, "'Content-Type: application/json' , 'Authorization: Bearer ' " . $token, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($httpcode != 200) {
            $this->SendDebug(__FUNCTION__, "got http-code $httpcode", 0);
        }
        if ($httpcode == 401) {
            $response = '';
        } else {
            $this->SendDebug(__FUNCTION__, $response, 0);
        }
        curl_close($ch);
        return $response;
    }

    public function RequestAction($Ident, $Value)
    {
        $active_lock_2actions = $this->ReadPropertyBoolean('active_lock_2actions');

        $this->SetValue($Ident, $Value);
        switch ($Ident) {
            case 'bmw_start_air_conditioner':
                $this->StartClimateControl();
                break;
            case 'bmw_start_lock':
                if ($active_lock_2actions) {
                    $this->LockTheDoors();
                } else {
                    if ($Value) {
                        $this->LockTheDoors();
                    } else {
                        $this->UnlockTheDoors();
                    }
                }
                break;
            case 'bmw_start_unlock':
                $this->UnlockTheDoors();
                break;
            case 'bmw_start_flash_headlights':
                $this->FlashHeadlights();
                break;
            case 'bmw_start_vehicle_finder':
                $this->VehicleFinder();
                break;
            case 'bmw_perspective':
                $zoom = GetValue($this->GetIDForIdent('bmw_car_picture_zoom'));
                $this->GetCarPictureForAngle($Value, $zoom);
                break;
            case 'bmw_start_honk':
                $this->Honk();
                break;
            case 'bmw_googlemap_maptype':
                $this->SetGoogleMapType($Value);
                break;
            case 'bmw_googlemap_zoom':
                $zoom = round(($Value / 100) * 21);
                $this->SetMapZoom($zoom);
                break;
            case 'bmw_car_picture_zoom':
                $this->SetCarPictureZoom($Value);
                break;

            default:
                $this->SendDebug(__FUNCTION__, 'Invalid ident', 0);
        }
    }

    //Profile
    protected function RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $StepSize, $Digits, $Vartype)
    {
        if (!IPS_VariableProfileExists($Name)) {
            IPS_CreateVariableProfile($Name, $Vartype); // 0 boolean, 1 int, 2 float, 3 string,
        } else {
            $profile = IPS_GetVariableProfile($Name);
            if ($profile['ProfileType'] != $Vartype) {
                $this->SendDebug(__FUNCTION__, 'Variable profile type does not match for profile ' . $Name, 0);
            }
        }

        IPS_SetVariableProfileIcon($Name, $Icon);
        IPS_SetVariableProfileText($Name, $Prefix, $Suffix);
        IPS_SetVariableProfileDigits($Name, $Digits); //  Nachkommastellen
        IPS_SetVariableProfileValues($Name, $MinValue, $MaxValue, $StepSize); // string $ProfilName, float $Minimalwert, float $Maximalwert, float $Schrittweite
    }

    protected function RegisterProfileAssociation($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype, $Associations)
    {
        if (count($Associations) === 0) {
            $MinValue = 0;
            $MaxValue = 0;
        }
        /*
        else {
            //undefiened offset
            $MinValue = $Associations[0][0];
            $MaxValue = $Associations[sizeof($Associations)-1][0];
        }
        */
        $this->RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype);

        //boolean IPS_SetVariableProfileAssociation ( string $ProfilName, float $Wert, string $Name, string $Icon, integer $Farbe )
        foreach ($Associations as $Association) {
            IPS_SetVariableProfileAssociation($Name, $Association[0], $Association[1], $Association[2], $Association[3]);
        }
    }

    //Configuration Form
    public function GetConfigurationForm()
    {
        $formhead = $this->FormHead();
        $formactions = $this->FormActions();
        $formelementsend = '{ "type": "Label", "label": "__________________________________________________________________________________________________" }';
        $formstatus = $this->FormStatus();
        return '{ ' . $formhead . $formelementsend . '],' . $formactions . $formstatus . ' }';
    }

    protected function FormHead()
    {
        $form = '"elements":
			[
				{ "type": "Select", "name": "model", "caption": "mode of driving",
					"options": [
						{ "label": "' . $this->Translate('electric') . '", "value": ' . BMW_MODEL_ELECTRIC . '},
						{ "label": "' . $this->Translate('hybrid') . '", "value": ' . BMW_MODEL_HYBRID . '},
						{ "label": "' . $this->Translate('standard') . '", "value": ' . BMW_MODEL_STANDARD . '}
					]
				},
				{ "type": "Select", "name": "bmw_server", "caption": "BMW area",
					"options": [
						{ "label": "' . $this->Translate('Germany') . '", "value": ' . BMW_AREA_GERMANY . '},
						{ "label": "' . $this->Translate('Switzerland') . '", "value": ' . BMW_AREA_SWITZERLAND . '},
						{ "label": "' . $this->Translate('Europe') . '", "value": ' . BMW_AREA_EUROPE . '},
						{ "label": "' . $this->Translate('USA') . '", "value": ' . BMW_AREA_USA . '},
						{ "label": "' . $this->Translate('China') . '", "value": ' . BMW_AREA_CHINA . '},
						{ "label": "' . $this->Translate('Rest of the World') . '", "value": ' . BMW_AREA_OTHER . ' }
					]
				},
				{ "type": "Label", "label": "BMW Connected Drive login credentials" },
				{ "name": "user", "type": "ValidationTextBox", "caption": "User" },
				{ "name": "password", "type": "ValidationTextBox", "caption": "Password" },

				{ "name": "vin", "type": "ValidationTextBox", "caption": "VIN" },

				{ "type": "Label", "label": "Update interval in minutes" },
				{ "type": "IntervalBox", "name": "UpdateInterval", "caption": "minutes" },

				{ "type": "Label", "label": "options" },
				{ "name": "active_climate", "type": "CheckBox", "caption": "air conditioner" },
				{ "name": "active_lock", "type": "CheckBox", "caption": "lock car" },
				{ "name": "active_lock_2actions", "type": "CheckBox", "caption": "lock car (separate actions)" },
				{ "name": "active_flash_headlights", "type": "CheckBox", "caption": "flash headlights" },
				{ "name": "active_honk", "type": "CheckBox", "caption": "honk" },
				{ "name": "active_vehicle_finder", "type": "CheckBox", "caption": "search vehicle (not useable)" },
				{ "name": "active_picture", "type": "CheckBox", "caption": "show picture of car" },
				{ "name": "active_googlemap", "type": "CheckBox", "caption": "show car position in map" },
				{ "type": "Label", "label": " ... size of the map" },
				{ "type": "NumberSpinner", "name": "horizontal_mapsize", "caption": " ... horizontal" },
				{ "type": "NumberSpinner", "name": "vertical_mapsize", "caption": " ... vertical" },
				{ "name": "active_current_position", "type": "CheckBox", "caption": "show current position, latitude / longitude" },
				{ "name": "active_service", "type": "CheckBox", "caption": "show service messages" },
				{ "name": "active_lock_data", "type": "CheckBox", "caption": "show detailed lock state" },
			';
        return $form;
    }

    protected function FormActions()
    {
        $form = '"actions":
			[
				{ "type": "Label", "label": "Get token for communication with BMW Connected Drive" },
				{ "type": "Button", "label": "Get token", "onClick": "BMW_GetToken($id);" },
				{ "type": "Label", "label": "Get car data from BMW" },
				{ "type": "Button", "label": "Get car data", "onClick": "BMW_DataUpdate($id);" }
			],';
        return $form;
    }

    protected function FormStatus()
    {
        $form = '"status":
            [
                { "code": 101, "icon": "inactive", "caption": "Creating instance." },
				{ "code": 102, "icon": "active", "caption": "BMW accessible." },
                { "code": 104, "icon": "inactive", "caption": "interface closed." },
                { "code": 204, "icon": "error", "caption": "connection to BMW lost." },
				{ "code": 205, "icon": "error", "caption": "field must not be empty." }
            ]';
        return $form;
    }

    //Add this Polyfill for IP-Symcon 4.4 and older
    protected function SetValue($Ident, $Value)
    {
        if (IPS_GetKernelVersion() >= 5) {
            parent::SetValue($Ident, $Value);
        } else {
            SetValue($this->GetIDForIdent($Ident), $Value);
        }
    }

    public function SetBuffer($name, $data)
    {
        $this->SendDebug(__FUNCTION__, 'name=' . $name . ', size=' . strlen($data) . ', data=' . $data, 0);
        parent::SetBuffer($name, $data);
    }

    public function GetRawData(string $name)
    {
        $data = $this->GetBuffer($name);
        $this->SendDebug(__FUNCTION__, 'name=' . $name . ', size=' . strlen($data) . ', data=' . $data, 0);
        return $data;
    }
}
