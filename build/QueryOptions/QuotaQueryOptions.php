<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Quota resources
 *
 * Available select fields:
 * - deleted
 * - remaining
 * - state
 * - storagePlanInformation
 * - total
 * - used
 */
class QuotaQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Quota
     */
    public const FIELD_DELETED = 'deleted';
    public const FIELD_REMAINING = 'remaining';
    public const FIELD_STATE = 'state';
    public const FIELD_STORAGE_PLAN_INFORMATION = 'storagePlanInformation';
    public const FIELD_TOTAL = 'total';
    public const FIELD_USED = 'used';

    /**
     * Select specific Quota properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
