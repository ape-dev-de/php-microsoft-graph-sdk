<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApplicationType resources
 *
 * Available select fields:
 */
class ApplicationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ApplicationType
     */

    /**
     * Select specific ApplicationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
