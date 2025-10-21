<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentGroupRecipient resources
 *
 * Available select fields:
 */
class EducationAssignmentGroupRecipientQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentGroupRecipient
     */

    /**
     * Select specific EducationAssignmentGroupRecipient properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
