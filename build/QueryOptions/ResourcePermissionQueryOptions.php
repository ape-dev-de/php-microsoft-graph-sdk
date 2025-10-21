<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourcePermission resources
 *
 * Available select fields:
 * - type
 * - value
 */
class ResourcePermissionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResourcePermission
     */
    public const FIELD_TYPE = 'type';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ResourcePermission properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
