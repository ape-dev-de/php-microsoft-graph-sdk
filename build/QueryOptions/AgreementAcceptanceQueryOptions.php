<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AgreementAcceptance resources
 *
 * Available select fields:
 */
class AgreementAcceptanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AgreementAcceptance
     */

    /**
     * Select specific AgreementAcceptance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
