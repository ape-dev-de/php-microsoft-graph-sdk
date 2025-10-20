<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityCustomUserFlowAttributeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityCustomUserFlowAttributeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityCustomUserFlowAttributeCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityCustomUserFlowAttributeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
