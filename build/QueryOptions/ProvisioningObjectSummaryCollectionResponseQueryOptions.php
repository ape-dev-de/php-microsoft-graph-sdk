<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisioningObjectSummaryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ProvisioningObjectSummaryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ProvisioningObjectSummaryCollectionResponse properties
     * 
     * @param array<string> $select Use ProvisioningObjectSummaryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
