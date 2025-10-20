<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsAclCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalConnectorsAclCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsAclCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalConnectorsAclCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
