<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AzureCommunicationServicesUserIdentity resources
 *
 * Available select fields:
 * - azureCommunicationServicesResourceId
 */
class AzureCommunicationServicesUserIdentityQueryOptions extends QueryOptions
{
    public const FIELD_AZURE_COMMUNICATION_SERVICES_RESOURCE_ID = 'azureCommunicationServicesResourceId';

    /**
     * Select specific AzureCommunicationServicesUserIdentity properties
     * 
     * @param array<string> $select Use AzureCommunicationServicesUserIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
