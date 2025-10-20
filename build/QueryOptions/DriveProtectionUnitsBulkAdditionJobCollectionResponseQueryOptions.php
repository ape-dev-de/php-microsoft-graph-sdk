<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveProtectionUnitsBulkAdditionJobCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DriveProtectionUnitsBulkAdditionJobCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DriveProtectionUnitsBulkAdditionJobCollectionResponse properties
     * 
     * @param array<string> $select Use DriveProtectionUnitsBulkAdditionJobCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
