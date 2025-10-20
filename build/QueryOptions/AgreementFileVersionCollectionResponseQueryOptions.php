<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AgreementFileVersionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AgreementFileVersionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AgreementFileVersionCollectionResponse properties
     * 
     * @param array<string> $select Use AgreementFileVersionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
