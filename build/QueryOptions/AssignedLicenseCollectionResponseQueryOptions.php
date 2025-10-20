<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignedLicenseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AssignedLicenseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AssignedLicenseCollectionResponse properties
     * 
     * @param array<string> $select Use AssignedLicenseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
