<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteRestoreArtifact
 */
class SiteRestoreArtifact
{
    public function __construct(
        /** The new site identifier if the value of the destinationType property is new, and the existing site ID if the value is inPlace. */
        public ?string $restoredSiteId = null,
        /** The name of the restored site. */
        public ?string $restoredSiteName = null,
        /** The web URL of the restored site. */
        public ?string $restoredSiteWebUrl = null
    ) {}
}
