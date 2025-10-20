<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningProviderCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class LearningProviderCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific LearningProviderCollectionResponse properties
     * 
     * @param array<string> $select Use LearningProviderCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
