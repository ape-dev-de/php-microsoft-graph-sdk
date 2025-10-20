<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectionUnitBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ProtectionUnitBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ProtectionUnitBaseCollectionResponse properties
     * 
     * @param array<string> $select Use ProtectionUnitBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
