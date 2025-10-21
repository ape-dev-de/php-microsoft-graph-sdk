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
    /**
     * Available select fields for DeltaParticipants
     */
    public const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';
    public const FIELD_PARTICIPANTS = 'participants';

    /**
     * Select specific DeltaParticipants properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
