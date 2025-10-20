<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServicePrincipalRiskDetectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ServicePrincipalRiskDetectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ServicePrincipalRiskDetectionCollectionResponse properties
     * 
     * @param array<string> $select Use ServicePrincipalRiskDetectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
