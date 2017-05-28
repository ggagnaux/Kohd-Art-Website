<?php

    //
    // Carousel Item 
    //
    class CarouselItem {
        private $heading;
        private $content;
        private $displayButton;
        private $buttonText;
        private $buttonLink;
        private $backgroundImage;

        // Constructor
        public function __construct($heading, $content, $displayButton, $buttonText, $buttonLink, $backgroundImage) {
            $this->heading = $heading;
            $this->content = $content;
            $this->displayButton = $displayButton;
            $this->buttonText = $buttonText;
            $this->buttonLink = $buttonLink;
            $this->backgroundImage = $backgroundImage;
        }

        public function GetHeading() { return $this->heading; }
        public function GetContent() { return $this->content; }
        public function GetDisplayButton() { return $this->displayButton; }
        public function GetButtonText() { return $this->buttonText; }
        public function GetButtonLink() { return $this->buttonLink; }
        public function GetBackgroundImage() { return $this->backgroundImage; }
    }
?>