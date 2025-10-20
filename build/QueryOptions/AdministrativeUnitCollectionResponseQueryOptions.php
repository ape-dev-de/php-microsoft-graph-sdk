<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AdministrativeUnitCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AdministrativeUnitCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AdministrativeUnitCollectionResponse properties
     * 
     * @param array<string> $select Use AdministrativeUnitCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
