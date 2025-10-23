<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceUpdateMessage
 */
class ServiceUpdateMessage
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * More details about service event. This property doesn't support filters.
     * @var KeyValuePair[]
     */
    public array $details = [];

    /** The end time of the service event. */
    public ?\DateTimeInterface $endDateTime = null;

    /** The last modified time of the service event. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The start time of the service event. */
    public ?\DateTimeInterface $startDateTime = null;

    /** The title of the service event. */
    public ?string $title = null;

    /** The expected deadline of the action for the message. */
    public ?\DateTimeInterface $actionRequiredByDateTime = null;

    /** The zip file that contains all attachments for a message. */
    public ?string $attachmentsArchive = null;

    /**  */
    public ?ItemBody $body = null;

    /**  */
    public ?ServiceUpdateCategory $category = null;

    /** Indicates whether the message has any attachment. */
    public ?bool $hasAttachments = null;

    /** Indicates whether the message describes a major update for the service. */
    public ?bool $isMajorChange = null;

    /** 
     * The affected services by the service message.
     * @var string[]
     */
    public array $services = [];

    /**  */
    public ?ServiceUpdateSeverity $severity = null;

    /** 
     * A collection of tags for the service message. Tags are provided by the service team/support team who post the message to tell whether this message contains privacy data, or whether this message is for a service new feature update, and so on.
     * @var string[]
     */
    public array $tags = [];

    /** 
     * Represents user viewpoints data of the service message. This data includes message status such as whether the user has archived, read, or marked the message as favorite. This property is null when accessed with application permissions.
     * @var ServiceUpdateMessageViewpoint|\stdClass|null
     */
    public mixed $viewPoint = null;

    /** 
     * A collection of serviceAnnouncementAttachments.
     * @var ServiceAnnouncementAttachment[]
     */
    public array $attachments = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['actionRequiredByDateTime'])) {
            $this->actionRequiredByDateTime = is_string($data['actionRequiredByDateTime']) ? new \DateTimeImmutable($data['actionRequiredByDateTime']) : $data['actionRequiredByDateTime'];
        }
        if (isset($data['attachmentsArchive'])) {
            $this->attachmentsArchive = $data['attachmentsArchive'];
        }
        if (isset($data['body'])) {
            $this->body = is_array($data['body']) ? new ItemBody($data['body']) : $data['body'];
        }
        if (isset($data['category'])) {
            $this->category = is_array($data['category']) ? new ServiceUpdateCategory($data['category']) : $data['category'];
        }
        if (isset($data['hasAttachments'])) {
            $this->hasAttachments = $data['hasAttachments'];
        }
        if (isset($data['isMajorChange'])) {
            $this->isMajorChange = $data['isMajorChange'];
        }
        if (isset($data['services'])) {
            $this->services = $data['services'];
        }
        if (isset($data['severity'])) {
            $this->severity = is_array($data['severity']) ? new ServiceUpdateSeverity($data['severity']) : $data['severity'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['viewPoint'])) {
            $this->viewPoint = is_array($data['viewPoint']) ? new ServiceUpdateMessageViewpoint($data['viewPoint']) : $data['viewPoint'];
        }
        if (isset($data['attachments'])) {
            $this->attachments = $data['attachments'];
        }
    }
}
