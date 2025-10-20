<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnmuteParticipantOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnmuteParticipantOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnmuteParticipantOperationCollectionResponse properties
     * 
     * @param array<string> $select Use UnmuteParticipantOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
