<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationSubmissionResource resources
 *
 * Available select fields:
 * - assignmentResourceUrl
 * - resource
 */
class EducationSubmissionResourceQueryOptions extends QueryOptions
{
    public const FIELD_ASSIGNMENT_RESOURCE_URL = 'assignmentResourceUrl';
    public const FIELD_RESOURCE = 'resource';

    /**
     * Select specific EducationSubmissionResource properties
     * 
     * @param array<string> $select Use EducationSubmissionResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
