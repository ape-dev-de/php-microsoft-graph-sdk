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
    /**
     * Available select fields for ParticipantJoiningNotification
     */
    public const FIELD_CALL = 'call';

    /**
     * Select specific ParticipantJoiningNotification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
