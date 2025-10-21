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
    /**
     * Available select fields for SiteRestoreArtifact
     */
    public const FIELD_RESTORED_SITE_ID = 'restoredSiteId';
    public const FIELD_RESTORED_SITE_NAME = 'restoredSiteName';
    public const FIELD_RESTORED_SITE_WEB_URL = 'restoredSiteWebUrl';

    /**
     * Select specific SiteRestoreArtifact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
