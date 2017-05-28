<?php
    //
    // Menu Item 
    //
    class MenuItem {

        private $enabled;
        private $visible;
        private $name;
        private $type;
        private $label;
        private $url;
        private $linkTarget;
        private $menuitems; // Array of menu items

        // Constructor
        public function __construct($enabled, $visible, $name, $type, $label, $url, $linkTarget, $menuitems) {
            $this->enabled = $enabled;
            $this->visible = $visible;
            $this->name = $name;
            $this->type = $type;
            $this->label = $label;
            $this->url = $url;
            $this->linkTarget = $linkTarget;
            $this->menuitems = $menuitems;
        }

        // Note: If enabled == true, then visible automatically defaults to true 
        // This is for when the menu item is actually rendered
        public function IsEnabled() { return $this->enabled; }
        public function IsVisible() {
            if ($this->IsEnabled()) {
                return true;
            } else { 
                return $this->visible;
            } 
        }

        public function GetName() { return $this->name; }
        public function GetType() { return $this->type; }
        public function GetLabel() { return $this->label; }
        public function GetUrl() { return $this->url; }
        public function GetMenuItems() { return $this->menuitems; }
        public function GetLinkTarget() { return $this->linkTarget; }
    }
?>