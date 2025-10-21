<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EnrollmentTroubleshootingEvent resources
 *
 * Available select fields:
 */
class EnrollmentTroubleshootingEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EnrollmentTroubleshootingEvent
     */

    /**
     * Select specific EnrollmentTroubleshootingEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
