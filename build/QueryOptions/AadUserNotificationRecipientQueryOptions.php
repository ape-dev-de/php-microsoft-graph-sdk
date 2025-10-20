<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AadUserNotificationRecipient resources
 *
 * Available select fields:
 * - userId
 */
class AadUserNotificationRecipientQueryOptions extends QueryOptions
{
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific AadUserNotificationRecipient properties
     * 
     * @param array<string> $select Use AadUserNotificationRecipientQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
