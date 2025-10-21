<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventPresenter resources
 *
 * Available select fields:
 */
class VirtualEventPresenterQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventPresenter
     */

    /**
     * Select specific VirtualEventPresenter properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
