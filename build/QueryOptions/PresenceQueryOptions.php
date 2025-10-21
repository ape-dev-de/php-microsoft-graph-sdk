<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Presence resources
 *
 * Available select fields:
 * - activity
 * - availability
 * - outOfOfficeSettings
 * - sequenceNumber
 * - statusMessage
 */
class PresenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Presence
     */
    public const FIELD_ACTIVITY = 'activity';
    public const FIELD_AVAILABILITY = 'availability';
    public const FIELD_OUT_OF_OFFICE_SETTINGS = 'outOfOfficeSettings';
    public const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';
    public const FIELD_STATUS_MESSAGE = 'statusMessage';

    /**
     * Select specific Presence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
