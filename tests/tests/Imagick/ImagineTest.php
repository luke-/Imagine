<?php

/*
 * This file is part of the Imagine package.
 *
 * (c) Bulat Shakirzyanov <mallluhuct@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Imagine\Test\Imagick;

use Imagine\Imagick\DriverInfo;
use Imagine\Imagick\Imagine;
use Imagine\Test\Image\AbstractImagineTest;

/**
 * @group imagick
 */
class ImagineTest extends AbstractImagineTest
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
     * @see \Imagine\Test\Image\AbstractImagineTest::getImagine()
     */
    protected function getImagine()
    {
        return new Imagine();
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Test\Image\AbstractImagineTest::testShouldOpenAWebPImage()
     */
    public function testShouldOpenAWebPImage()
    {
        if (!in_array('WEBP', \Imagick::queryFormats('WEBP'), true)) {
            $this->markTestSkipped('Imagick webp support is not enabled');
        }

        return parent::testShouldOpenAWebPImage();
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Test\Image\AbstractImagineTest::testShouldOpenAAvifImage()
     */
    public function testShouldOpenAAvifImage()
    {
        if (!in_array('AVIF', \Imagick::queryFormats('AVIF'), true)) {
            $this->markTestSkipped('Imagick AVIF support is not enabled');
        }

        return parent::testShouldOpenAAvifImage();
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Test\Image\AbstractImagineTest::testShouldOpenAHeicImage()
     */
    public function testShouldOpenAHeicImage()
    {
        if (!in_array('HEIC', \Imagick::queryFormats('HEIC'), true)) {
            $this->markTestSkipped('Imagick HEIC support is not enabled');
        }

        return parent::testShouldOpenAHeicImage();
    }

    /**
     * {@inheritdoc}
     *
     * @see \Imagine\Test\Image\AbstractImagineTest::testShouldOpenAJxlImage()
     */
    public function testShouldOpenAJxlImage()
    {
        if (!in_array('JXL', \Imagick::queryFormats('JXL'), true)) {
            $this->markTestSkipped('Imagick JXL support is not enabled');
        }

        return parent::testShouldOpenAJxlImage();
    }
}
