<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlertHistoryState resources
 *
 * Available select fields:
 * - appId
 * - assignedTo
 * - comments
 * - feedback
 * - status
 * - updatedDateTime
 * - user
 */
class AlertHistoryStateQueryOptions extends QueryOptions
{
    public const FIELD_APP_ID = 'appId';
    public const FIELD_ASSIGNED_TO = 'assignedTo';
    public const FIELD_COMMENTS = 'comments';
    public const FIELD_FEEDBACK = 'feedback';
    public const FIELD_STATUS = 'status';
    public const FIELD_UPDATED_DATE_TIME = 'updatedDateTime';
    public const FIELD_USER = 'user';

    /**
     * Select specific AlertHistoryState properties
     * 
     * @param array<string> $select Use AlertHistoryStateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
