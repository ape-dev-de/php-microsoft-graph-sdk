<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RunAsAccountType resources
 *
 * Available select fields:
 */
class RunAsAccountTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RunAsAccountType
     */

    /**
     * Select specific RunAsAccountType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
