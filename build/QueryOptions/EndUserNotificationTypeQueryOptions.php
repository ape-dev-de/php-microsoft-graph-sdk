<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EndUserNotificationType resources
 *
 * Available select fields:
 */
class EndUserNotificationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EndUserNotificationType
     */

    /**
     * Select specific EndUserNotificationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
