# WineAccordion
WineAccordion a collection snippet for PHPWine v2.5.0 (these features are just added safe to migrate)

```PHP
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
   * HOOKS:
   * 
   * ATTR: @method
   * public function attr_prefix_awssscca() {...}
   * 
   * VALUE: @method 
   * public function prefix_awssscca() {...}
   * 
   * TOP and BOTTOM @function
   * function top_prefix_awssscca() {...}
   * function bottom_prefix_awssscca() {...}
   * 
   * @Defined : execute new instance accordion
   * @since: v1.0 doctrine
   * @since: v2.5.0 wine */
```
