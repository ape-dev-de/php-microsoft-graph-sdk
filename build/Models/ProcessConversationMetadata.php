<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessConversationMetadata
 */
class ProcessConversationMetadata
{
    public function __construct(
        /** @var string[] List of resources (for example, file URLs, web URLs) accessed during the generation of this message (relevant for bot interactions). */
        public array $accessedResources = [],
        /** Identifier of the parent message in a threaded conversation, if applicable. */
        public ?string $parentMessageId = null,
        /** @var string[] List of plugins used during the generation of this message (relevant for AI/bot interactions). */
        public array $plugins = []
    ) {}
}
