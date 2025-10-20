<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallParticipantInfo resources
 *
 * Available select fields:
 * - participant
 */
class CallParticipantInfoQueryOptions extends QueryOptions
{
    public const FIELD_PARTICIPANT = 'participant';

    /**
     * Select specific CallParticipantInfo properties
     * 
     * @param array<string> $select Use CallParticipantInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
