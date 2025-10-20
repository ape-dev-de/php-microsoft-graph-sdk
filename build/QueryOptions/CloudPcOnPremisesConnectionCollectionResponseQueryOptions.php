<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcOnPremisesConnectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CloudPcOnPremisesConnectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CloudPcOnPremisesConnectionCollectionResponse properties
     * 
     * @param array<string> $select Use CloudPcOnPremisesConnectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
