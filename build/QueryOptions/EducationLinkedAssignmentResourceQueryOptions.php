<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationLinkedAssignmentResource resources
 *
 * Available select fields:
 * - url
 */
class EducationLinkedAssignmentResourceQueryOptions extends QueryOptions
{
    public const FIELD_URL = 'url';

    /**
     * Select specific EducationLinkedAssignmentResource properties
     * 
     * @param array<string> $select Use EducationLinkedAssignmentResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
