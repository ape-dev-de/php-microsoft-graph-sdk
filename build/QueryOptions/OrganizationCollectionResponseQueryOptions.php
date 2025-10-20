<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OrganizationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OrganizationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OrganizationCollectionResponse properties
     * 
     * @param array<string> $select Use OrganizationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
