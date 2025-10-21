<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveRestoreArtifact
 */
class DriveRestoreArtifact
{
    public function __construct(
        /** The new site identifier if destinationType is new, and the input site ID if the destinationType is inPlace. */
        public ?string $restoredSiteId = null,
        /** The name of the restored site. */
        public ?string $restoredSiteName = null,
        /** The web URL of the restored site. */
        public ?string $restoredSiteWebUrl = null
    ) {}
}
