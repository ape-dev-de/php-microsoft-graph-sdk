<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventPresenterCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class VirtualEventPresenterCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VirtualEventPresenterCollectionResponse properties
     * 
     * @param array<string> $select Use VirtualEventPresenterCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
