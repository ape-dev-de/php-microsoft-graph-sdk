<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileApp
 */
class MobileApp
{
    /**
     * The date and time the app was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The description of the app.
     */
    private ?string $description;

    /**
     * The developer of the app.
     */
    private ?string $developer;

    /**
     * The admin provided or imported title of the app.
     */
    private ?string $displayName;

    /**
     * The more information Url.
     */
    private ?string $informationUrl;

    /**
     * The value indicating whether the app is marked as featured by the admin.
     */
    private ?bool $isFeatured;

    /**
     * The large icon, to be displayed in the app details and used for upload of the icon.
     */
    private ?string $largeIcon;

    /**
     * The date and time the app was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Notes for the app.
     */
    private ?string $notes;

    /**
     * The owner of the app.
     */
    private ?string $owner;

    /**
     * The privacy statement Url.
     */
    private ?string $privacyInformationUrl;

    /**
     * The publisher of the app.
     */
    private ?string $publisher;

    /**
     */
    private ?string $publishingState;

    /**
     * The list of group assignments for this mobile app.
     */
    private array $assignments = [];

    /**
     * An abstract class containing the base properties for Intune mobile apps. Note: Listing mobile apps with `$expand=assignments` has been deprecated. Instead get the list of apps without the `$expand` query on `assignments`. Then, perform the expansion on individual applications.
     * @var string[]
     */
    private array $categories = [];


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

    public function getDeveloper(): ?string
    {
        return $this->developer;
    }

    public function setDeveloper(?string $developer): self
    {
        $this->developer = $developer;
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

    public function getIsFeatured(): ?bool
    {
        return $this->isFeatured;
    }

    public function setIsFeatured(?bool $isFeatured): self
    {
        $this->isFeatured = $isFeatured;
        return $this;
    }

    public function getLargeIcon(): ?string
    {
        return $this->largeIcon;
    }

    public function setLargeIcon(?string $largeIcon): self
    {
        $this->largeIcon = $largeIcon;
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

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;
        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;
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

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(?string $publisher): self
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function getPublishingState(): ?string
    {
        return $this->publishingState;
    }

    public function setPublishingState(?string $publishingState): self
    {
        $this->publishingState = $publishingState;
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

    /**
     * @return string[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param string[] $categories
     */
    public function setCategories(array $categories): self
    {
        $this->categories = $categories;
        return $this;
    }

}
