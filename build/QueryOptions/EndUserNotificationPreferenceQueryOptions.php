<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EndUserNotificationPreference resources
 *
 * Available select fields:
 */
class EndUserNotificationPreferenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EndUserNotificationPreference
     */

    /**
     * Select specific EndUserNotificationPreference properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
