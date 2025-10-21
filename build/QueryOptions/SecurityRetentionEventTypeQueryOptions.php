<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionEventType resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - description
 * - displayName
 * - lastModifiedBy
 * - lastModifiedDateTime
 */
class SecurityRetentionEventTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityRetentionEventType
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific SecurityRetentionEventType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
