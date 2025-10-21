<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteProtectionUnit
 */
class SiteProtectionUnit
{
    public function __construct(
        /** Unique identifier of the SharePoint site. */
        public ?string $siteId = null,
        /** Name of the SharePoint site. */
        public ?string $siteName = null,
        /** The web URL of the SharePoint site. */
        public ?string $siteWebUrl = null
    ) {}
}
