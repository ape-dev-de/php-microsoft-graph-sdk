<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetResourceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TargetResourceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TargetResourceCollectionResponse properties
     * 
     * @param array<string> $select Use TargetResourceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
