<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentFailureReason resources
 *
 * Available select fields:
 */
class DeviceEnrollmentFailureReasonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceEnrollmentFailureReason
     */

    /**
     * Select specific DeviceEnrollmentFailureReason properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
