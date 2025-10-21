<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentClassRecipient resources
 *
 * Available select fields:
 */
class EducationAssignmentClassRecipientQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentClassRecipient
     */

    /**
     * Select specific EducationAssignmentClassRecipient properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
