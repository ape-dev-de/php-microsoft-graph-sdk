<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AgreementFileData resources
 *
 * Available select fields:
 * - data
 */
class AgreementFileDataQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AgreementFileData
     */
    public const FIELD_DATA = 'data';

    /**
     * Select specific AgreementFileData properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
