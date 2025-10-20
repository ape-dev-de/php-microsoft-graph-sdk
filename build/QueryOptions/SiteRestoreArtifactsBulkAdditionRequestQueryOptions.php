<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteRestoreArtifactsBulkAdditionRequest resources
 *
 * Available select fields:
 * - siteIds
 * - siteWebUrls
 */
class SiteRestoreArtifactsBulkAdditionRequestQueryOptions extends QueryOptions
{
    public const FIELD_SITE_IDS = 'siteIds';
    public const FIELD_SITE_WEB_URLS = 'siteWebUrls';

    /**
     * Select specific SiteRestoreArtifactsBulkAdditionRequest properties
     * 
     * @param array<string> $select Use SiteRestoreArtifactsBulkAdditionRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
