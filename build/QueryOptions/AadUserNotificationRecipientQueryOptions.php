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
    /**
     * Available select fields for AadUserNotificationRecipient
     */
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific AadUserNotificationRecipient properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
