<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/SmartLightDAO.php");
    

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $lights_status = SmartLightDAO::getLightsStatus()["lights_status"];
            
            return compact("lights_status");
        }
    }