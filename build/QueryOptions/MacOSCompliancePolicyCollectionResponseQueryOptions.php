<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSCompliancePolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MacOSCompliancePolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MacOSCompliancePolicyCollectionResponse properties
     * 
     * @param array<string> $select Use MacOSCompliancePolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
