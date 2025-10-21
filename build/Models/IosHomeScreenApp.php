<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenApp
 */
class IosHomeScreenApp
{
    public function __construct(
        /** Name of the app */
        public ?string $displayName = null,
        /** BundleID of the app if isWebClip is false or the URL of a web clip if isWebClip is true. */
        public ?string $bundleID = null
    ) {}
}
