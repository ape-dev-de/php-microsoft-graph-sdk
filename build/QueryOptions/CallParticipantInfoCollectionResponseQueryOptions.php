<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallParticipantInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CallParticipantInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CallParticipantInfoCollectionResponse properties
     * 
     * @param array<string> $select Use CallParticipantInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
