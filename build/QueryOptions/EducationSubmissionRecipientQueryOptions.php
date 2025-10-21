<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationSubmissionRecipient resources
 *
 * Available select fields:
 */
class EducationSubmissionRecipientQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationSubmissionRecipient
     */

    /**
     * Select specific EducationSubmissionRecipient properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
