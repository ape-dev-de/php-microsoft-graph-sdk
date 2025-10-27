<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Chat
 */
class Chat
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?ChatType $chatType = null;

    /** Date and time at which the chat was created. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Indicates whether the chat is hidden for all its members. Read-only. */
    public ?bool $isHiddenForAllMembers = null;

    /** Date and time at which the chat was renamed or the list of members was last changed. Read-only. */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /** 
     * Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
     * @var TeamworkOnlineMeetingInfo|\stdClass|null
     */
    public TeamworkOnlineMeetingInfo|\stdClass|null $onlineMeetingInfo = null;

    /** The identifier of the tenant in which the chat was created. Read-only. */
    public ?string $tenantId = null;

    /** (Optional) Subject or topic for the chat. Only available for group chats. */
    public ?string $topic = null;

    /** 
     * Represents caller-specific information about the chat, such as the last message read date and time. This property is populated only when the request is made in a delegated context.
     * @var ChatViewpoint|\stdClass|null
     */
    public ChatViewpoint|\stdClass|null $viewpoint = null;

    /** The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only. */
    public ?string $webUrl = null;

    /** 
     * A collection of all the apps in the chat. Nullable.
     * @var TeamsAppInstallation[]
     */
    public array $installedApps = [];

    /** 
     * Preview of the last message sent in the chat. Null if no messages were sent in the chat. Currently, only the list chats operation supports this property.
     * @var ChatMessageInfo|\stdClass|null
     */
    public ChatMessageInfo|\stdClass|null $lastMessagePreview = null;

    /** 
     * A collection of all the members in the chat. Nullable.
     * @var ConversationMember[]
     */
    public array $members = [];

    /** 
     * A collection of all the messages in the chat. Nullable.
     * @var ChatMessage[]
     */
    public array $messages = [];

    /** 
     * A collection of permissions granted to apps for the chat.
     * @var ResourceSpecificPermissionGrant[]
     */
    public array $permissionGrants = [];

    /** 
     * A collection of all the pinned messages in the chat. Nullable.
     * @var PinnedChatMessageInfo[]
     */
    public array $pinnedMessages = [];

    /** 
     * A collection of all the tabs in the chat. Nullable.
     * @var TeamsTab[]
     */
    public array $tabs = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['chatType'])) {
            $this->chatType = is_string($data['chatType']) ? ChatType::tryFrom($data['chatType']) : $data['chatType'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['isHiddenForAllMembers'])) {
            $this->isHiddenForAllMembers = is_bool($data['isHiddenForAllMembers']) ? $data['isHiddenForAllMembers'] : (bool)$data['isHiddenForAllMembers'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
        if (isset($data['onlineMeetingInfo'])) {
            $this->onlineMeetingInfo = is_array($data['onlineMeetingInfo']) ? new TeamworkOnlineMeetingInfo($data['onlineMeetingInfo']) : $data['onlineMeetingInfo'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['topic'])) {
            $this->topic = $data['topic'];
        }
        if (isset($data['viewpoint'])) {
            $this->viewpoint = is_array($data['viewpoint']) ? new ChatViewpoint($data['viewpoint']) : $data['viewpoint'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['installedApps'])) {
            $this->installedApps = $data['installedApps'];
        }
        if (isset($data['lastMessagePreview'])) {
            $this->lastMessagePreview = is_array($data['lastMessagePreview']) ? new ChatMessageInfo($data['lastMessagePreview']) : $data['lastMessagePreview'];
        }
        if (isset($data['members'])) {
            $this->members = $data['members'];
        }
        if (isset($data['messages'])) {
            $this->messages = $data['messages'];
        }
        if (isset($data['permissionGrants'])) {
            $this->permissionGrants = $data['permissionGrants'];
        }
        if (isset($data['pinnedMessages'])) {
            $this->pinnedMessages = $data['pinnedMessages'];
        }
        if (isset($data['tabs'])) {
            $this->tabs = $data['tabs'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
