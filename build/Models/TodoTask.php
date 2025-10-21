<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TodoTask
 */
class TodoTask
{
    public function __construct(
        /** The task body that typically contains information about the task. */
        public ?string $body = null,
        /** The date and time when the task body was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: ''2020-01-01T00:00:00Z''. */
        public ?\DateTimeInterface $bodyLastModifiedDateTime = null,
        /** @var string[] The categories associated with the task. Each category corresponds to the displayName property of an outlookCategory that the user has defined. */
        public array $categories = [],
        /** The date and time in the specified time zone that the task was finished. */
        public ?string $completedDateTime = null,
        /** The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: ''2020-01-01T00:00:00Z''. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The date and time in the specified time zone that the task is to be finished. */
        public ?string $dueDateTime = null,
        /** Indicates whether the task has attachments. */
        public ?bool $hasAttachments = null,
        /**  */
        public ?string $importance = null,
        /** Set to true if an alert is set to remind the user of the task. */
        public ?bool $isReminderOn = null,
        /** The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: ''2020-01-01T00:00:00Z''. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The recurrence pattern for the task. */
        public ?string $recurrence = null,
        /** The date and time in the specified time zone for a reminder alert of the task to occur. */
        public ?string $reminderDateTime = null,
        /** The date and time in the specified time zone at which the task is scheduled to start. */
        public ?string $startDateTime = null,
        /**  */
        public ?string $status = null,
        /** A brief description of the task. */
        public ?string $title = null,
        /** A collection of file attachments for the task. */
        public array $attachments = [],
        /**  */
        public array $attachmentSessions = [],
        /** A collection of checklistItems linked to a task. */
        public array $checklistItems = [],
        /** The collection of open extensions defined for the task. Nullable. */
        public array $extensions = [],
        /** @var string[] A collection of resources linked to the task. */
        public array $linkedResources = []
    ) {}
}
