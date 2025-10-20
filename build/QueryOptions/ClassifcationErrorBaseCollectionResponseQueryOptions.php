<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ClassifcationErrorBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ClassifcationErrorBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ClassifcationErrorBaseCollectionResponse properties
     * 
     * @param array<string> $select Use ClassifcationErrorBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
