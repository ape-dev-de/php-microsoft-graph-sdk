<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailFolder
 */
class MailFolder
{
    /**
     * The number of immediate child mailFolders in the current mailFolder.
     */
    private ?float $childFolderCount;

    /**
     * The mailFolder's display name.
     */
    private ?string $displayName;

    /**
     * Indicates whether the mailFolder is hidden. This property can be set only when creating the folder. Find more information in Hidden mail folders.
     */
    private ?bool $isHidden;

    /**
     * The unique identifier for the mailFolder's parent mailFolder.
     */
    private ?string $parentFolderId;

    /**
     * The number of items in the mailFolder.
     */
    private ?float $totalItemCount;

    /**
     * The number of items in the mailFolder marked as unread.
     */
    private ?float $unreadItemCount;

    /**
     * The collection of child folders in the mailFolder.
     */
    private array $childFolders = [];

    /**
     * The collection of rules that apply to the user's Inbox folder.
     */
    private array $messageRules = [];

    /**
     * The collection of messages in the mailFolder.
     */
    private array $messages = [];

    /**
     * The collection of multi-value extended properties defined for the mailFolder. Read-only. Nullable.
     */
    private array $multiValueExtendedProperties = [];

    /**
     * The collection of single-value extended properties defined for the mailFolder. Read-only. Nullable.
     */
    private ?string $singleValueExtendedProperties;

    public function getChildFolderCount(): ?float
    {
        return $this->childFolderCount;
    }

    public function setChildFolderCount(?float $childFolderCount): self
    {
        $this->childFolderCount = $childFolderCount;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIsHidden(): ?bool
    {
        return $this->isHidden;
    }

    public function setIsHidden(?bool $isHidden): self
    {
        $this->isHidden = $isHidden;
        return $this;
    }

    public function getParentFolderId(): ?string
    {
        return $this->parentFolderId;
    }

    public function setParentFolderId(?string $parentFolderId): self
    {
        $this->parentFolderId = $parentFolderId;
        return $this;
    }

    public function getTotalItemCount(): ?float
    {
        return $this->totalItemCount;
    }

    public function setTotalItemCount(?float $totalItemCount): self
    {
        $this->totalItemCount = $totalItemCount;
        return $this;
    }

    public function getUnreadItemCount(): ?float
    {
        return $this->unreadItemCount;
    }

    public function setUnreadItemCount(?float $unreadItemCount): self
    {
        $this->unreadItemCount = $unreadItemCount;
        return $this;
    }

    public function getChildFolders(): array
    {
        return $this->childFolders;
    }

    public function setChildFolders(array $childFolders): self
    {
        $this->childFolders = $childFolders;
        return $this;
    }

    public function getMessageRules(): array
    {
        return $this->messageRules;
    }

    public function setMessageRules(array $messageRules): self
    {
        $this->messageRules = $messageRules;
        return $this;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function setMessages(array $messages): self
    {
        $this->messages = $messages;
        return $this;
    }

    public function getMultiValueExtendedProperties(): array
    {
        return $this->multiValueExtendedProperties;
    }

    public function setMultiValueExtendedProperties(array $multiValueExtendedProperties): self
    {
        $this->multiValueExtendedProperties = $multiValueExtendedProperties;
        return $this;
    }

    public function getSingleValueExtendedProperties(): ?string
    {
        return $this->singleValueExtendedProperties;
    }

    public function setSingleValueExtendedProperties(?string $singleValueExtendedProperties): self
    {
        $this->singleValueExtendedProperties = $singleValueExtendedProperties;
        return $this;
    }

}
