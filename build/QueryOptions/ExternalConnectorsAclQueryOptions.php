<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsAcl resources
 *
 * Available select fields:
 * - accessType
 * - type
 * - value
 */
class ExternalConnectorsAclQueryOptions extends QueryOptions
{
    public const FIELD_ACCESS_TYPE = 'accessType';
    public const FIELD_TYPE = 'type';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsAcl properties
     * 
     * @param array<string> $select Use ExternalConnectorsAclQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
