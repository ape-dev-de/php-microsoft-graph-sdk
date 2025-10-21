<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ParticipantLeftNotification resources
 *
 * Available select fields:
 */
class ParticipantLeftNotificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ParticipantLeftNotification
     */

    /**
     * Select specific ParticipantLeftNotification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
