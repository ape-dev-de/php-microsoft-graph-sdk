<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LicenseAssignmentStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class LicenseAssignmentStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific LicenseAssignmentStateCollectionResponse properties
     * 
     * @param array<string> $select Use LicenseAssignmentStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
