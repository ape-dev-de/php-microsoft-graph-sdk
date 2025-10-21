<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Channel
 */
class Channel
{
    /**
     * Read only. Timestamp at which the channel was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Optional textual description for the channel.
     */
    private ?string $description;

    /**
     * Channel name as it will appear to the user in Microsoft Teams. The maximum length is 50 characters.
     */
    private ?string $displayName;

    /**
     * The email address for sending messages to the channel. Read-only.
     */
    private ?string $email;

    /**
     * Indicates whether the channel is archived. Read-only.
     */
    private ?bool $isArchived;

    /**
     * Indicates whether the channel should be marked as recommended for all members of the team to show in their channel list. Note: All recommended channels automatically show in the channels list for education and frontline worker users. The property can only be set programmatically via the Create team method. The default value is false.
     */
    private ?bool $isFavoriteByDefault;

    /**
     * The type of the channel. Can be set during creation and can''t be changed. The possible values are: standard, private, unknownFutureValue, shared. The default value is standard. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: shared.
     */
    private ?string $membershipType;

    /**
     * Contains summary information about the channel, including number of owners, members, guests, and an indicator for members from other tenants. The summary property will only be returned if it is specified in the $select clause of the Get channel method.
     */
    private ?string $summary;

    /**
     * The ID of the Microsoft Entra tenant.
     */
    private ?string $tenantId;

    /**
     * A hyperlink that will go to the channel in Microsoft Teams. This is the URL that you get when you right-click a channel in Microsoft Teams and select Get link to channel. This URL should be treated as an opaque blob, and not parsed. Read-only.
     */
    private ?string $webUrl;

    /**
     * A collection of membership records associated with the channel, including both direct and indirect members of shared channels.
     */
    private array $allMembers = [];

    /**
     * Metadata for the location where the channel's files are stored.
     */
    private ?string $filesFolder;

    /**
     * A collection of membership records associated with the channel.
     */
    private array $members = [];

    /**
     * A collection of all the messages in the channel. A navigation property. Nullable.
     */
    private array $messages = [];

    /**
     * A collection of teams with which a channel is shared.
     */
    private array $sharedWithTeams = [];

    /**
     * A collection of all the tabs in the channel. A navigation property.
     * @var string[]
     */
    private array $tabs = [];


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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getIsArchived(): ?bool
    {
        return $this->isArchived;
    }

    public function setIsArchived(?bool $isArchived): self
    {
        $this->isArchived = $isArchived;
        return $this;
    }

    public function getIsFavoriteByDefault(): ?bool
    {
        return $this->isFavoriteByDefault;
    }

    public function setIsFavoriteByDefault(?bool $isFavoriteByDefault): self
    {
        $this->isFavoriteByDefault = $isFavoriteByDefault;
        return $this;
    }

    public function getMembershipType(): ?string
    {
        return $this->membershipType;
    }

    public function setMembershipType(?string $membershipType): self
    {
        $this->membershipType = $membershipType;
        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;
        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    public function getAllMembers(): array
    {
        return $this->allMembers;
    }

    public function setAllMembers(array $allMembers): self
    {
        $this->allMembers = $allMembers;
        return $this;
    }

    public function getFilesFolder(): ?string
    {
        return $this->filesFolder;
    }

    public function setFilesFolder(?string $filesFolder): self
    {
        $this->filesFolder = $filesFolder;
        return $this;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function setMessages(array $messages): self
    {
        $this->messages = $messages;
        return $this;
    }

    public function getSharedWithTeams(): array
    {
        return $this->sharedWithTeams;
    }

    public function setSharedWithTeams(array $sharedWithTeams): self
    {
        $this->sharedWithTeams = $sharedWithTeams;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTabs(): array
    {
        return $this->tabs;
    }

    /**
     * @param string[] $tabs
     */
    public function setTabs(array $tabs): self
    {
        $this->tabs = $tabs;
        return $this;
    }

}
