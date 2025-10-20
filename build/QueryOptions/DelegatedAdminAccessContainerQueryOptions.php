<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminAccessContainer resources
 *
 * Available select fields:
 * - accessContainerId
 * - accessContainerType
 */
class DelegatedAdminAccessContainerQueryOptions extends QueryOptions
{
    public const FIELD_ACCESS_CONTAINER_ID = 'accessContainerId';
    public const FIELD_ACCESS_CONTAINER_TYPE = 'accessContainerType';

    /**
     * Select specific DelegatedAdminAccessContainer properties
     * 
     * @param array<string> $select Use DelegatedAdminAccessContainerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
