<?php
/*************************************************************************************/
/* This file is part of the RainbowPHP package. If you think this file is lost,      */
/* please send it to anyone kind enough to take care of it. Thank you.               */
/*                                                                                   */
/* email : bperche9@gmail.com                                                        */
/* web : http://www.benjaminperche.fr                                                */
/*                                                                                   */
/* For the full copyright and license information, please view the LICENSE.txt       */
/* file that was distributed with this source code.                                  */
/*************************************************************************************/

namespace RainbowPHP\DataProvider;

/**
 * Interface DataProviderInterface
 * @package RainbowPHP\DataProvider
 * @author Benjamin Perche <bperche9@gmail.com>
 */
interface DataProviderInterface
{
    /**
     * @return mixed[]|\Iterator|\Generator Then current generated value
     *
     * It must return null when generation is finish
     */
    public function generate();
}
