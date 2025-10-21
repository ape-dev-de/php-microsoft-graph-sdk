<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectionUnitBase resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - error
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - policyId
 * - status
 */
class ProtectionUnitBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProtectionUnitBase
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_ERROR = 'error';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_POLICY_ID = 'policyId';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific ProtectionUnitBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
