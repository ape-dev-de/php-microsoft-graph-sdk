<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PositiveReinforcementNotification resources
 *
 * Available select fields:
 */
class PositiveReinforcementNotificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PositiveReinforcementNotification
     */

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
