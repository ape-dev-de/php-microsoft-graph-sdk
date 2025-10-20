<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectionPolicyBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ProtectionPolicyBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ProtectionPolicyBaseCollectionResponse properties
     * 
     * @param array<string> $select Use ProtectionPolicyBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
