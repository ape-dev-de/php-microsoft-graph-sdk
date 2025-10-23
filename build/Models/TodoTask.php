<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TodoTask
 */
class TodoTask
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The task body that typically contains information about the task.
     * @var ItemBody|\stdClass|null
     */
    public mixed $body = null;

    /** The date and time when the task body was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'. */
    public ?\DateTimeInterface $bodyLastModifiedDateTime = null;

    /** 
     * The categories associated with the task. Each category corresponds to the displayName property of an outlookCategory that the user has defined.
     * @var string[]
     */
    public array $categories = [];

    /** 
     * The date and time in the specified time zone that the task was finished.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $completedDateTime = null;

    /** The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * The date and time in the specified time zone that the task is to be finished.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $dueDateTime = null;

    /** Indicates whether the task has attachments. */
    public ?bool $hasAttachments = null;

    /**  */
    public ?Importance $importance = null;

    /** Set to true if an alert is set to remind the user of the task. */
    public ?bool $isReminderOn = null;

    /** The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The recurrence pattern for the task.
     * @var PatternedRecurrence|\stdClass|null
     */
    public mixed $recurrence = null;

    /** 
     * The date and time in the specified time zone for a reminder alert of the task to occur.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $reminderDateTime = null;

    /** 
     * The date and time in the specified time zone at which the task is scheduled to start.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $startDateTime = null;

    /**  */
    public ?TaskStatus $status = null;

    /** A brief description of the task. */
    public ?string $title = null;

    /** 
     * A collection of file attachments for the task.
     * @var AttachmentBase[]
     */
    public array $attachments = [];

    /** 
     * 
     * @var AttachmentSession[]
     */
    public array $attachmentSessions = [];

    /** 
     * A collection of checklistItems linked to a task.
     * @var ChecklistItem[]
     */
    public array $checklistItems = [];

    /** 
     * The collection of open extensions defined for the task. Nullable.
     * @var Extension[]
     */
    public array $extensions = [];

    /** 
     * A collection of resources linked to the task.
     * @var LinkedResource[]
     */
    public array $linkedResources = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['body'])) {
            $this->body = $data['body'];
        }
        if (isset($data['bodyLastModifiedDateTime'])) {
            $this->bodyLastModifiedDateTime = $data['bodyLastModifiedDateTime'];
        }
        if (isset($data['categories'])) {
            $this->categories = $data['categories'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = $data['completedDateTime'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['dueDateTime'])) {
            $this->dueDateTime = $data['dueDateTime'];
        }
        if (isset($data['hasAttachments'])) {
            $this->hasAttachments = $data['hasAttachments'];
        }
        if (isset($data['importance'])) {
            $this->importance = $data['importance'];
        }
        if (isset($data['isReminderOn'])) {
            $this->isReminderOn = $data['isReminderOn'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['recurrence'])) {
            $this->recurrence = $data['recurrence'];
        }
        if (isset($data['reminderDateTime'])) {
            $this->reminderDateTime = $data['reminderDateTime'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = $data['startDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['attachments'])) {
            $this->attachments = $data['attachments'];
        }
        if (isset($data['attachmentSessions'])) {
            $this->attachmentSessions = $data['attachmentSessions'];
        }
        if (isset($data['checklistItems'])) {
            $this->checklistItems = $data['checklistItems'];
        }
        if (isset($data['extensions'])) {
            $this->extensions = $data['extensions'];
        }
        if (isset($data['linkedResources'])) {
            $this->linkedResources = $data['linkedResources'];
        }
    }
}
