<?php 

namespace PHPWineAccordion;

class WineAccordion 
extends \PHPWineOptimizedHtml\Doctrine\Accordion
implements \PHPWineOptimizedHtml\Interfaces\AccordionInterface
{

  protected $label;
  protected $content;

  public function __construct(array $wine = [])
  {

    parent::__construct(
      $wine
    );

  /**
   * --------------------------------------------------------------------------------------------
   * @condition
   * @wine_compare function
   * -------------------------------------------------------------------------------------------- 
   * check current key and validate if true attributes property 
   * 
   * @Defined : return : attemp invalid key! 
   * @since: v1.0 doctrine
   * @since: v2.5.0 wine
   * DT: 11.12.2023 */
  if ( 
    !wine_compare(
 
       $this->icon,
     
      'COMPONENT_REGISTERED_KEY_ACCORDION') 
   ) {
   throw new \Exception("attempt invalid key : ".$this->icon."!");
   exit;
  }
  
  /**
   * --------------------------------------------------------------------------------------------
   * @condition
   * @wine_compare function
   * -------------------------------------------------------------------------------------------- 
   * check current key and validate if true attributes property 
   * 
   * @Defined : return : attemp invalid key! 
   * @since: v1.0 doctrine
   * @since: v2.5.0 wine
   * DT: 11.12.2023 */
  if ( 
    !wine_compare(
 
       $this->prefix,
     
      'COMPONENT_REGISTERED_KEY_PREFIX') 
   ) {
   throw new \Exception("attempt invalid key : ".$this->prefix."!");
   exit;
  }

  /**
   * --------------------------------------------------------------------------------------------
   * @condition
   * @wine_compare function
   * -------------------------------------------------------------------------------------------- 
   * check current key and validate if true attributes property 
   * 
   * @Defined : return : attemp invalid key! 
   * @since: v1.0 doctrine
   * @since: v2.5.0 wine
   * DT: 11.12.2023 */
  if ( 
    !wine_compare(
 
       $this->label,
     
      'COMPONENT_REGISTERED_KEY_LABEL_ACCORDION') 
   ) {
   throw new \Exception("attempt invalid key : ".$this->label."!");
   exit;
  }

  /**
   * --------------------------------------------------------------------------------------------
   * @condition
   * @wine_compare function
   * -------------------------------------------------------------------------------------------- 
   * check current key and validate if true attributes property 
   * 
   * @Defined : return : attemp invalid key! 
   * @since: v1.0 doctrine
   * @since: v2.5.0 wine
   * DT: 11.12.2023 */
  if ( 
    !wine_compare(
 
       $this->content,
     
      'COMPONENT_REGISTERED_KEY_CONTENTS_ACCORDION') 
   ) {
   throw new \Exception("attempt invalid key : ".$this->content."!");
   exit;
  }


  }
   
  /**
   * --------------------------------------------------------------------------------------------
   * @method
   * @public  menu title or label for accordion
   * -------------------------------------------------------------------------------------------- 
   * set list of title label for menu list accordion 
   * 
   * @Defined : return list of label for menu
   * @since: v1.0 doctrine
   * @since: v2.5.0 wine
   * DT: 11.29.2023 */
  public function menus( array $lists_title = [] ) {
  
    $this->label = $this->wine_action_menus($lists_title);
    return $this;

  }

  /**
   * --------------------------------------------------------------------------------------------
   * @method
   * @public  contents title or label for accordion
   * -------------------------------------------------------------------------------------------- 
   * set list of content value for content list accordion 
   * 
   * @Defined : return list of label for contents
   * @since: v1.0 doctrine
   * @since: v2.5.0 wine
   * DT: 11.29.2023 */
  public function contents( array $lists_content = [] ) {

    $this->content = $this->wine_action_contents( $lists_content );
    return $this;

  }

  /**
   * --------------------------------------------------------------------------------------------
   * @method
   * @public  chaining hook to get accordion
   * -------------------------------------------------------------------------------------------- 
   * get accordion 
   * 
   * @Defined : accordion hook
   * @since: v1.0 doctrine
   * @since: v2.5.0 wine
   * DT: 11.29.2023 */
  public function accordion() {
    return $this->label . $this->content;
  }

}