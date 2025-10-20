<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityUserFlowAttributeAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityUserFlowAttributeAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityUserFlowAttributeAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityUserFlowAttributeAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
