<?php 

namespace PHPWineAccordion;

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
 
/**
* @copyright (c) 2023 PHPWine Component Accordion Cooked by nielsoffice
*
* MIT License
*
* PHPWine Component Accordion free software: you can redistribute it and/or modify.
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*
* @category   PHPWine Component Accordion
*
*
* @author    Leinner Zednanref <syncdevprojects@gmail.com>
* @license   MIT License
* @link      https://github.com/PHPWine/WineAccordion/tree/main
* @link      https://github.com/PHPWine/WineAccordion/README.md
* @version   v1.0
* @since     11.29.2023
*
*/

class WineAccordion 
extends \PHPWineOptimizedHtml\Doctrine\Accordion
implements \PHPWineOptimizedHtml\Interfaces\AccordionInterface
{

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
  public function menus( 
    array $lists_title = [] 
  ){
  
    return $this->wine_action_menus($lists_title);

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
  public function contents( 
    array $lists_content = [] 
   ) {

    return $this->wine_action_contents( $lists_content );

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
    return $this->wine_action();
  }

}