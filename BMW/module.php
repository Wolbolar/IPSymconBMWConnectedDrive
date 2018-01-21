<?

if (@constant('IPS_BASE') == null) //Nur wenn Konstanten noch nicht bekannt sind.
{
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

class BMWConnectedDrive extends IPSModule
{

    public function Create()
    {
    //Never delete this line!
        parent::Create();
		
		//These lines are parsed on Symcon Startup or Instance creation
        //You cannot use variables here. Just static values.

		$this->RegisterPropertyString("user", "");
		$this->RegisterPropertyString("password", "");
        $this->RegisterPropertyString("token", "");
        $this->RegisterPropertyInteger("token_expiration", 0);
        $this->RegisterPropertyString("app_id", "dbf0a542-ebd1-4ff0-a9a7-55172fbfce35");
        $this->RegisterPropertyString("vin", "");
        $this->RegisterPropertyInteger("bmw_server", 1);
        $this->RegisterPropertyInteger("model", 1);
        $this->RegisterPropertyBoolean("active_charging", false);
        $this->RegisterPropertyBoolean("active_climate", false);
        $this->RegisterPropertyBoolean("active_lock", false);
        $this->RegisterPropertyBoolean("active_flash_headlights", false);
        $this->RegisterPropertyBoolean("active_vehicle_finder", false);
        $this->RegisterPropertyBoolean("active_lock_data", false);
        $this->RegisterPropertyInteger("UpdateInterval", "360");
        $this->RegisterTimer('BMWTokenUpdate', 15000, 'BMW_CheckToken('.$this->InstanceID.');');
        $this->RegisterTimer('BMWDataUpdate', 600000, 'BMW_DataUpdate('.$this->InstanceID.');');
    }

    public function ApplyChanges()
    {
	//Never delete this line!
        parent::ApplyChanges();

        $this->RegisterVariableString("bmw_car_picture", $this->Translate("picture"), "~HTMLBox", 1);
        $this->RegisterProfile("BMW.Perspective",   "Eyes",   "", "°",    0, 360, 30, 0, 1);
        $this->RegisterVariableInteger("bmw_perspective", $this->Translate("perspective"), "BMW.Perspective", 2);
        $this->EnableAction("bmw_perspective");
        $this->RegisterProfile("BMW.Mileage",   "Distance",   "", " ".$this->GetMileageUnit(),    0, 0, 0, 0, 1);
        $this->RegisterVariableInteger("bmw_mileage", $this->Translate("mileage"), "BMW.Mileage", 3);
        $this->RegisterProfile("BMW.TankCapacity",   "Gauge",   "", " Liter",    0, 0, 0, 0, 1);
        $this->RegisterVariableInteger("bmw_tank_capacity", $this->Translate("tank capacity"), "BMW.TankCapacity", 4);

		$this->ValidateConfiguration();	
	
    }

		/**
        * Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
        * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verfügung gestellt:
        *
        *
        */
		
	private function ValidateConfiguration()
	{
		$user = $this->ReadPropertyString('user');
		$password = $this->ReadPropertyString('password');
		$app_id = $this->ReadPropertyString('app_id');
        $vin = $this->ReadPropertyString('vin');
        $this->SetUpdateIntervall();

        //check user and password
        if ($user == "" || $password == "" || $app_id == "" || $vin == "")
        {
            $this->SetStatus(205); // field must not be empty
        }
        $model = $this->ReadPropertyInteger("model");
        if ($model == 1) // electric
        {
            $this->SendDebug("BMW","electric selected",0);

        }
        if ($model == 2) // hybrid
        {
            $this->SendDebug("BMW","hybrid selected",0);
        }
        if ($model == 3) // standard, no electric
        {
            $this->SendDebug("BMW","standard, no electric selected",0);
        }
        $active_climate = $this->ReadPropertyBoolean("active_climate");
        $active_lock = $this->ReadPropertyBoolean("active_lock");
        $active_flash_headlights = $this->ReadPropertyBoolean("active_flash_headlights");
        $active_vehicle_finder = $this->ReadPropertyBoolean("active_vehicle_finder");
        $active_lock_data = $this->ReadPropertyBoolean("active_lock_data");

        // climate
        if ($active_climate)
        {
            $this->RegisterProfileAssociation("BMW.Start", "Execute", "", "",  0, 0, 0, 0, 1, Array( Array(0, "Start", "", 0x3ADF00) ));
            $this->RegisterVariableInteger("bmw_start_air_conditioner", $this->Translate("start air conditioner"), "BMW.Start", 5);
            $this->EnableAction("bmw_start_air_conditioner");
        }
        else
        {
            $this->UnregisterVariable("bmw_start_air_conditioner");
        }
        if ($active_lock)
        {
            $this->RegisterVariableBoolean("bmw_start_lock", $this->Translate("lock"), "~Switch", 6);
            $this->EnableAction("bmw_start_lock");
        }
        else
        {
            $this->UnregisterVariable("bmw_start_lock");
        }
        if ($active_flash_headlights)
        {
            $this->RegisterProfileAssociation("BMW.Start", "Execute", "", "",  0, 0, 0, 0, 1, Array( Array(0, "Start", "", 0x3ADF00) ));
            $this->RegisterVariableInteger("bmw_start_flash_headlights", $this->Translate("start flash headlights"), "BMW.Start", 7);
            $this->EnableAction("bmw_start_flash_headlights");
        }
        else
        {
            $this->UnregisterVariable("bmw_start_flash_headlights");
        }
        if ($active_vehicle_finder)
        {
            $this->RegisterProfileAssociation("BMW.Start", "Execute", "", "",  0, 0, 0, 0, 1, Array( Array(0, "Start", "", 0x3ADF00) ));
            $this->RegisterVariableInteger("bmw_start_vehicle_finder", $this->Translate("search vehicle"), "BMW.Start", 5);
            $this->EnableAction("bmw_start_vehicle_finder");
        }
        else
        {
            $this->UnregisterVariable("bmw_start_vehicle_finder");
        }
        if ($active_lock_data)
        {
            $this->RegisterVariableBoolean("bmw_doorDriverFront", $this->Translate("door driver front"), "~Lock", 6);
            $this->RegisterVariableBoolean("bmw_doorDriverRear", $this->Translate("door driver rear"), "~Lock", 7);
            $this->RegisterVariableBoolean("bmw_doorPassengerFront", $this->Translate("door passenger front"), "~Lock", 8);
            $this->RegisterVariableBoolean("bmw_doorPassengerRear", $this->Translate("door passenger rear"), "~Lock", 9);
            $this->RegisterVariableBoolean("bmw_windowDriverFront", $this->Translate("window driver front"), "~Lock", 10);
            $this->RegisterVariableBoolean("bmw_windowDriverRear", $this->Translate("window driver rear"), "~Lock", 11);
            $this->RegisterVariableBoolean("bmw_windowPassengerFront", $this->Translate("window passenger front"), "~Lock", 12);
            $this->RegisterVariableBoolean("bmw_windowPassengerRear", $this->Translate("window passenger rear"), "~Lock", 13);
            $this->RegisterVariableBoolean("bmw_trunk", $this->Translate("trunk"), "~Lock", 14);
            $this->RegisterVariableBoolean("bmw_rearWindow", $this->Translate("rear window"), "~Lock", 15);
            $this->RegisterVariableBoolean("bmw_convertibleRoofState", $this->Translate("convertible roof"), "~Lock", 16);
            $this->RegisterVariableBoolean("bmw_hood", $this->Translate("hood"), "~Lock", 17);
            $this->RegisterVariableBoolean("bmw_doorLockState", $this->Translate("door lock state"), "~Lock", 18);
        }
        else
        {
            $this->UnregisterVariable("bmw_doorDriverFront");
            $this->UnregisterVariable("bmw_doorDriverRear");
            $this->UnregisterVariable("bmw_doorPassengerFront");
            $this->UnregisterVariable("bmw_doorPassengerRear");
            $this->UnregisterVariable("bmw_windowDriverFront");
            $this->UnregisterVariable("bmw_windowDriverRear");
            $this->UnregisterVariable("bmw_windowPassengerFront");
            $this->UnregisterVariable("bmw_windowPassengerRear");
            $this->UnregisterVariable("bmw_trunk");
            $this->UnregisterVariable("bmw_rearWindow");
            $this->UnregisterVariable("bmw_convertibleRoofState");
            $this->UnregisterVariable("bmw_hood");
            $this->UnregisterVariable("bmw_doorLockState");
        }
				// Status Aktiv
				$this->SetStatus(102);
	}

    protected function SetUpdateIntervall()
    {
        $interval = ($this->ReadPropertyInteger("UpdateInterval"))*1000*60; // interval min
        $this->SetTimerInterval("BMWTokenUpdate", $interval);
    }

    public function DataUpdate()
    {
        $this->GetVehicleStatus();
    }

    protected function GetMileageUnit()
    {
        $lang = "de";
        if($lang == "de")
        {
            $unit = "km";
        }
        elseif($lang == "eng")
        {
            $unit = "miles";
        }
        else
        {
            $unit = "miles";
        }
        return $unit;
    }

    protected function GetBMWServerURL($area)
    {
        if($area == 1) // Europe
        {
            $url = "https://b2vapi.bmwgroup.com";
        }
        elseif($area == 2) // USA
        {
            $url = "https://b2vapi.bmwgroup.us";
        }
        elseif($area == 2) // China
        {
            $url = "https://b2vapi.bmwgroup.cn:8592";
        }
        else // Rest of World
        {
            $url = "https://b2vapi.bmwgroup.com";
        }

        // Die Adresse ist für die Schweiz. Vermutlich .de anstatt .ch für Deutschland?
        // $api = 'https://www.bmw-connecteddrive.ch/api';
        return $url;
    }

    public function GetToken()
    {
        $user = $this->ReadPropertyString('user');
        $password = $this->ReadPropertyString('password');
        $app_id = $this->ReadPropertyString('app_id');
        $auth_api = 'https://customer.bmwgroup.com/gcdm/oauth/authenticate';
        $postfields = http_build_query(array(
            'username' => $user,
            'password' => $password,
            'client_id' => $app_id,
            'redirect_uri' => 'https://www.bmw-connecteddrive.com/app/default/static/external-dispatch.html',
            'response_type' => 'token',
            'locale' => 'DE-de'
        ));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $auth_api);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_COOKIESESSION, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        curl_close( $ch );


        if(empty($response) || $response === false || !empty($curl_error))
        {
            $this->SendDebug("BMW","Empty answer from Bearerinterface: ".$curl_error,0);
            return false;
        }

        // extract token
        preg_match( '/access_token=([\w\d]+).*token_type=(\w+).*expires_in=(\d+)/', $response, $matches );
        $this->SendDebug("BMW","access_token: ".$matches[1],0);
        $this->SendDebug("BMW","Bearer expires in: ".$matches[3]."s",0);

        // check token type
        if ( empty( $matches[2] ) OR $matches[2] !== 'Bearer' )
        {
            $this->SendDebug("BMW","No remote token received - username or password might be wrong: ".$response,0);
            return false;
        }

        IPS_SetProperty($this->InstanceID, "token", $matches[1]);
        $this->SendDebug("BMW","set access_token: ".$matches[1],0);
        $token_expiration = time() + $matches[3];
        IPS_SetProperty($this->InstanceID, "token_expiration", $token_expiration);
        $this->SendDebug("BMW","set token expiration: ".$token_expiration,0);
        IPS_ApplyChanges($this->InstanceID);
        return $matches[1];
    }

    protected function CheckToken()
    {
        // The token expires_in is in seconds - giving you 8 hours before you have to renew the token.
        $token_expiration = $this->ReadPropertyInteger("token_expiration");
        if (time() > $token_expiration)
        {
            $this->GetToken();
        }
    }

    public function MessageSink($TimeStamp, $SenderID, $Message, $Data)
    {
        IPS_LogMessage(get_class() . '::' . __FUNCTION__,'SenderID: ' . $SenderID . ', Message: ' . $Message . ', Data:'. json_encode($Data));
    }

    public function GetVehicleData()
    {
        $command = "/webapi/v1/user/vehicles/";
        $response = $this->SendBMWAPI($command);
        $data = json_decode($response);
        return $data;
    }

    public function GetVehicleStatus()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = "/webapi/v1/user/vehicles/".$vin."/status";
        $response = $this->SendBMWAPI($command);
        $data = json_decode($response);
        $carinfo = $data->vehicleStatus;
        $current_vin = $carinfo->vin;
        if($vin == $current_vin)
        {
            $mileage = $carinfo->mileage;
            SetValue($this->GetIDForIdent("bmw_mileage"), $mileage);
            $id_doorDriverFront = $this->GetIDForIdent("bmw_doorDriverFront");
            if(isset($id_doorDriverFront))
            {
                $doorDriverFront = $carinfo->doorDriverFront;
                SetValue($this->GetIDForIdent("bmw_doorDriverFront"), $doorDriverFront);
            }
            $id_doorDriverRear = $this->GetIDForIdent("bmw_doorDriverRear");
            if(isset($id_doorDriverRear))
            {
                $doorDriverRear = $carinfo->doorDriverFront;
                SetValue($this->GetIDForIdent("bmw_doorDriverRear"), $doorDriverRear);
            }
            $id_doorPassengerFront = $this->GetIDForIdent("bmw_doorPassengerFront");
            if(isset($id_doorPassengerFront))
            {
                $doorPassengerFront = $carinfo->doorPassengerFront;
                SetValue($this->GetIDForIdent("bmw_doorPassengerFront"), $doorPassengerFront);
            }
            $id_doorPassengerRear = $this->GetIDForIdent("bmw_doorPassengerRear");
            if(isset($id_doorPassengerRear))
            {
                $doorPassengerRear = $carinfo->doorPassengerFront;
                SetValue($this->GetIDForIdent("bmw_doorPassengerRear"), $doorPassengerRear);
            }
            $id_windowDriverFront = $this->GetIDForIdent("bmw_windowDriverFront");
            if(isset($id_windowDriverFront))
            {
                $windowDriverFront = $carinfo->windowDriverFront;
                SetValue($this->GetIDForIdent("bmw_windowDriverFront"), $windowDriverFront);
            }
            $id_windowDriverRear = $this->GetIDForIdent("bmw_windowDriverRear");
            if(isset($id_windowDriverRear))
            {
                $windowDriverRear = $carinfo->windowDriverRear;
                SetValue($this->GetIDForIdent("bmw_windowDriverRear"), $windowDriverRear);
            }
            $id_windowPassengerFront = $this->GetIDForIdent("bmw_windowPassengerFront");
            if(isset($id_windowPassengerFront))
            {
                $windowPassengerFront = $carinfo->windowPassengerFront;
                SetValue($this->GetIDForIdent("bmw_windowPassengerFront"), $windowPassengerFront);
            }
            $id_windowPassengerRear = $this->GetIDForIdent("bmw_windowPassengerRear");
            if(isset($id_windowPassengerRear))
            {
                $windowPassengerRear = $carinfo->windowPassengerRear;
                SetValue($this->GetIDForIdent("bmw_windowPassengerRear"), $windowPassengerRear);
            }
            $id_trunk = $this->GetIDForIdent("bmw_trunk");
            if(isset($id_trunk))
            {
                $trunk = $carinfo->trunk;
                SetValue($this->GetIDForIdent("bmw_trunk"), $trunk);
            }
            $id_rearWindow = $this->GetIDForIdent("bmw_rearWindow");
            if(isset($id_rearWindow))
            {
                $rearWindow = $carinfo->rearWindow;
                SetValue($this->GetIDForIdent("bmw_rearWindow"), $rearWindow);
            }
            $id_convertibleRoofState = $this->GetIDForIdent("bmw_convertibleRoofState");
            if(isset($id_convertibleRoofState))
            {
                $convertibleRoofState = $carinfo->convertibleRoofState;
                SetValue($this->GetIDForIdent("bmw_convertibleRoofState"), $convertibleRoofState);
            }
            $id_hood = $this->GetIDForIdent("bmw_hood");
            if(isset($id_hood))
            {
                $hood = $carinfo->hood;
                SetValue($this->GetIDForIdent("bmw_hood"), $hood);
            }
            $id_doorLockState = $this->GetIDForIdent("bmw_doorLockState");
            if(isset($id_doorLockState))
            {
                $doorLockState = $carinfo->doorLockState;
                SetValue($this->GetIDForIdent("bmw_doorLockState"), $doorLockState);
            }
            $remainingFuel = $carinfo->remainingFuel;
            SetValue($this->GetIDForIdent("bmw_tank_capacity"), $remainingFuel);
        }
        return $data;
    }

    public function GetCarPicture()
    {
        $angle = "0";
        $response = $this->GetCarPictureForAngle($angle);
        return $response;
    }

    public function GetCarPictureForAngle(int $angle)
    {
        $vin = $this->ReadPropertyString('vin');
        $command = "/vehicle/image/v1/' . $vin . '?startAngle=".$angle."&stepAngle=10&width=780";
        $response = $this->SendBMWAPI($command);
        $images = json_decode($response);
        $picture_vin = $images->vin;
        if($vin == $picture_vin)
        {
            $images_angle = $images->angleUrls;
            $picture_angle = $angle;
            foreach($images_angle as $key => $image_angle)
            {

                $angle = $image_angle->angle;
                if($picture_angle == $angle)
                {
                    $picture_url = $image_angle->url;
                }
            }
        }
        else
        {
            $picture_url = false;
        }
        //$HTML = "";
        //SetValue($this->GetIDForIdent("bmw_car_picture"), $HTML);
        return $picture_url;
    }

    public function GetLastTrip()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = "/webapi/v1/user/vehicles/".$vin."/statistics/lastTrip";
        $response = $this->SendBMWAPI($command);
        $data = json_decode($response);
        return $data;
    }

    public function GetChargingTimes()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = "/webapi/v1/user/vehicles/".$vin."/chargingprofile";
        $response = $this->SendBMWAPI($command);
        $chargingtimes = json_decode($response);
        return $chargingtimes;
    }

    public function GetVehicleDestinations()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = "/webapi/v1/user/vehicles/".$vin."/destinations";
        $response = $this->SendBMWAPI($command);
        $destination = json_decode($response);
        return $destination;
    }

    public function GetAllTripDetails()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = "/webapi/v1/user/vehicles/".$vin."/statistics/allTrips";
        $response = $this->SendBMWAPI($command);
        $tripdetails = json_decode($response);
        return $tripdetails;
    }

    // Generate a polyline displaying the predicted range of the vehicle
    public function GetRangeMap()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = "/webapi/v1/user/vehicles/".$vin."/rangemap";
        $response = $this->SendBMWAPI($command);
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
        $command = "/webapi/v1/user/vehicles/".$vin."/rangemap";
        $response = $this->SendBMWAPI($command);
        $soc_data = json_decode($response);
        return $soc_data;
    }

    // Sending information to the car
    protected function GetRequestStatus($service)
    {
        $vin = $this->ReadPropertyString('vin');
        $command = "/webapi/v1/user/vehicles/".$vin."/serviceExecutionStatus?serviceType=".$service;
        $response = $this->SendBMWAPI($command);
        $state = json_decode($response);
        return $state;
    }

    // Instructs the car to perform an action

    protected function PerfomAction($service)
    {
        $vin = $this->ReadPropertyString('vin');
        $command = "/webapi/v1/user/vehicles/".$vin."/".$service;
        $response = $this->SendBMWAPI($command);
        return $response;
    }

    public function InitiateCharging()
    {
        $service = "serviceType=CHARGE_NOW";
        $this->PerfomAction($service);
    }

    public function StartClimateControl()
    {
        $service = "serviceType=CLIMATE_NOW";
        $this->PerfomAction($service);
    }

    public function LockTheDoors()
    {
        $service = "serviceType=DOOR_LOCK";
        $this->PerfomAction($service);
    }

    public function UnlockTheDoors()
    {
        $service = "serviceType=DOOR_UNLOCK";
        $this->PerfomAction($service);
        /*
         * If you recievce an error after DOOR_UNLOCK that looks like {"error":{"code":500,"description":"(SmartPhoneUtil-A-2013) Action is forbidden. secretKnowledge is missing but required!"}}

An addition field must be included

serviceType=DOOR_UNLOCK
bmwSkAnswer=BMW_ACCOUNT_SECURITY_QUESTION_ANSWER
         */
    }

    // If you can't find the vehicle, or need to illuminate something in its vicinity, you can briefly activate the headlights.
    public function FlashHeadlights()
    {
        $service = "serviceType=LIGHT_FLASH&count=2";
        $this->PerfomAction($service);
    }

    /*
    public function ChargingSchedule()
    {
        $service = "serviceType=CHARGING_CONTROL";
        $this->PerfomAction($service);
    }
    */

    public function VehicleFinder()
    {
        $service = "serviceType=VEHICLE_FINDER";
        $this->PerfomAction($service);
    }

    /*
    public function SendPOI()
    {
        $vin = $this->ReadPropertyString('vin');
        $command = "/webapi/v1/user/vehicles/".$vin."/sendpoi";
        //$response = $this->SendBMWAPI($command);
    }
    */

    protected function SendBMWAPI($command)
    {
        $area = $this->ReadPropertyInteger('bmw_server');
        $api = $this->GetBMWServerURL($area);
        $token = $this->ReadPropertyString("token");
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $api . $command );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' , 'Authorization: Bearer ' . $token) );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        // $this->SendDebug("BMW","curl error: ".$curl_error,0);
        curl_close( $ch );
        return $response;
    }
	
	
	public function RequestAction($Ident, $Value)
    {
        switch($Ident) {
            case "bmw_start_air_conditioner":
                $this->StartClimateControl();
				break;
			case "bmw_start_lock":
			    if($Value)
                {
                    $this->LockTheDoors();
                }
                else
                {
                    $this->UnlockTheDoors();
                }
                break;
			case "bmw_start_flash_headlights":
                $this->FlashHeadlights();
                break;
            case "bmw_start_vehicle_finder":
                $this->VehicleFinder();
                break;
            default:
                $this->SendDebug("BMW", "Invalid ident",0);
        }
    }

	protected function GetIPSVersion ()
    {
        $ipsversion = floatval(IPS_GetKernelVersion());
        if($ipsversion < 4.1) // 4.0
        {
            $ipsversion = 0;
        }
        elseif ($ipsversion >= 4.1 && $ipsversion < 4.2) // 4.1
        {
            $ipsversion = 1;
        }
        elseif ($ipsversion >= 4.2 && $ipsversion < 4.3) // 4.2
        {
            $ipsversion = 2;
        }
        elseif ($ipsversion >= 4.3 && $ipsversion < 4.4) // 4.3
        {
            $ipsversion = 3;
        }
        elseif ($ipsversion >= 4.4 && $ipsversion < 5) // 4.4
        {
            $ipsversion = 4;
        }
        else   // 5
        {
            $ipsversion = 5;
        }

        return $ipsversion;
    }

    //Profile
    protected function RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $StepSize, $Digits, $Vartype)
    {

        if(!IPS_VariableProfileExists($Name))
        {
            IPS_CreateVariableProfile($Name, $Vartype); // 0 boolean, 1 int, 2 float, 3 string,
        }
        else
        {
            $profile = IPS_GetVariableProfile($Name);
            if($profile['ProfileType'] != $Vartype)
                $this->SendDebug("BMW:", "Variable profile type does not match for profile ".$Name,0);
        }

        IPS_SetVariableProfileIcon($Name, $Icon);
        IPS_SetVariableProfileText($Name, $Prefix, $Suffix);
        IPS_SetVariableProfileDigits($Name, $Digits); //  Nachkommastellen
        IPS_SetVariableProfileValues($Name, $MinValue, $MaxValue, $StepSize); // string $ProfilName, float $Minimalwert, float $Maximalwert, float $Schrittweite
    }

    protected function RegisterProfileAssociation($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype, $Associations)
    {
        if ( sizeof($Associations) === 0 ){
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
        foreach($Associations as $Association) {
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
        return	'{ '.$formhead.$formelementsend.'],'.$formactions.$formstatus.' }';
    }


    protected function FormHead()
    {
        $form = '"elements":
            [
               { "type": "Label", "label": "select type of BMW" },
               { "type": "Select", "name": "model", "caption": "model",
					"options": [
						{ "label": "'.$this->Translate("electric").'", "value": 1 },
						{ "label": "'.$this->Translate("hybrid").'", "value": 2 },
						{ "label": "'.$this->Translate("standard").'", "value": 3 }
					]
				},
               { "type": "Label", "label": "select area" },
               { "type": "Select", "name": "bmw_server", "caption": "BMW area",
					"options": [
						{ "label": "'.$this->Translate("Europe").'", "value": 1 },
						{ "label": "'.$this->Translate("USA").'", "value": 2 },
						{ "label": "'.$this->Translate("China").'", "value": 3 },
						{ "label": "'.$this->Translate("Rest of the World").'", "value": 4 }
					]
				},
				{ "type": "Label", "label": "BMW Connected Drive login credentials" },
                {
                    "name": "user",
                    "type": "ValidationTextBox",
                    "caption": "User"
                },
				{
                    "name": "password",
                    "type": "ValidationTextBox",
                    "caption": "Password"
                },
                { "type": "Label", "label": "air conditioner control" },
				{
                    "name": "active_climate",
                    "type": "CheckBox",
                    "caption": "air conditioner"
                },
                { "type": "Label", "label": "lock car" },
				{
                    "name": "active_lock",
                    "type": "CheckBox",
                    "caption": "lock car"
                },
                { "type": "Label", "label": "flash headlights" },
				{
                    "name": "active_flash_headlights",
                    "type": "CheckBox",
                    "caption": "flash headlights"
                },
                { "type": "Label", "label": "search vehicle" },
				{
                    "name": "active_vehicle_finder",
                    "type": "CheckBox",
                    "caption": "search vehicle"
                },
                { "type": "Label", "label": "show detailed lock state" },
				{
                    "name": "active_lock_data",
                    "type": "CheckBox",
                    "caption": "detailed lock state"
                },';
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
        return  $form;
    }

    protected function FormStatus()
    {
        $form = '"status":
            [
                {
                    "code": 101,
                    "icon": "inactive",
                    "caption": "Creating instance."
                },
				{
                    "code": 102,
                    "icon": "active",
                    "caption": "BMW accessible."
                },
                {
                    "code": 104,
                    "icon": "inactive",
                    "caption": "interface closed."
                },
                {
                    "code": 204,
                    "icon": "error",
                    "caption": "connection to BMW lost."
                },
				{
                    "code": 205,
                    "icon": "error",
                    "caption": "field must not be empty."
                }
            ]';
        return $form;
    }

}

?>