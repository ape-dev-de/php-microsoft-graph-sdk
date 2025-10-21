<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SimulationNotification resources
 *
 * Available select fields:
 * - targettedUserType
 */
class SimulationNotificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SimulationNotification
     */
    public const FIELD_TARGETTED_USER_TYPE = 'targettedUserType';

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
