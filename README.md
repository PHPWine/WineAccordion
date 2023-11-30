# WineAccordion
WineAccordion a collection snippet for PHPWine v2.5.0 (these features are just added safe to migrate)

```PHP
/* Installtion */
composer require phpwine/wineaccordion 
```

```PHP
  /**
   * --------------------------------------------------------------------------------------------
   * @method accordion
   * -------------------------------------------------------------------------------------------- 
   * This method is a hook to execute the new instance of accordion 
   * 
   * $wine = new WineAccordion([
   *  prefix => 'wine_',
   *  icon => [
   *    'position' => 'right', // right or Left you can also top and bottom via css flex : direction
   *    'default'  => '+',     // default 
   *    'clicked'  => 'X',     // after clicked icon
   *   ],
   *   accordion => (array) $assoc_array
   * ]) 
   * 
   * $wine->accordion();
   * 
   * Make you when you query your data from your Model to Controller it is associated array data to be able to 
   * iterrate the value into accordion
   * 
   * $assoc_array: This variable is a associated of arrays of data 
   * ex.$datas = [
   *   'title'  => 'content',
   *   'menu 2' => 'content 2'
   *   
   * ]
   * 
   * PREVIEW: 
   * 
   * <div class="wine_list-item" id="one">
   *  <span class="wine_one">Only</span>
   *  <span class="wine_icon-left done">+</span>
   *  <span class="wine_icon-left cone" style="display: none;">X</span>
   * </div>
   * <div class="content" style="display: none;">Fear</div>
   * 
   *
   * HOOKS:
   * 
   * function top_defualt_wine_one() { return "icon Top"; }
   * function bottom_defualt_wine_one() { return wine(span,"icon Bottom");}
   * 
   * function top_clicked_wine_one() { return "icon Top clicked"; }
   * function bottom_clicked_wine_one() { return "icon Bottom clicked";}
   * 
   * function Only() { return "One"; }
   **/
   
   Source: https://github.com/PHPWine/PHPWine/blob/main/src/Interfaces/AccordionInterface.php  

```
