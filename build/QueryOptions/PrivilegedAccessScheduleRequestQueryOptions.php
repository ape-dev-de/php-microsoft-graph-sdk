<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessScheduleRequest resources
 *
 * Available select fields:
 * - action
 * - isValidationOnly
 * - justification
 * - scheduleInfo
 * - ticketInfo
 */
class PrivilegedAccessScheduleRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessScheduleRequest
     */
    public const FIELD_ACTION = 'action';
    public const FIELD_IS_VALIDATION_ONLY = 'isValidationOnly';
    public const FIELD_JUSTIFICATION = 'justification';
    public const FIELD_SCHEDULE_INFO = 'scheduleInfo';
    public const FIELD_TICKET_INFO = 'ticketInfo';

    /**
     * Select specific PrivilegedAccessScheduleRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
