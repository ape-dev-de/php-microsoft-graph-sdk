<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApplicationServicePrincipal resources
 *
 * Available select fields:
 * - application
 * - servicePrincipal
 */
class ApplicationServicePrincipalQueryOptions extends QueryOptions
{
    public const FIELD_APPLICATION = 'application';
    public const FIELD_SERVICE_PRINCIPAL = 'servicePrincipal';

    /**
     * Select specific ApplicationServicePrincipal properties
     * 
     * @param array<string> $select Use ApplicationServicePrincipalQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
