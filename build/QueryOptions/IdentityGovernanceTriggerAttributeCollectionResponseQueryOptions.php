<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTriggerAttributeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityGovernanceTriggerAttributeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityGovernanceTriggerAttributeCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityGovernanceTriggerAttributeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
