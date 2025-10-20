<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationSubmissionIndividualRecipient resources
 *
 * Available select fields:
 * - userId
 */
class EducationSubmissionIndividualRecipientQueryOptions extends QueryOptions
{
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific EducationSubmissionIndividualRecipient properties
     * 
     * @param array<string> $select Use EducationSubmissionIndividualRecipientQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
