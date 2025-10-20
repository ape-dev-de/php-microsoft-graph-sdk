<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InstanceResourceAccess resources
 *
 * Available select fields:
 * - permissions
 * - resourceAppId
 */
class InstanceResourceAccessQueryOptions extends QueryOptions
{
    public const FIELD_PERMISSIONS = 'permissions';
    public const FIELD_RESOURCE_APP_ID = 'resourceAppId';

    /**
     * Select specific InstanceResourceAccess properties
     * 
     * @param array<string> $select Use InstanceResourceAccessQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
