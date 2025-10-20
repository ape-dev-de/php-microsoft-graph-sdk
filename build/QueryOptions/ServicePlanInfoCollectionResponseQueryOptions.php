<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServicePlanInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ServicePlanInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ServicePlanInfoCollectionResponse properties
     * 
     * @param array<string> $select Use ServicePlanInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
