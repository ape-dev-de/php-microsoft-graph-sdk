<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignedTrainingInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AssignedTrainingInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AssignedTrainingInfoCollectionResponse properties
     * 
     * @param array<string> $select Use AssignedTrainingInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
