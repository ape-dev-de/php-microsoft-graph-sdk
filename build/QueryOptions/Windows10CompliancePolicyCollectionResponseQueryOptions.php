<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10CompliancePolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Windows10CompliancePolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Windows10CompliancePolicyCollectionResponse properties
     * 
     * @param array<string> $select Use Windows10CompliancePolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
