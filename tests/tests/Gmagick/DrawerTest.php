<?php

/*
 * This file is part of the Imagine package.
 *
 * (c) Bulat Shakirzyanov <mallluhuct@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Imagine\Test\Gmagick;

use Imagine\Gmagick\DriverInfo;
use Imagine\Gmagick\Imagine;
use Imagine\Test\Draw\AbstractDrawerTest;

/**
 * @group gmagick
 */
class DrawerTest extends AbstractDrawerTest
{
    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Driver\InfoProvider::getDriverInfo()
     */
    public static function getDriverInfo($required = true)
    {
        return DriverInfo::get($required);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Test\Draw\AbstractDrawerTest::getImagine()
     */
    protected function getImagine()
    {
        return new Imagine();
    }
}
