<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceUpdateMessage
 */
class ServiceUpdateMessage
{
    /**
     * The expected deadline of the action for the message.
     */
    private ?\DateTimeInterface $actionRequiredByDateTime;

    /**
     * The zip file that contains all attachments for a message.
     */
    private ?string $attachmentsArchive;

    /**
     */
    private ?string $body;

    /**
     */
    private ?string $category;

    /**
     * Indicates whether the message has any attachment.
     */
    private ?bool $hasAttachments;

    /**
     * Indicates whether the message describes a major update for the service.
     */
    private ?bool $isMajorChange;

    /**
     * The affected services by the service message.
     * @var string[]
     */
    private array $services = [];

    /**
     */
    private ?string $severity;

    /**
     * A collection of tags for the service message. Tags are provided by the service team/support team who post the message to tell whether this message contains privacy data, or whether this message is for a service new feature update, and so on.
     * @var string[]
     */
    private array $tags = [];

    /**
     * Represents user viewpoints data of the service message. This data includes message status such as whether the user has archived, read, or marked the message as favorite. This property is null when accessed with application permissions.
     */
    private ?string $viewPoint;

    /**
     * A collection of serviceAnnouncementAttachments.
     * @var string[]
     */
    private array $attachments = [];


    public function getActionRequiredByDateTime(): ?\DateTimeInterface
    {
        return $this->actionRequiredByDateTime;
    }

    public function setActionRequiredByDateTime(?\DateTimeInterface $actionRequiredByDateTime): self
    {
        $this->actionRequiredByDateTime = $actionRequiredByDateTime;
        return $this;
    }

    public function getAttachmentsArchive(): ?string
    {
        return $this->attachmentsArchive;
    }

    public function setAttachmentsArchive(?string $attachmentsArchive): self
    {
        $this->attachmentsArchive = $attachmentsArchive;
        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;
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

    public function getIsMajorChange(): ?bool
    {
        return $this->isMajorChange;
    }

    public function setIsMajorChange(?bool $isMajorChange): self
    {
        $this->isMajorChange = $isMajorChange;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getServices(): array
    {
        return $this->services;
    }

    /**
     * @param string[] $services
     */
    public function setServices(array $services): self
    {
        $this->services = $services;
        return $this;
    }

    public function getSeverity(): ?string
    {
        return $this->severity;
    }

    public function setSeverity(?string $severity): self
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    public function getViewPoint(): ?string
    {
        return $this->viewPoint;
    }

    public function setViewPoint(?string $viewPoint): self
    {
        $this->viewPoint = $viewPoint;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     * @param string[] $attachments
     */
    public function setAttachments(array $attachments): self
    {
        $this->attachments = $attachments;
        return $this;
    }

}
