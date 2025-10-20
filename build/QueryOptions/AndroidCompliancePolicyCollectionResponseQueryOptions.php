<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidCompliancePolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AndroidCompliancePolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AndroidCompliancePolicyCollectionResponse properties
     * 
     * @param array<string> $select Use AndroidCompliancePolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
