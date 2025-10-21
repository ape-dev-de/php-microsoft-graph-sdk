<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventPresenterInfo resources
 *
 * Available select fields:
 */
class VirtualEventPresenterInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventPresenterInfo
     */

    /**
     * Select specific VirtualEventPresenterInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
