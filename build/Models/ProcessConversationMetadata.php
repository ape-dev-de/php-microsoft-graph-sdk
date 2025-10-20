<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessConversationMetadata
 */
class ProcessConversationMetadata
{
    /**
     * List of resources (for example, file URLs, web URLs) accessed during the generation of this message (relevant for bot interactions).
     */
    private ?string $accessedResources;

    /**
     * Identifier of the parent message in a threaded conversation, if applicable.
     */
    private ?string $parentMessageId;

    /**
     * List of plugins used during the generation of this message (relevant for AI/bot interactions).
     */
    private ?string $plugins;

    public function getAccessedResources(): ?string
    {
        return $this->accessedResources;
    }

    public function setAccessedResources(?string $accessedResources): self
    {
        $this->accessedResources = $accessedResources;
        return $this;
    }

    public function getParentMessageId(): ?string
    {
        return $this->parentMessageId;
    }

    public function setParentMessageId(?string $parentMessageId): self
    {
        $this->parentMessageId = $parentMessageId;
        return $this;
    }

    public function getPlugins(): ?string
    {
        return $this->plugins;
    }

    public function setPlugins(?string $plugins): self
    {
        $this->plugins = $plugins;
        return $this;
    }

}
