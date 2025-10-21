<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentRecipient resources
 *
 * Available select fields:
 */
class EducationAssignmentRecipientQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentRecipient
     */

    /**
     * Select specific EducationAssignmentRecipient properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
