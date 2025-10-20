<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SingleServicePrincipal resources
 *
 * Available select fields:
 * - description
 * - servicePrincipalId
 */
class SingleServicePrincipalQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_SERVICE_PRINCIPAL_ID = 'servicePrincipalId';

    /**
     * Select specific SingleServicePrincipal properties
     * 
     * @param array<string> $select Use SingleServicePrincipalQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
