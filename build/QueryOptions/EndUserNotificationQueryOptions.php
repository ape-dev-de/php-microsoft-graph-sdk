<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EndUserNotification resources
 *
 * Available select fields:
 */
class EndUserNotificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EndUserNotification
     */

    /**
     * Select specific EndUserNotification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
