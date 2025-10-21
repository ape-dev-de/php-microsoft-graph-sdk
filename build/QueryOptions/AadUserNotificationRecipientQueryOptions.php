<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AadUserNotificationRecipient resources
 *
 * Available select fields:
 */
class AadUserNotificationRecipientQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AadUserNotificationRecipient
     */

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
