<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TodoTask
 */
class TodoTask
{
    /**
     * The task body that typically contains information about the task.
     */
    private ?string $body;

    /**
     * The date and time when the task body was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: ''2020-01-01T00:00:00Z''.
     */
    private ?\DateTimeInterface $bodyLastModifiedDateTime;

    /**
     * The categories associated with the task. Each category corresponds to the displayName property of an outlookCategory that the user has defined.
     */
    private ?string $categories;

    /**
     * The date and time in the specified time zone that the task was finished.
     */
    private ?string $completedDateTime;

    /**
     * The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: ''2020-01-01T00:00:00Z''.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The date and time in the specified time zone that the task is to be finished.
     */
    private ?string $dueDateTime;

    /**
     * Indicates whether the task has attachments.
     */
    private ?bool $hasAttachments;

    /**
     */
    private ?string $importance;

    /**
     * Set to true if an alert is set to remind the user of the task.
     */
    private ?bool $isReminderOn;

    /**
     * The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: ''2020-01-01T00:00:00Z''.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The recurrence pattern for the task.
     */
    private ?string $recurrence;

    /**
     * The date and time in the specified time zone for a reminder alert of the task to occur.
     */
    private ?string $reminderDateTime;

    /**
     * The date and time in the specified time zone at which the task is scheduled to start.
     */
    private ?string $startDateTime;

    /**
     */
    private ?string $status;

    /**
     * A brief description of the task.
     */
    private ?string $title;

    /**
     * A collection of file attachments for the task.
     */
    private array $attachments = [];

    /**
     */
    private array $attachmentSessions = [];

    /**
     * A collection of checklistItems linked to a task.
     */
    private array $checklistItems = [];

    /**
     * The collection of open extensions defined for the task. Nullable.
     */
    private array $extensions = [];

    /**
     * A collection of resources linked to the task.
     */
    private ?string $linkedResources;

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;
        return $this;
    }

    public function getBodyLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->bodyLastModifiedDateTime;
    }

    public function setBodyLastModifiedDateTime(?\DateTimeInterface $bodyLastModifiedDateTime): self
    {
        $this->bodyLastModifiedDateTime = $bodyLastModifiedDateTime;
        return $this;
    }

    public function getCategories(): ?string
    {
        return $this->categories;
    }

    public function setCategories(?string $categories): self
    {
        $this->categories = $categories;
        return $this;
    }

    public function getCompletedDateTime(): ?string
    {
        return $this->completedDateTime;
    }

    public function setCompletedDateTime(?string $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;
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

    public function getDueDateTime(): ?string
    {
        return $this->dueDateTime;
    }

    public function setDueDateTime(?string $dueDateTime): self
    {
        $this->dueDateTime = $dueDateTime;
        return $this;
    }

    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
    }

    public function setHasAttachments(?bool $hasAttachments): self
    {
        $this->hasAttachments = $hasAttachments;
        return $this;
    }

    public function getImportance(): ?string
    {
        return $this->importance;
    }

    public function setImportance(?string $importance): self
    {
        $this->importance = $importance;
        return $this;
    }

    public function getIsReminderOn(): ?bool
    {
        return $this->isReminderOn;
    }

    public function setIsReminderOn(?bool $isReminderOn): self
    {
        $this->isReminderOn = $isReminderOn;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getRecurrence(): ?string
    {
        return $this->recurrence;
    }

    public function setRecurrence(?string $recurrence): self
    {
        $this->recurrence = $recurrence;
        return $this;
    }

    public function getReminderDateTime(): ?string
    {
        return $this->reminderDateTime;
    }

    public function setReminderDateTime(?string $reminderDateTime): self
    {
        $this->reminderDateTime = $reminderDateTime;
        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getAttachments(): array
    {
        return $this->attachments;
    }

    public function setAttachments(array $attachments): self
    {
        $this->attachments = $attachments;
        return $this;
    }

    public function getAttachmentSessions(): array
    {
        return $this->attachmentSessions;
    }

    public function setAttachmentSessions(array $attachmentSessions): self
    {
        $this->attachmentSessions = $attachmentSessions;
        return $this;
    }

    public function getChecklistItems(): array
    {
        return $this->checklistItems;
    }

    public function setChecklistItems(array $checklistItems): self
    {
        $this->checklistItems = $checklistItems;
        return $this;
    }

    public function getExtensions(): array
    {
        return $this->extensions;
    }

    public function setExtensions(array $extensions): self
    {
        $this->extensions = $extensions;
        return $this;
    }

    public function getLinkedResources(): ?string
    {
        return $this->linkedResources;
    }

    public function setLinkedResources(?string $linkedResources): self
    {
        $this->linkedResources = $linkedResources;
        return $this;
    }

}
