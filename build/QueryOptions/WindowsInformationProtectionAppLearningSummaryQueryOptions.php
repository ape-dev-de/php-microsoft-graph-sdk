<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionAppLearningSummary resources
 *
 * Available select fields:
 */
class WindowsInformationProtectionAppLearningSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionAppLearningSummary
     */

    /**
     * Select specific WindowsInformationProtectionAppLearningSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
