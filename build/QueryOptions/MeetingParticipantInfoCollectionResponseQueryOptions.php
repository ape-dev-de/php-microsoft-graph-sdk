<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingParticipantInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MeetingParticipantInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MeetingParticipantInfoCollectionResponse properties
     * 
     * @param array<string> $select Use MeetingParticipantInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
