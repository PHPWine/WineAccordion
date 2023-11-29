<?php 

namespace PHPWineAccordion;

class WineAccordion 
extends \PHPWineOptimizedHtml\Doctrine\Accordion
implements \PHPWineOptimizedHtml\Interfaces\AccordionInterface
{

  public function __construct(array $wine = [])
  {

    var_dump( $wine );
    
    // parent::__construct(
    //   $wine
    // );

  }
    
  public function accordion_menus( array $lists_title = [] ) {}
  public function accordion_contents( array $lists_content = [] ) {}
  public function wine_accordion() {}

}