<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FollowupFlag resources
 *
 * Available select fields:
 * - completedDateTime
 * - dueDateTime
 * - flagStatus
 * - startDateTime
 */
class FollowupFlagQueryOptions extends QueryOptions
{
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_DUE_DATE_TIME = 'dueDateTime';
    public const FIELD_FLAG_STATUS = 'flagStatus';
    public const FIELD_START_DATE_TIME = 'startDateTime';

    /**
     * Select specific FollowupFlag properties
     * 
     * @param array<string> $select Use FollowupFlagQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
