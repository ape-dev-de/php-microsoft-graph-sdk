<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveProtectionUnit resources
 *
 * Available select fields:
 * - directoryObjectId
 * - displayName
 * - email
 */
class DriveProtectionUnitQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DriveProtectionUnit
     */
    public const FIELD_DIRECTORY_OBJECT_ID = 'directoryObjectId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMAIL = 'email';

    /**
     * Select specific DriveProtectionUnit properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
