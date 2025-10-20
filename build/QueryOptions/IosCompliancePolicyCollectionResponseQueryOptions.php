<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosCompliancePolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosCompliancePolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosCompliancePolicyCollectionResponse properties
     * 
     * @param array<string> $select Use IosCompliancePolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
