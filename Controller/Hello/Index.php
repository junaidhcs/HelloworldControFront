<?php 
namespace Mytask\HelloworldControFront\Block; 

use Magento\Framework\View\Element\Template;                             
 class Hello extends Template
    { 
        public function getText()
        { 
            return "Hello World"; 
         }
    }
