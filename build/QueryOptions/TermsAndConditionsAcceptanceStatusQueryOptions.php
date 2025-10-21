<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermsAndConditionsAcceptanceStatus resources
 *
 * Available select fields:
 */
class TermsAndConditionsAcceptanceStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TermsAndConditionsAcceptanceStatus
     */

    /**
     * Select specific TermsAndConditionsAcceptanceStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
