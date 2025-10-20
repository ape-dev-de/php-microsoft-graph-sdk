<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExcludeTargetCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExcludeTargetCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExcludeTargetCollectionResponse properties
     * 
     * @param array<string> $select Use ExcludeTargetCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
