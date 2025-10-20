<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttendeeNotificationInfo resources
 *
 * Available select fields:
 * - phoneNumber
 * - timeZone
 */
class AttendeeNotificationInfoQueryOptions extends QueryOptions
{
    public const FIELD_PHONE_NUMBER = 'phoneNumber';
    public const FIELD_TIME_ZONE = 'timeZone';

    /**
     * Select specific AttendeeNotificationInfo properties
     * 
     * @param array<string> $select Use AttendeeNotificationInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
