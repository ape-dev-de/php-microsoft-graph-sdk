<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppLogCollectionRequest
 */
class AppLogCollectionRequest
{
    /**
     * Time at which the upload log request reached a completed state if not completed yet NULL will be returned.
     */
    private ?\DateTimeInterface $completedDateTime;

    /**
     * List of log folders.
     * @var string[]
     */
    private array $customLogFolders = [];

    /**
     * Indicates error message if any during the upload process.
     */
    private ?string $errorMessage;

    /**
     * Entity for AppLogCollectionRequest contains all logs values.
     */
    private ?string $status;


    public function getCompletedDateTime(): ?\DateTimeInterface
    {
        return $this->completedDateTime;
    }

    public function setCompletedDateTime(?\DateTimeInterface $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCustomLogFolders(): array
    {
        return $this->customLogFolders;
    }

    /**
     * @param string[] $customLogFolders
     */
    public function setCustomLogFolders(array $customLogFolders): self
    {
        $this->customLogFolders = $customLogFolders;
        return $this;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
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

}
