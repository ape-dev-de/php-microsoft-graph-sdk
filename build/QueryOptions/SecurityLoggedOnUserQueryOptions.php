<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityLoggedOnUser resources
 *
 * Available select fields:
 * - accountName
 * - domainName
 */
class SecurityLoggedOnUserQueryOptions extends QueryOptions
{
    public const FIELD_ACCOUNT_NAME = 'accountName';
    public const FIELD_DOMAIN_NAME = 'domainName';

    /**
     * Select specific SecurityLoggedOnUser properties
     * 
     * @param array<string> $select Use SecurityLoggedOnUserQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
