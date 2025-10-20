<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AgreementFileLocalizationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AgreementFileLocalizationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AgreementFileLocalizationCollectionResponse properties
     * 
     * @param array<string> $select Use AgreementFileLocalizationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
