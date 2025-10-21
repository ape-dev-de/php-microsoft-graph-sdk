<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PositiveReinforcementNotification resources
 *
 * Available select fields:
 * - deliveryPreference
 */
class PositiveReinforcementNotificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PositiveReinforcementNotification
     */
    public const FIELD_DELIVERY_PREFERENCE = 'deliveryPreference';

    /**
     * Select specific PositiveReinforcementNotification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
