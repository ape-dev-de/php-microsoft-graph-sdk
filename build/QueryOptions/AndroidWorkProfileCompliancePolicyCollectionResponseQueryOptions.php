<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidWorkProfileCompliancePolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AndroidWorkProfileCompliancePolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AndroidWorkProfileCompliancePolicyCollectionResponse properties
     * 
     * @param array<string> $select Use AndroidWorkProfileCompliancePolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
