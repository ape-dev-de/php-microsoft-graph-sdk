<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTriggerAttribute resources
 *
 * Available select fields:
 * - name
 */
class IdentityGovernanceTriggerAttributeQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';

    /**
     * Select specific IdentityGovernanceTriggerAttribute properties
     * 
     * @param array<string> $select Use IdentityGovernanceTriggerAttributeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
