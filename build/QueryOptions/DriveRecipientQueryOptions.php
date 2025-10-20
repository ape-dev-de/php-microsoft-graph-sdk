<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveRecipient resources
 *
 * Available select fields:
 * - alias
 * - email
 * - objectId
 */
class DriveRecipientQueryOptions extends QueryOptions
{
    public const FIELD_ALIAS = 'alias';
    public const FIELD_EMAIL = 'email';
    public const FIELD_OBJECT_ID = 'objectId';

    /**
     * Select specific DriveRecipient properties
     * 
     * @param array<string> $select Use DriveRecipientQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
