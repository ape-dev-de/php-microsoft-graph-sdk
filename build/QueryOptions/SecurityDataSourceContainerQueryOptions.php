<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDataSourceContainer resources
 *
 * Available select fields:
 * - createdDateTime
 * - displayName
 * - holdStatus
 * - lastModifiedDateTime
 * - releasedDateTime
 * - status
 */
class SecurityDataSourceContainerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDataSourceContainer
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_HOLD_STATUS = 'holdStatus';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_RELEASED_DATE_TIME = 'releasedDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific SecurityDataSourceContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
