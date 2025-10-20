<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Chat
 */
class Chat
{
    /**
     */
    private ?string $chatType;

    /**
     * Date and time at which the chat was created. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Indicates whether the chat is hidden for all its members. Read-only.
     */
    private ?bool $isHiddenForAllMembers;

    /**
     * Date and time at which the chat was renamed or the list of members was last changed. Read-only.
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     * Represents details about an online meeting. If the chat isn''t associated with an online meeting, the property is empty. Read-only.
     */
    private ?string $onlineMeetingInfo;

    /**
     * The identifier of the tenant in which the chat was created. Read-only.
     */
    private ?string $tenantId;

    /**
     * (Optional) Subject or topic for the chat. Only available for group chats.
     */
    private ?string $topic;

    /**
     * Represents caller-specific information about the chat, such as the last message read date and time. This property is populated only when the request is made in a delegated context.
     */
    private ?string $viewpoint;

    /**
     * The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only.
     */
    private ?string $webUrl;

    /**
     * A collection of all the apps in the chat. Nullable.
     */
    private array $installedApps = [];

    /**
     * Preview of the last message sent in the chat. Null if no messages were sent in the chat. Currently, only the list chats operation supports this property.
     */
    private ?string $lastMessagePreview;

    /**
     * A collection of all the members in the chat. Nullable.
     */
    private array $members = [];

    /**
     * A collection of all the messages in the chat. Nullable.
     */
    private array $messages = [];

    /**
     * A collection of permissions granted to apps for the chat.
     */
    private array $permissionGrants = [];

    /**
     * A collection of all the pinned messages in the chat. Nullable.
     */
    private array $pinnedMessages = [];

    /**
     * A collection of all the tabs in the chat. Nullable.
     */
    private ?string $tabs;

    public function getChatType(): ?string
    {
        return $this->chatType;
    }

    public function setChatType(?string $chatType): self
    {
        $this->chatType = $chatType;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getIsHiddenForAllMembers(): ?bool
    {
        return $this->isHiddenForAllMembers;
    }

    public function setIsHiddenForAllMembers(?bool $isHiddenForAllMembers): self
    {
        $this->isHiddenForAllMembers = $isHiddenForAllMembers;
        return $this;
    }

    public function getLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdatedDateTime;
    }

    public function setLastUpdatedDateTime(?\DateTimeInterface $lastUpdatedDateTime): self
    {
        $this->lastUpdatedDateTime = $lastUpdatedDateTime;
        return $this;
    }

    public function getOnlineMeetingInfo(): ?string
    {
        return $this->onlineMeetingInfo;
    }

    public function setOnlineMeetingInfo(?string $onlineMeetingInfo): self
    {
        $this->onlineMeetingInfo = $onlineMeetingInfo;
        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

    public function getTopic(): ?string
    {
        return $this->topic;
    }

    public function setTopic(?string $topic): self
    {
        $this->topic = $topic;
        return $this;
    }

    public function getViewpoint(): ?string
    {
        return $this->viewpoint;
    }

    public function setViewpoint(?string $viewpoint): self
    {
        $this->viewpoint = $viewpoint;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    public function getInstalledApps(): array
    {
        return $this->installedApps;
    }

    public function setInstalledApps(array $installedApps): self
    {
        $this->installedApps = $installedApps;
        return $this;
    }

    public function getLastMessagePreview(): ?string
    {
        return $this->lastMessagePreview;
    }

    public function setLastMessagePreview(?string $lastMessagePreview): self
    {
        $this->lastMessagePreview = $lastMessagePreview;
        return $this;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function setMembers(array $members): self
    {
        $this->members = $members;
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

    public function getPermissionGrants(): array
    {
        return $this->permissionGrants;
    }

    public function setPermissionGrants(array $permissionGrants): self
    {
        $this->permissionGrants = $permissionGrants;
        return $this;
    }

    public function getPinnedMessages(): array
    {
        return $this->pinnedMessages;
    }

    public function setPinnedMessages(array $pinnedMessages): self
    {
        $this->pinnedMessages = $pinnedMessages;
        return $this;
    }

    public function getTabs(): ?string
    {
        return $this->tabs;
    }

    public function setTabs(?string $tabs): self
    {
        $this->tabs = $tabs;
        return $this;
    }

}
