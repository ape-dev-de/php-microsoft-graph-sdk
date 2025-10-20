<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceCustomTaskExtensionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityGovernanceCustomTaskExtensionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityGovernanceCustomTaskExtensionCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityGovernanceCustomTaskExtensionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
