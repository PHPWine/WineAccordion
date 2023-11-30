<?php 

namespace PHPWineAccordion;

ini_set("\x64\151\x73\160\154\141\171\x5f\145\162\x72\x6f\162\x73", 1);
ini_set(
    "\x64\151\x73\x70\x6c\141\x79\x5f\163\x74\x61\x72\x74\x75\x70\137\x65\162\x72\x6f\x72\x73",
    1
);
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

class WineAccordion extends \PHPWineOptimizedHtml\Doctrine\Accordion implements
    \PHPWineOptimizedHtml\Interfaces\AccordionInterface
{
    public function __construct(array $wine = [])
    {
        parent::__construct($wine);
        if (
            !wine_compare(
                $this->icon,
                "\x43\117\115\120\117\116\x45\x4e\x54\x5f\122\105\107\111\x53\x54\105\x52\105\x44\137\113\105\x59\x5f\101\103\103\x4f\x52\x44\111\x4f\x4e"
            )
        ) {
            throw new \Exception(
                "\141\x74\164\x65\155\160\164\40\x69\156\166\141\x6c\151\144\x20\153\145\x79\x20\x3a\x20" .
                    $this->icon .
                    "\x21"
            );
            die();
        }
        if (
            !wine_compare(
                $this->prefix,
                "\x43\x4f\x4d\120\117\x4e\x45\x4e\x54\137\x52\105\x47\x49\x53\124\x45\x52\105\104\x5f\x4b\105\131\x5f\120\x52\x45\x46\x49\130"
            )
        ) {
            throw new \Exception(
                "\x61\x74\x74\x65\x6d\160\164\40\151\156\x76\141\154\151\144\40\153\145\x79\x20\72\40" .
                    $this->prefix .
                    "\41"
            );
            die();
        }
    }
    public function accordion()
    {
        return $this->wine_action();
    }
}
