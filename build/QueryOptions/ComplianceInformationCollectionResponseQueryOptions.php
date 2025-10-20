<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ComplianceInformationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ComplianceInformationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ComplianceInformationCollectionResponse properties
     * 
     * @param array<string> $select Use ComplianceInformationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
