<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkNotificationRecipient resources
 *
 * Available select fields:
 */
class TeamworkNotificationRecipientQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkNotificationRecipient
     */

    /**
     * Select specific TeamworkNotificationRecipient properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
