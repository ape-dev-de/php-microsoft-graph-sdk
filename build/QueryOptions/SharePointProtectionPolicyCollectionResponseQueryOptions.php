<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharePointProtectionPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SharePointProtectionPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SharePointProtectionPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use SharePointProtectionPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
