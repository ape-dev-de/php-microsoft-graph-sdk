<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionProxiedDomainCollection resources
 *
 * Available select fields:
 * - displayName
 * - proxiedDomains
 */
class WindowsInformationProtectionProxiedDomainCollectionQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_PROXIED_DOMAINS = 'proxiedDomains';

    /**
     * Select specific WindowsInformationProtectionProxiedDomainCollection properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionProxiedDomainCollectionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
