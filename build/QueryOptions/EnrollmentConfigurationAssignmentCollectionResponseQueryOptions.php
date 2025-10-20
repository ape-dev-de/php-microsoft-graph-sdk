<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EnrollmentConfigurationAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EnrollmentConfigurationAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EnrollmentConfigurationAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use EnrollmentConfigurationAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
