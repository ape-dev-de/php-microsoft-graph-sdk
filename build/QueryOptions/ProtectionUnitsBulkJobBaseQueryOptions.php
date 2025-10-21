<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectionUnitsBulkJobBase resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - displayName
 * - error
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - status
 */
class ProtectionUnitsBulkJobBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProtectionUnitsBulkJobBase
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ERROR = 'error';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific ProtectionUnitsBulkJobBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
