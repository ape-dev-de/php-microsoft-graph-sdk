<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamInfo resources
 *
 * Available select fields:
 * - displayName
 * - tenantId
 * - team
 */
class TeamInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamInfo
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_TEAM = 'team';

    /**
     * Select specific TeamInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
