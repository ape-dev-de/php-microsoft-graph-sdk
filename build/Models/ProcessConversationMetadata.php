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
     * @var string[]
     */
    private array $accessedResources = [];

    /**
     * Identifier of the parent message in a threaded conversation, if applicable.
     */
    private ?string $parentMessageId;

    /**
     * List of plugins used during the generation of this message (relevant for AI/bot interactions).
     * @var string[]
     */
    private array $plugins = [];


    /**
     * @return string[]
     */
    public function getAccessedResources(): array
    {
        return $this->accessedResources;
    }

    /**
     * @param string[] $accessedResources
     */
    public function setAccessedResources(array $accessedResources): self
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

    /**
     * @return string[]
     */
    public function getPlugins(): array
    {
        return $this->plugins;
    }

    /**
     * @param string[] $plugins
     */
    public function setPlugins(array $plugins): self
    {
        $this->plugins = $plugins;
        return $this;
    }

}
