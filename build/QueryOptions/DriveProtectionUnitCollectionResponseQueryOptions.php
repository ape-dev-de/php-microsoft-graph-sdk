<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveProtectionUnitCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DriveProtectionUnitCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DriveProtectionUnitCollectionResponse properties
     * 
     * @param array<string> $select Use DriveProtectionUnitCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
