<?php

class Configuration {

    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    function tablesdata() {
        $tables = array(
            "user" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "name" => "varchar:20", "contact" => "varchar:11:unique", "userid" => "varchar:50:unique NOT NULL", "email" => "varchar:50:unique NOT NULL", "password" => "text", "api_key" => "text", "role" => "varchar:50", "blocked" => "int:1:default 0"),
            "service_category" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "title" => "varchar:500", "image" => "varchar:500"),
            "services" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "title" => "varchar:500", "image" => "varchar:500", "content" => "text", "order_now_steps" => "int", "location_id" => "int"),
            "overview" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "title" => "varchar:500", "description" => "text"),
            "process" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "title" => "varchar:500", "description" => "text"),
            "documentsrequired" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "title" => "varchar:500", "description" => "text"),
            "forms" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "title" => "varchar:500", "description" => "text"),
            "faq" => array("id" => "int:1 80-]1: PRIMARY KEY AUTO_INCREMENT", "title" => "varchar:500", "description" => "text"),
            "subcategorycontent" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "title" => "varchar:500", "description" => "text"),
            "location" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "title" => "varchar:500"),
            "location_service" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "location_id" => "int", "service_id" => "int"),
            "step_info" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "title" => "varchar:300"),
            "ordernow_process_fields" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "field_type" => "varchar:200", "value" => "varchar:200"),
            "user_select_fields" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT"),
            "user_order" => array("id" => "int:11: PRIMARY KEY AUTO_INCREMENT", "creation_date" => "timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP", "location_id" => "int","status"=>"varchar:100","remarks"=>"varchar:1000")
        );
        return $tables;
    }

    function tableRelation() {
        $rtable = array(
//            "service_category" =>  "services:cascade:cascade",
//            "services"=>"overview:cascade:cascade",
//            "services"=>"process:cascade:cascade",
//            "services"=>"documentsrequired:cascade:cascade",
//            "services"=>"forms:cascade:cascade",
//            "services"=>"faq:cascade:cascade",
//            "services"=>"step_info:cascade:cascade",
//            "ordernow_process_fields" => "user_select_fields:cascade:cascade",
            "user" => "user_select_fields:cascade:cascade",
//            "user" => "user_order:cascade:cascade",
//            "service_category" => "user_order:cascade:cascade",
//            "services" => "user_order:cascade:cascade",
        );
        return $rtable;
    }

    function configure($create_relate = "creation", $operation = "create") {
        $db = new DB($this->conn);
        ini_set('max_execution_time', 300);
        if ($create_relate == "creation") {
            $info = $db->loadTables($this->tablesdata(), $operation);
        } else if ($create_relate == "relation") {
            $info = $db->relateTable($this->tableRelation());
        }
        return $info;
    }

}
