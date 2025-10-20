<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedStorageQuota resources
 *
 * Available select fields:
 * - deleted
 * - manageWebUrl
 * - remaining
 * - state
 * - total
 * - used
 * - services
 */
class UnifiedStorageQuotaQueryOptions extends QueryOptions
{
    public const FIELD_DELETED = 'deleted';
    public const FIELD_MANAGE_WEB_URL = 'manageWebUrl';
    public const FIELD_REMAINING = 'remaining';
    public const FIELD_STATE = 'state';
    public const FIELD_TOTAL = 'total';
    public const FIELD_USED = 'used';
    public const FIELD_SERVICES = 'services';

    /**
     * Select specific UnifiedStorageQuota properties
     * 
     * @param array<string> $select Use UnifiedStorageQuotaQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
