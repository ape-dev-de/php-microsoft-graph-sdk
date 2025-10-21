<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DefenderPromptForSampleSubmission resources
 *
 * Available select fields:
 */
class DefenderPromptForSampleSubmissionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DefenderPromptForSampleSubmission
     */

    /**
     * Select specific DefenderPromptForSampleSubmission properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
