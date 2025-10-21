<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommunicationsIdentitySet resources
 *
 * Available select fields:
 * - applicationInstance
 * - assertedIdentity
 * - azureCommunicationServicesUser
 * - encrypted
 * - endpointType
 * - guest
 * - onPremises
 * - phone
 */
class CommunicationsIdentitySetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CommunicationsIdentitySet
     */
    public const FIELD_APPLICATION_INSTANCE = 'applicationInstance';
    public const FIELD_ASSERTED_IDENTITY = 'assertedIdentity';
    public const FIELD_AZURE_COMMUNICATION_SERVICES_USER = 'azureCommunicationServicesUser';
    public const FIELD_ENCRYPTED = 'encrypted';
    public const FIELD_ENDPOINT_TYPE = 'endpointType';
    public const FIELD_GUEST = 'guest';
    public const FIELD_ON_PREMISES = 'onPremises';
    public const FIELD_PHONE = 'phone';

    /**
     * Select specific CommunicationsIdentitySet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
