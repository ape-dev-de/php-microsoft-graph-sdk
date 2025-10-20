<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScheduleChangeRequest resources
 *
 * Available select fields:
 * - assignedTo
 * - managerActionDateTime
 * - managerActionMessage
 * - managerUserId
 * - senderDateTime
 * - senderMessage
 * - senderUserId
 * - state
 */
class ScheduleChangeRequestQueryOptions extends QueryOptions
{
    public const FIELD_ASSIGNED_TO = 'assignedTo';
    public const FIELD_MANAGER_ACTION_DATE_TIME = 'managerActionDateTime';
    public const FIELD_MANAGER_ACTION_MESSAGE = 'managerActionMessage';
    public const FIELD_MANAGER_USER_ID = 'managerUserId';
    public const FIELD_SENDER_DATE_TIME = 'senderDateTime';
    public const FIELD_SENDER_MESSAGE = 'senderMessage';
    public const FIELD_SENDER_USER_ID = 'senderUserId';
    public const FIELD_STATE = 'state';

    /**
     * Select specific ScheduleChangeRequest properties
     * 
     * @param array<string> $select Use ScheduleChangeRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
