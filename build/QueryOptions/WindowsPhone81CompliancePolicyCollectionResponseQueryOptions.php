<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsPhone81CompliancePolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsPhone81CompliancePolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsPhone81CompliancePolicyCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsPhone81CompliancePolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
