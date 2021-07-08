<?php

namespace Basilicom\ThumbnailBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;

class BasilicomThumbnailBundle extends AbstractPimcoreBundle
{
    use PackageVersionTrait;

    const PACKAGE_NAME = 'mackrais/thumbnail-bundle';

    protected function getComposerPackageName(): string
    {
        return self::PACKAGE_NAME;
    }

    public function getJsPaths()
    {
        return [
            '/bundles/basilicomthumbnail/js/pimcore/startup.js'
        ];
    }

}
