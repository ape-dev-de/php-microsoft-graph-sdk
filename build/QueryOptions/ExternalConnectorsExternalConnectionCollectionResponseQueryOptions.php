<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalConnectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalConnectorsExternalConnectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsExternalConnectionCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalConnectorsExternalConnectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
