<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityLabelsRoot resources
 *
 * Available select fields:
 */
class SecurityLabelsRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityLabelsRoot
     */

    /**
     * Select specific SecurityLabelsRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
