<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningContentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class LearningContentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific LearningContentCollectionResponse properties
     * 
     * @param array<string> $select Use LearningContentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
