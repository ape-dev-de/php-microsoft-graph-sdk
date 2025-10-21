<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EndUserNotificationDetail resources
 *
 * Available select fields:
 */
class EndUserNotificationDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EndUserNotificationDetail
     */

    /**
     * Select specific EndUserNotificationDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
