<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityVendorInformation resources
 *
 * Available select fields:
 * - provider
 * - providerVersion
 * - subProvider
 * - vendor
 */
class SecurityVendorInformationQueryOptions extends QueryOptions
{
    public const FIELD_PROVIDER = 'provider';
    public const FIELD_PROVIDER_VERSION = 'providerVersion';
    public const FIELD_SUB_PROVIDER = 'subProvider';
    public const FIELD_VENDOR = 'vendor';

    /**
     * Select specific SecurityVendorInformation properties
     * 
     * @param array<string> $select Use SecurityVendorInformationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
