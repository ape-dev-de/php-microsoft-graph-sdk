<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteProtectionUnitsBulkAdditionJob
 */
class SiteProtectionUnitsBulkAdditionJob
{
    public function __construct(
        /** @var string[] The list of SharePoint site IDs to add to the SharePoint protection policy. */
        public array $siteIds = [],
        /** @var string[] The list of SharePoint site URLs to add to the SharePoint protection policy. */
        public array $siteWebUrls = []
    ) {}
}
