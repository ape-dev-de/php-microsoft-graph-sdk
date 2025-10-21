<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EBookInstallSummary resources
 *
 * Available select fields:
 */
class EBookInstallSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EBookInstallSummary
     */

    /**
     * Select specific EBookInstallSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
