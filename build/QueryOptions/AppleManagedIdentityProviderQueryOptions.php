<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppleManagedIdentityProvider resources
 *
 * Available select fields:
 * - certificateData
 * - developerId
 * - keyId
 * - serviceId
 */
class AppleManagedIdentityProviderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppleManagedIdentityProvider
     */
    public const FIELD_CERTIFICATE_DATA = 'certificateData';
    public const FIELD_DEVELOPER_ID = 'developerId';
    public const FIELD_KEY_ID = 'keyId';
    public const FIELD_SERVICE_ID = 'serviceId';

    /**
     * Select specific AppleManagedIdentityProvider properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
