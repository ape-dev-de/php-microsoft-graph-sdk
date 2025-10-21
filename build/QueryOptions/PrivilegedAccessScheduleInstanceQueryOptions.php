<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessScheduleInstance resources
 *
 * Available select fields:
 */
class PrivilegedAccessScheduleInstanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessScheduleInstance
     */

    /**
     * Select specific PrivilegedAccessScheduleInstance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
