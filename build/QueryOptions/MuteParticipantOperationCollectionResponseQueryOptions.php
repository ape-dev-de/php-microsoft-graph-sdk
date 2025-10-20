<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MuteParticipantOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MuteParticipantOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MuteParticipantOperationCollectionResponse properties
     * 
     * @param array<string> $select Use MuteParticipantOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
