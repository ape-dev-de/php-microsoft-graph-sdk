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
    public const FIELD_RECIPIENTS = 'recipients';

    /**
     * Select specific EducationAssignmentIndividualRecipient properties
     * 
     * @param array<string> $select Use EducationAssignmentIndividualRecipientQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
