<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EnrollmentConfigurationAssignment resources
 *
 * Available select fields:
 */
class EnrollmentConfigurationAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EnrollmentConfigurationAssignment
     */

    /**
     * Select specific EnrollmentConfigurationAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
