<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AzureCommunicationServicesUserConversationMember resources
 *
 * Available select fields:
 * - azureCommunicationServicesId
 */
class AzureCommunicationServicesUserConversationMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AzureCommunicationServicesUserConversationMember
     */
    public const FIELD_AZURE_COMMUNICATION_SERVICES_ID = 'azureCommunicationServicesId';

    /**
     * Select specific AzureCommunicationServicesUserConversationMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
