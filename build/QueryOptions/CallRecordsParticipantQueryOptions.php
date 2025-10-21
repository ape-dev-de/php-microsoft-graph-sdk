<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsParticipant resources
 *
 * Available select fields:
 */
class CallRecordsParticipantQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsParticipant
     */

    /**
     * Select specific CallRecordsParticipant properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
