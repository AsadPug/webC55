<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/StatsDAO.php");

    class IndexAction extends CommonAction {
        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            if (isset($_POST["name"]) && isset($_POST["type"])){
                StatsDAO::save($_POST["name"], $_POST["type"]);
                $_SESSION["inscrit"] = true;
            }
            
            if ($_SESSION["inscrit"] == true){
                $ERROR = "Vous êtes déja inscrit gros cave";
                header("location:stats.php");
				exit;
            }
            
            return compact("ERROR");
        }
    }