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
    public const FIELD_DIRECTORY_OBJECT_ID = 'directoryObjectId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMAIL = 'email';

    /**
     * Select specific DriveProtectionUnit properties
     * 
     * @param array<string> $select Use DriveProtectionUnitQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
