<?php

/**
 * Class Magentotutorial_Helloworld_IndexController
 */
class Magentotutorial_Helloworld_MessagesController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        echo 'Hello Index! I\'m in Messages controller';
    }

    public function goodbyeAction() {
        echo 'Another Goodbye';
    }
}
