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
    /**
     * Available select fields for DelegatedAdminAccessContainer
     */
    public const FIELD_ACCESS_CONTAINER_ID = 'accessContainerId';
    public const FIELD_ACCESS_CONTAINER_TYPE = 'accessContainerType';

    /**
     * Select specific DelegatedAdminAccessContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
