<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentMetadataBase
 */
class ProcessContentMetadataBase
{
    /**
     * Represents the actual content, either as text (textContent) or binary data (binaryContent). Optional if metadata alone is sufficient for policy evaluation. Do not use for contentActivities.
     */
    private ?string $content;

    /**
     * An identifier used to group multiple related content entries (for example, different parts of the same file upload, messages in a conversation).
     */
    private ?string $correlationId;

    /**
     * Required. Timestamp indicating when the original content was created (for example, file creation time, message sent time).
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Required. A unique identifier for this specific content entry within the context of the calling application or enforcement plane (for example, message ID, file path/URL).
     */
    private ?string $identifier;

    /**
     * Required. Indicates if the provided content has been truncated from its original form (for example, due to size limits).
     */
    private ?bool $isTruncated;

    /**
     * The length of the original content in bytes.
     */
    private ?float $length;

    /**
     * Required. Timestamp indicating when the original content was last modified. For ephemeral content like messages, this might be the same as createdDateTime.
     */
    private ?\DateTimeInterface $modifiedDateTime;

    /**
     * Required. A descriptive name for the content (for example, file name, web page title, ''Chat Message'').
     */
    private ?string $name;

    /**
     * A sequence number indicating the order in which content was generated or should be processed, required when correlationId is used.
     */
    private ?string $sequenceNumber;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getCorrelationId(): ?string
    {
        return $this->correlationId;
    }

    public function setCorrelationId(?string $correlationId): self
    {
        $this->correlationId = $correlationId;
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

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    public function getIsTruncated(): ?bool
    {
        return $this->isTruncated;
    }

    public function setIsTruncated(?bool $isTruncated): self
    {
        $this->isTruncated = $isTruncated;
        return $this;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function setLength(?float $length): self
    {
        $this->length = $length;
        return $this;
    }

    public function getModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->modifiedDateTime;
    }

    public function setModifiedDateTime(?\DateTimeInterface $modifiedDateTime): self
    {
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getSequenceNumber(): ?string
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(?string $sequenceNumber): self
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

}
