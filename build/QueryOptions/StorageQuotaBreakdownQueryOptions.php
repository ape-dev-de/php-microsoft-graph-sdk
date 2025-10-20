<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StorageQuotaBreakdown resources
 *
 * Available select fields:
 * - displayName
 * - manageWebUrl
 * - used
 */
class StorageQuotaBreakdownQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_MANAGE_WEB_URL = 'manageWebUrl';
    public const FIELD_USED = 'used';

    /**
     * Select specific StorageQuotaBreakdown properties
     * 
     * @param array<string> $select Use StorageQuotaBreakdownQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
