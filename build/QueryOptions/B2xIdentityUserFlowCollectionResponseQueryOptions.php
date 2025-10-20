<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for B2xIdentityUserFlowCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class B2xIdentityUserFlowCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific B2xIdentityUserFlowCollectionResponse properties
     * 
     * @param array<string> $select Use B2xIdentityUserFlowCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
