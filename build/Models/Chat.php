<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Chat
 */
class Chat
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $chatType = null,
        /** Date and time at which the chat was created. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Indicates whether the chat is hidden for all its members. Read-only. */
        public ?bool $isHiddenForAllMembers = null,
        /** Date and time at which the chat was renamed or the list of members was last changed. Read-only. */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /** Represents details about an online meeting. If the chat isn''t associated with an online meeting, the property is empty. Read-only. */
        public ?string $onlineMeetingInfo = null,
        /** The identifier of the tenant in which the chat was created. Read-only. */
        public ?string $tenantId = null,
        /** (Optional) Subject or topic for the chat. Only available for group chats. */
        public ?string $topic = null,
        /** Represents caller-specific information about the chat, such as the last message read date and time. This property is populated only when the request is made in a delegated context. */
        public ?string $viewpoint = null,
        /** The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only. */
        public ?string $webUrl = null,
        /** A collection of all the apps in the chat. Nullable. */
        public array $installedApps = [],
        /** Preview of the last message sent in the chat. Null if no messages were sent in the chat. Currently, only the list chats operation supports this property. */
        public ?string $lastMessagePreview = null,
        /** A collection of all the members in the chat. Nullable. */
        public array $members = [],
        /** A collection of all the messages in the chat. Nullable. */
        public array $messages = [],
        /** A collection of permissions granted to apps for the chat. */
        public array $permissionGrants = [],
        /** A collection of all the pinned messages in the chat. Nullable. */
        public array $pinnedMessages = [],
        /** @var string[] A collection of all the tabs in the chat. Nullable. */
        public array $tabs = []
    ) {}
}
