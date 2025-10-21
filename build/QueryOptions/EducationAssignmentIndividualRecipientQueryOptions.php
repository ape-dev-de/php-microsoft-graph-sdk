<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentIndividualRecipient resources
 *
 * Available select fields:
 * - recipients
 */
class EducationAssignmentIndividualRecipientQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentIndividualRecipient
     */
    public const FIELD_RECIPIENTS = 'recipients';

    /**
     * Select specific EducationAssignmentIndividualRecipient properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
