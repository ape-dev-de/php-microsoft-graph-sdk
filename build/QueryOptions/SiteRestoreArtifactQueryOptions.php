<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteRestoreArtifact resources
 *
 * Available select fields:
 * - restoredSiteId
 * - restoredSiteName
 * - restoredSiteWebUrl
 */
class SiteRestoreArtifactQueryOptions extends QueryOptions
{
    public const FIELD_RESTORED_SITE_ID = 'restoredSiteId';
    public const FIELD_RESTORED_SITE_NAME = 'restoredSiteName';
    public const FIELD_RESTORED_SITE_WEB_URL = 'restoredSiteWebUrl';

    /**
     * Select specific SiteRestoreArtifact properties
     * 
     * @param array<string> $select Use SiteRestoreArtifactQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
