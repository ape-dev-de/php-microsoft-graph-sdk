<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NotificationDeliveryPreference resources
 *
 * Available select fields:
 */
class NotificationDeliveryPreferenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for NotificationDeliveryPreference
     */

    /**
     * Select specific NotificationDeliveryPreference properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
