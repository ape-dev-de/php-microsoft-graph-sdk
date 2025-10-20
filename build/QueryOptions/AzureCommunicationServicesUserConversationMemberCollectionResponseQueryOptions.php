<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AzureCommunicationServicesUserConversationMemberCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AzureCommunicationServicesUserConversationMemberCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AzureCommunicationServicesUserConversationMemberCollectionResponse properties
     * 
     * @param array<string> $select Use AzureCommunicationServicesUserConversationMemberCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
