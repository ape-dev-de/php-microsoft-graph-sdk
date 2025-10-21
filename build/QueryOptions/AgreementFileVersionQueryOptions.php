<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AgreementFileVersion resources
 *
 * Available select fields:
 */
class AgreementFileVersionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AgreementFileVersion
     */

    /**
     * Select specific AgreementFileVersion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
