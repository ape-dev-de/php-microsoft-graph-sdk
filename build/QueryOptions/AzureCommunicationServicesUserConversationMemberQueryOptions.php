<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AzureCommunicationServicesUserConversationMember resources
 *
 * Available select fields:
 */
class AzureCommunicationServicesUserConversationMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AzureCommunicationServicesUserConversationMember
     */

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
