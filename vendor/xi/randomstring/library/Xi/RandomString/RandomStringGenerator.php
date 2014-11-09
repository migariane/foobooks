<?php

/**
 * This file is part of the Xi Filelib package.
 *
 * For copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xi\RandomString;

/**
 * Random string generator
 */
class RandomStringGenerator
{
    /**
     * @var string Character list
     */
    private $charlist;

    /**
     * @param string $charlist
     */
    public function __construct($charlist = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?")
    {
        $this->charlist = $charlist;
    }

    /**
     * Generates a random string of defined length
     *
     * @param $length
     * @return string
     */
    public function generate($length)
    {
        $i = 0;
        $random = "";
        while ($i < $length) {
            $random .= $this->charlist{mt_rand(0, (strlen($this->charlist) - 1))};
            $i++;
        }
        return $random;
    }

}
