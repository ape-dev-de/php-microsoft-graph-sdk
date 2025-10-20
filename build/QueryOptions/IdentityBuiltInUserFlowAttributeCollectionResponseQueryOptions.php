<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityBuiltInUserFlowAttributeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityBuiltInUserFlowAttributeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityBuiltInUserFlowAttributeCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityBuiltInUserFlowAttributeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
