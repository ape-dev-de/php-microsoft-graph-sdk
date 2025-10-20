<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ParticipantLeftNotification resources
 *
 * Available select fields:
 * - participantId
 * - call
 */
class ParticipantLeftNotificationQueryOptions extends QueryOptions
{
    public const FIELD_PARTICIPANT_ID = 'participantId';
    public const FIELD_CALL = 'call';

    /**
     * Select specific ParticipantLeftNotification properties
     * 
     * @param array<string> $select Use ParticipantLeftNotificationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
