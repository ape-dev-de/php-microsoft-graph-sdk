<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationNotification resources
 *
 * Available select fields:
 */
class SimulationNotificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationNotification
     */

    /**
     * Select specific SimulationNotification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
