<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EnrollmentConfigurationAssignment resources
 *
 * Available select fields:
 * - target
 */
class EnrollmentConfigurationAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_TARGET = 'target';

    /**
     * Select specific EnrollmentConfigurationAssignment properties
     * 
     * @param array<string> $select Use EnrollmentConfigurationAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
