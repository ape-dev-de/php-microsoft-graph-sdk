<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkforceIntegrationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkforceIntegrationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkforceIntegrationCollectionResponse properties
     * 
     * @param array<string> $select Use WorkforceIntegrationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
