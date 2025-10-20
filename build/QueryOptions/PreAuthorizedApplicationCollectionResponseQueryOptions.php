<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PreAuthorizedApplicationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PreAuthorizedApplicationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PreAuthorizedApplicationCollectionResponse properties
     * 
     * @param array<string> $select Use PreAuthorizedApplicationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
