<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InstallState resources
 *
 * Available select fields:
 */
class InstallStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InstallState
     */

    /**
     * Select specific InstallState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
