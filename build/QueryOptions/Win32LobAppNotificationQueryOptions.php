<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppNotification resources
 *
 * Available select fields:
 */
class Win32LobAppNotificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppNotification
     */

    /**
     * Select specific Win32LobAppNotification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
