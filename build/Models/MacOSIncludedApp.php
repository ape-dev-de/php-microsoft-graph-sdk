<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSIncludedApp
 */
class MacOSIncludedApp
{
    public function __construct(
        /** The bundleId of the app. This maps to the CFBundleIdentifier in the app's bundle configuration. */
        public ?string $bundleId = null,
        /** Contains properties of an included .app in a MacOS app. */
        public ?string $bundleVersion = null
    ) {}
}
