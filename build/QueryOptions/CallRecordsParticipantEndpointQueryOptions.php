<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsParticipantEndpoint resources
 *
 * Available select fields:
 */
class CallRecordsParticipantEndpointQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsParticipantEndpoint
     */

    /**
     * Select specific CallRecordsParticipantEndpoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
