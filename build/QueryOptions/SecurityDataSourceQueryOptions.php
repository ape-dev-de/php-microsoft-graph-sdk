<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDataSource resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - displayName
 * - holdStatus
 */
class SecurityDataSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDataSource
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_HOLD_STATUS = 'holdStatus';

    /**
     * Select specific SecurityDataSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
