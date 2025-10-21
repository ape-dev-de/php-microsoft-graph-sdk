<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Permission resources
 *
 * Available select fields:
 */
class PermissionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Permission
     */

    /**
     * Select specific Permission properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
