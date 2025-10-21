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
    /**
     * Available select fields for DriveRecipient
     */
    public const FIELD_ALIAS = 'alias';
    public const FIELD_EMAIL = 'email';
    public const FIELD_OBJECT_ID = 'objectId';

    /**
     * Select specific DriveRecipient properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
