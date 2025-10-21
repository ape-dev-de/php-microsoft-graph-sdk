<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceUpdateMessage
 */
class ServiceUpdateMessage
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** More details about service event. This property doesn't support filters. */
        public array $details = [],
        /** The end time of the service event. */
        public ?\DateTimeInterface $endDateTime = null,
        /** The last modified time of the service event. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The start time of the service event. */
        public ?\DateTimeInterface $startDateTime = null,
        /** The title of the service event. */
        public ?string $title = null,
        /** The expected deadline of the action for the message. */
        public ?\DateTimeInterface $actionRequiredByDateTime = null,
        /** The zip file that contains all attachments for a message. */
        public ?string $attachmentsArchive = null,
        /**  */
        public ?ItemBody $body = null,
        /**  */
        public ?ServiceUpdateCategory $category = null,
        /** Indicates whether the message has any attachment. */
        public ?bool $hasAttachments = null,
        /** Indicates whether the message describes a major update for the service. */
        public ?bool $isMajorChange = null,
        /** @var string[] The affected services by the service message. */
        public array $services = [],
        /**  */
        public ?ServiceUpdateSeverity $severity = null,
        /** @var string[] A collection of tags for the service message. Tags are provided by the service team/support team who post the message to tell whether this message contains privacy data, or whether this message is for a service new feature update, and so on. */
        public array $tags = [],
        /** Represents user viewpoints data of the service message. This data includes message status such as whether the user has archived, read, or marked the message as favorite. This property is null when accessed with application permissions. */
        public ?ServiceUpdateMessageViewpoint $viewPoint = null,
        /** A collection of serviceAnnouncementAttachments. */
        public array $attachments = []
    ) {}
}
