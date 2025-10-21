<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventPresenterInfo resources
 *
 * Available select fields:
 * - presenterDetails
 */
class VirtualEventPresenterInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventPresenterInfo
     */
    public const FIELD_PRESENTER_DETAILS = 'presenterDetails';

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
