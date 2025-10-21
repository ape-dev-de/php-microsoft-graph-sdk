<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailAssessmentRequest resources
 *
 * Available select fields:
 */
class MailAssessmentRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MailAssessmentRequest
     */

    /**
     * Select specific MailAssessmentRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
