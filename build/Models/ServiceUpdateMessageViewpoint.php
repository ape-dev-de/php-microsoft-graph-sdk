<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceUpdateMessageViewpoint
 */
class ServiceUpdateMessageViewpoint
{
    /**
     * Indicates whether the user archived the message.
     */
    private ?bool $isArchived;

    /**
     * Indicates whether the user marked the message as favorite.
     */
    private ?bool $isFavorited;

    /**
     * Indicates whether the user read the message.
     */
    private ?string $isRead;


    public function getIsArchived(): ?bool
    {
        return $this->isArchived;
    }

    public function setIsArchived(?bool $isArchived): self
    {
        $this->isArchived = $isArchived;
        return $this;
    }

    public function getIsFavorited(): ?bool
    {
        return $this->isFavorited;
    }

    public function setIsFavorited(?bool $isFavorited): self
    {
        $this->isFavorited = $isFavorited;
        return $this;
    }

    public function getIsRead(): ?string
    {
        return $this->isRead;
    }

    public function setIsRead(?string $isRead): self
    {
        $this->isRead = $isRead;
        return $this;
    }

}
