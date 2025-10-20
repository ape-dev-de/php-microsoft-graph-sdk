<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventSettings resources
 *
 * Available select fields:
 * - isAttendeeEmailNotificationEnabled
 */
class VirtualEventSettingsQueryOptions extends QueryOptions
{
    public const FIELD_IS_ATTENDEE_EMAIL_NOTIFICATION_ENABLED = 'isAttendeeEmailNotificationEnabled';

    /**
     * Select specific VirtualEventSettings properties
     * 
     * @param array<string> $select Use VirtualEventSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
