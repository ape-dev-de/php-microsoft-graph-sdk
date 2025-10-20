<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailboxProtectionUnit resources
 *
 * Available select fields:
 * - directoryObjectId
 * - displayName
 * - email
 */
class MailboxProtectionUnitQueryOptions extends QueryOptions
{
    public const FIELD_DIRECTORY_OBJECT_ID = 'directoryObjectId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMAIL = 'email';

    /**
     * Select specific MailboxProtectionUnit properties
     * 
     * @param array<string> $select Use MailboxProtectionUnitQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
