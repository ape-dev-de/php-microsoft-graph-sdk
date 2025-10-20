<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityUserFlowAttributeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityUserFlowAttributeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityUserFlowAttributeCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityUserFlowAttributeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
