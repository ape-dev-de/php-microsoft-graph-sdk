<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedEBook
 */
class ManagedEBook
{
    /**
     * The date and time when the eBook file was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Description.
     */
    private ?string $description;

    /**
     * Name of the eBook.
     */
    private ?string $displayName;

    /**
     * The more information Url.
     */
    private ?string $informationUrl;

    /**
     * Book cover.
     */
    private ?string $largeCover;

    /**
     * The date and time when the eBook was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The privacy statement Url.
     */
    private ?string $privacyInformationUrl;

    /**
     * The date and time when the eBook was published.
     */
    private ?\DateTimeInterface $publishedDateTime;

    /**
     * Publisher.
     */
    private ?string $publisher;

    /**
     * The list of assignments for this eBook.
     */
    private array $assignments = [];

    /**
     * The list of installation states for this eBook.
     */
    private array $deviceStates = [];

    /**
     * Mobile App Install Summary.
     */
    private ?string $installSummary;

    /**
     * An abstract class containing the base properties for Managed eBook.
     * @var string[]
     */
    private array $userStateSummary = [];


    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getInformationUrl(): ?string
    {
        return $this->informationUrl;
    }

    public function setInformationUrl(?string $informationUrl): self
    {
        $this->informationUrl = $informationUrl;
        return $this;
    }

    public function getLargeCover(): ?string
    {
        return $this->largeCover;
    }

    public function setLargeCover(?string $largeCover): self
    {
        $this->largeCover = $largeCover;
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

    public function getPrivacyInformationUrl(): ?string
    {
        return $this->privacyInformationUrl;
    }

    public function setPrivacyInformationUrl(?string $privacyInformationUrl): self
    {
        $this->privacyInformationUrl = $privacyInformationUrl;
        return $this;
    }

    public function getPublishedDateTime(): ?\DateTimeInterface
    {
        return $this->publishedDateTime;
    }

    public function setPublishedDateTime(?\DateTimeInterface $publishedDateTime): self
    {
        $this->publishedDateTime = $publishedDateTime;
        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(?string $publisher): self
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function getAssignments(): array
    {
        return $this->assignments;
    }

    public function setAssignments(array $assignments): self
    {
        $this->assignments = $assignments;
        return $this;
    }

    public function getDeviceStates(): array
    {
        return $this->deviceStates;
    }

    public function setDeviceStates(array $deviceStates): self
    {
        $this->deviceStates = $deviceStates;
        return $this;
    }

    public function getInstallSummary(): ?string
    {
        return $this->installSummary;
    }

    public function setInstallSummary(?string $installSummary): self
    {
        $this->installSummary = $installSummary;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getUserStateSummary(): array
    {
        return $this->userStateSummary;
    }

    /**
     * @param string[] $userStateSummary
     */
    public function setUserStateSummary(array $userStateSummary): self
    {
        $this->userStateSummary = $userStateSummary;
        return $this;
    }

}
