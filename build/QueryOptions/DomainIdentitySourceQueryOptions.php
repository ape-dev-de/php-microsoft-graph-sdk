<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DomainIdentitySource resources
 *
 * Available select fields:
 * - displayName
 * - domainName
 */
class DomainIdentitySourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DomainIdentitySource
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DOMAIN_NAME = 'domainName';

    /**
     * Select specific DomainIdentitySource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
