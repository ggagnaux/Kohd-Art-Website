<?php
    //
    // Project Item 
    //
    class ProjectItem {
        private $title;
        private $client;
        private $description;
        private $technologiesused;
        private $image;
        private $url;

        // Constructor
        public function __construct($title, $client, $description, $technologiesused, $image, $url) {
            $this->title = $title;
            $this->client = $client;
            $this->description = $description;
            $this->technologiesused = $technologiesused;
            $this->image = $image;
            $this->url = $url;
        }

        public function GetTitle() { return $this->title; }
        public function GetClient() { return $this->client; }
        public function GetDescription() { return $this->description; }
        public function GetTechnologiesUsed() { return $this->technologiesused; }
        public function GetImage() { return $this->image; }
        public function GetUrl() { return $this->url; }
    }
?>