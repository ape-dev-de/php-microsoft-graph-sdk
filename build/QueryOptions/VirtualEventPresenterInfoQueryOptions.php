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
    public const FIELD_PRESENTER_DETAILS = 'presenterDetails';

    /**
     * Select specific VirtualEventPresenterInfo properties
     * 
     * @param array<string> $select Use VirtualEventPresenterInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
