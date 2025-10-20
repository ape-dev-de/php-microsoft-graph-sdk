<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IncomingContext resources
 *
 * Available select fields:
 * - observedParticipantId
 * - onBehalfOf
 * - sourceParticipantId
 * - transferor
 */
class IncomingContextQueryOptions extends QueryOptions
{
    public const FIELD_OBSERVED_PARTICIPANT_ID = 'observedParticipantId';
    public const FIELD_ON_BEHALF_OF = 'onBehalfOf';
    public const FIELD_SOURCE_PARTICIPANT_ID = 'sourceParticipantId';
    public const FIELD_TRANSFEROR = 'transferor';

    /**
     * Select specific IncomingContext properties
     * 
     * @param array<string> $select Use IncomingContextQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
