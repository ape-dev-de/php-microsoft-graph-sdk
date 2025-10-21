<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteRestoreArtifactsBulkAdditionRequest
 */
class SiteRestoreArtifactsBulkAdditionRequest
{
    public function __construct(
        /** @var string[] The list of SharePoint site IDs that are added to the corresponding SharePoint restore session in a bulk operation. */
        public array $siteIds = [],
        /** @var string[] The list of SharePoint site URLs that are added to the corresponding SharePoint restore session in a bulk operation. */
        public array $siteWebUrls = []
    ) {}
}
