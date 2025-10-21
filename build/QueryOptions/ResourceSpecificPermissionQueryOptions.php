<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourceSpecificPermission resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - id
 * - isEnabled
 * - value
 */
class ResourceSpecificPermissionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResourceSpecificPermission
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ID = 'id';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ResourceSpecificPermission properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
