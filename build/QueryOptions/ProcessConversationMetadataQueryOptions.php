<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessConversationMetadata resources
 *
 * Available select fields:
 * - accessedResources
 * - parentMessageId
 * - plugins
 */
class ProcessConversationMetadataQueryOptions extends QueryOptions
{
    public const FIELD_ACCESSED_RESOURCES = 'accessedResources';
    public const FIELD_PARENT_MESSAGE_ID = 'parentMessageId';
    public const FIELD_PLUGINS = 'plugins';

    /**
     * Select specific ProcessConversationMetadata properties
     * 
     * @param array<string> $select Use ProcessConversationMetadataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
