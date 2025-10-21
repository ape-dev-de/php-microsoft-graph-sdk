<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointProtectionPolicy
 */
class SharePointProtectionPolicy
{
    public function __construct(
        /** The rules associated with the SharePoint Protection policy. */
        public array $siteInclusionRules = [],
        /** The protection units (sites) that are protected under the site protection policy. */
        public array $siteProtectionUnits = [],
        /** @var string[]  */
        public array $siteProtectionUnitsBulkAdditionJobs = []
    ) {}
}
