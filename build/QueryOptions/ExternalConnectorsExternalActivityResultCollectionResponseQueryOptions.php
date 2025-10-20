<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalActivityResultCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalConnectorsExternalActivityResultCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsExternalActivityResultCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalConnectorsExternalActivityResultCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
