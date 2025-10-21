<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityTriggerTypesRoot resources
 *
 * Available select fields:
 */
class SecurityTriggerTypesRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityTriggerTypesRoot
     */

    /**
     * Select specific SecurityTriggerTypesRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
