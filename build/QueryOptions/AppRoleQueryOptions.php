<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppRole resources
 *
 * Available select fields:
 * - allowedMemberTypes
 * - description
 * - displayName
 * - id
 * - isEnabled
 * - origin
 * - value
 */
class AppRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppRole
     */
    public const FIELD_ALLOWED_MEMBER_TYPES = 'allowedMemberTypes';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ID = 'id';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AppRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
