<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NotificationDeliveryFrequency resources
 *
 * Available select fields:
 */
class NotificationDeliveryFrequencyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for NotificationDeliveryFrequency
     */

    /**
     * Select specific NotificationDeliveryFrequency properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
