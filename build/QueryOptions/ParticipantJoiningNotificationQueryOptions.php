<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ParticipantJoiningNotification resources
 *
 * Available select fields:
 * - call
 */
class ParticipantJoiningNotificationQueryOptions extends QueryOptions
{
    public const FIELD_CALL = 'call';

    /**
     * Select specific ParticipantJoiningNotification properties
     * 
     * @param array<string> $select Use ParticipantJoiningNotificationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
