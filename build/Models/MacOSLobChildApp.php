<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSLobChildApp
 */
class MacOSLobChildApp
{
    public function __construct(
        /** The build number of the app. */
        public ?string $buildNumber = null,
        /** The bundleId of the app. */
        public ?string $bundleId = null,
        /** The version number of the app. */
        public ?string $versionNumber = null
    ) {}
}
