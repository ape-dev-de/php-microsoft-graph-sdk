<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityUserFlowAttributeAssignment resources
 *
 * Available select fields:
 */
class IdentityUserFlowAttributeAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityUserFlowAttributeAssignment
     */

    /**
     * Select specific IdentityUserFlowAttributeAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
