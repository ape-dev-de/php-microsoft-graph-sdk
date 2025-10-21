<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualAppointmentMessageType resources
 *
 * Available select fields:
 */
class VirtualAppointmentMessageTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualAppointmentMessageType
     */

    /**
     * Select specific VirtualAppointmentMessageType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
