<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalDomainFederation resources
 *
 * Available select fields:
 * - displayName
 * - domainName
 * - issuerUri
 */
class ExternalDomainFederationQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DOMAIN_NAME = 'domainName';
    public const FIELD_ISSUER_URI = 'issuerUri';

    /**
     * Select specific ExternalDomainFederation properties
     * 
     * @param array<string> $select Use ExternalDomainFederationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
