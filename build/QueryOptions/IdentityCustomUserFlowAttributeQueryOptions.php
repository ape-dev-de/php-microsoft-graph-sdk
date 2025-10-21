<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityCustomUserFlowAttribute resources
 *
 * Available select fields:
 */
class IdentityCustomUserFlowAttributeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityCustomUserFlowAttribute
     */

    /**
     * Select specific IdentityCustomUserFlowAttribute properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
