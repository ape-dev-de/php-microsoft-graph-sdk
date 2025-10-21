<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessConversationMetadata resources
 *
 * Available select fields:
 */
class ProcessConversationMetadataQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProcessConversationMetadata
     */

    /**
     * Select specific ProcessConversationMetadata properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
