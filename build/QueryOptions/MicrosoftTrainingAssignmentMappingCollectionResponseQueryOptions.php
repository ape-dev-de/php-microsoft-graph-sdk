<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftTrainingAssignmentMappingCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MicrosoftTrainingAssignmentMappingCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MicrosoftTrainingAssignmentMappingCollectionResponse properties
     * 
     * @param array<string> $select Use MicrosoftTrainingAssignmentMappingCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
