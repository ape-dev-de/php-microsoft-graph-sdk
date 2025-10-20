<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsParticipantCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CallRecordsParticipantCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CallRecordsParticipantCollectionResponse properties
     * 
     * @param array<string> $select Use CallRecordsParticipantCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
