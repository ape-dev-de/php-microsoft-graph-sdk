<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LicenseAssignmentState resources
 *
 * Available select fields:
 * - assignedByGroup
 * - disabledPlans
 * - error
 * - lastUpdatedDateTime
 * - skuId
 * - state
 */
class LicenseAssignmentStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LicenseAssignmentState
     */
    public const FIELD_ASSIGNED_BY_GROUP = 'assignedByGroup';
    public const FIELD_DISABLED_PLANS = 'disabledPlans';
    public const FIELD_ERROR = 'error';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_SKU_ID = 'skuId';
    public const FIELD_STATE = 'state';

    /**
     * Select specific LicenseAssignmentState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
