<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityTriggersRoot resources
 *
 * Available select fields:
 */
class SecurityTriggersRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityTriggersRoot
     */

    /**
     * Select specific SecurityTriggersRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
