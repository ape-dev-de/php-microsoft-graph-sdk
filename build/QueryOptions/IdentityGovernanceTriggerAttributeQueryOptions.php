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
    /**
     * Available select fields for IdentityGovernanceTriggerAttribute
     */
    public const FIELD_NAME = 'name';

    /**
     * Select specific IdentityGovernanceTriggerAttribute properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
