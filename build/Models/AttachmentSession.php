<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttachmentSession
 */
class AttachmentSession
{
    /**
     * The content streams that are uploaded.
     */
    private ?string $content;

    /**
     * The date and time in UTC when the upload session will expire. The complete file must be uploaded before this expiration time is reached.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Indicates a single value {start} that represents the location in the file where the next upload should begin.
     * @var string[]
     */
    private array $nextExpectedRanges = [];


    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getNextExpectedRanges(): array
    {
        return $this->nextExpectedRanges;
    }

    /**
     * @param string[] $nextExpectedRanges
     */
    public function setNextExpectedRanges(array $nextExpectedRanges): self
    {
        $this->nextExpectedRanges = $nextExpectedRanges;
        return $this;
    }

}
