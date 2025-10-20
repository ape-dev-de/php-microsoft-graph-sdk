<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeltaParticipants resources
 *
 * Available select fields:
 * - sequenceNumber
 * - participants
 */
class DeltaParticipantsQueryOptions extends QueryOptions
{
    public const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';
    public const FIELD_PARTICIPANTS = 'participants';

    /**
     * Select specific DeltaParticipants properties
     * 
     * @param array<string> $select Use DeltaParticipantsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
