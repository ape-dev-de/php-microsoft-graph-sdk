<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserInstallStateSummary resources
 *
 * Available select fields:
 */
class UserInstallStateSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserInstallStateSummary
     */

    /**
     * Select specific UserInstallStateSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
