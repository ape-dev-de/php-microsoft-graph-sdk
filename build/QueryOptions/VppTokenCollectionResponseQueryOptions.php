<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VppTokenCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class VppTokenCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VppTokenCollectionResponse properties
     * 
     * @param array<string> $select Use VppTokenCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
