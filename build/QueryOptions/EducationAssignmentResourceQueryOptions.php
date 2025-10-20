<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentResource resources
 *
 * Available select fields:
 * - distributeForStudentWork
 * - resource
 */
class EducationAssignmentResourceQueryOptions extends QueryOptions
{
    public const FIELD_DISTRIBUTE_FOR_STUDENT_WORK = 'distributeForStudentWork';
    public const FIELD_RESOURCE = 'resource';

    /**
     * Select specific EducationAssignmentResource properties
     * 
     * @param array<string> $select Use EducationAssignmentResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
