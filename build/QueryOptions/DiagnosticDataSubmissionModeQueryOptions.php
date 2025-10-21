<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DiagnosticDataSubmissionMode resources
 *
 * Available select fields:
 */
class DiagnosticDataSubmissionModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DiagnosticDataSubmissionMode
     */

    /**
     * Select specific DiagnosticDataSubmissionMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
