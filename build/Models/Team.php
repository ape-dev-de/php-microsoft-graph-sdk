<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Team
 */
class Team
{
    /**
     * An optional label. Typically describes the data or business sensitivity of the team. Must match one of a preconfigured set in the tenant's directory.
     */
    private ?string $classification;

    /**
     * Timestamp at which the team was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * An optional description for the team. Maximum length: 1,024 characters.
     */
    private ?string $description;

    /**
     * The name of the team.
     */
    private ?string $displayName;

    /**
     * The name of the first channel in the team. This is an optional property, only used during team creation and isn''t returned in methods to get and list teams.
     */
    private ?string $firstChannelName;

    /**
     * Settings to configure use of Giphy, memes, and stickers in the team.
     */
    private ?string $funSettings;

    /**
     * Settings to configure whether guests can create, update, or delete channels in the team.
     */
    private ?string $guestSettings;

    /**
     * A unique ID for the team that was used in a few places such as the audit log/Office 365 Management Activity API.
     */
    private ?string $internalId;

    /**
     * Whether this team is in read-only mode.
     */
    private ?bool $isArchived;

    /**
     * Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
     */
    private ?string $memberSettings;

    /**
     * Settings to configure messaging and mentions in the team.
     */
    private ?string $messagingSettings;

    /**
     * Optional. Indicates whether the team is intended for a particular use case. Each team specialization has access to unique behaviors and experiences targeted to its use case.
     */
    private ?string $specialization;

    /**
     * Contains summary information about the team, including number of owners, members, and guests.
     */
    private ?string $summary;

    /**
     * The ID of the Microsoft Entra tenant.
     */
    private ?string $tenantId;

    /**
     * The visibility of the group and team. Defaults to Public.
     */
    private ?string $visibility;

    /**
     * A hyperlink that goes to the team in the Microsoft Teams client. You get this URL when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
     */
    private ?string $webUrl;

    /**
     * List of channels either hosted in or shared with the team (incoming channels).
     */
    private array $allChannels = [];

    /**
     * The collection of channels and messages associated with the team.
     */
    private array $channels = [];

    /**
     */
    private ?string $group;

    /**
     * List of channels shared with the team.
     */
    private array $incomingChannels = [];

    /**
     * The apps installed in this team.
     */
    private array $installedApps = [];

    /**
     * Members and owners of the team.
     */
    private array $members = [];

    /**
     * The async operations that ran or are running on this team.
     */
    private array $operations = [];

    /**
     * A collection of permissions granted to apps to access the team.
     */
    private array $permissionGrants = [];

    /**
     * The profile photo for the team.
     */
    private ?string $photo;

    /**
     * The general channel for the team.
     */
    private ?string $primaryChannel;

    /**
     * The schedule of shifts for this team.
     */
    private ?string $schedule;

    /**
     * The tags associated with the team.
     */
    private array $tags = [];

    /**
     * The template this team was created from. See available templates.
     */
    private ?string $template;


    public function getClassification(): ?string
    {
        return $this->classification;
    }

    public function setClassification(?string $classification): self
    {
        $this->classification = $classification;
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

    public function getFirstChannelName(): ?string
    {
        return $this->firstChannelName;
    }

    public function setFirstChannelName(?string $firstChannelName): self
    {
        $this->firstChannelName = $firstChannelName;
        return $this;
    }

    public function getFunSettings(): ?string
    {
        return $this->funSettings;
    }

    public function setFunSettings(?string $funSettings): self
    {
        $this->funSettings = $funSettings;
        return $this;
    }

    public function getGuestSettings(): ?string
    {
        return $this->guestSettings;
    }

    public function setGuestSettings(?string $guestSettings): self
    {
        $this->guestSettings = $guestSettings;
        return $this;
    }

    public function getInternalId(): ?string
    {
        return $this->internalId;
    }

    public function setInternalId(?string $internalId): self
    {
        $this->internalId = $internalId;
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

    public function getMemberSettings(): ?string
    {
        return $this->memberSettings;
    }

    public function setMemberSettings(?string $memberSettings): self
    {
        $this->memberSettings = $memberSettings;
        return $this;
    }

    public function getMessagingSettings(): ?string
    {
        return $this->messagingSettings;
    }

    public function setMessagingSettings(?string $messagingSettings): self
    {
        $this->messagingSettings = $messagingSettings;
        return $this;
    }

    public function getSpecialization(): ?string
    {
        return $this->specialization;
    }

    public function setSpecialization(?string $specialization): self
    {
        $this->specialization = $specialization;
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

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(?string $visibility): self
    {
        $this->visibility = $visibility;
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

    public function getAllChannels(): array
    {
        return $this->allChannels;
    }

    public function setAllChannels(array $allChannels): self
    {
        $this->allChannels = $allChannels;
        return $this;
    }

    public function getChannels(): array
    {
        return $this->channels;
    }

    public function setChannels(array $channels): self
    {
        $this->channels = $channels;
        return $this;
    }

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(?string $group): self
    {
        $this->group = $group;
        return $this;
    }

    public function getIncomingChannels(): array
    {
        return $this->incomingChannels;
    }

    public function setIncomingChannels(array $incomingChannels): self
    {
        $this->incomingChannels = $incomingChannels;
        return $this;
    }

    public function getInstalledApps(): array
    {
        return $this->installedApps;
    }

    public function setInstalledApps(array $installedApps): self
    {
        $this->installedApps = $installedApps;
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

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

    public function getPermissionGrants(): array
    {
        return $this->permissionGrants;
    }

    public function setPermissionGrants(array $permissionGrants): self
    {
        $this->permissionGrants = $permissionGrants;
        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;
        return $this;
    }

    public function getPrimaryChannel(): ?string
    {
        return $this->primaryChannel;
    }

    public function setPrimaryChannel(?string $primaryChannel): self
    {
        $this->primaryChannel = $primaryChannel;
        return $this;
    }

    public function getSchedule(): ?string
    {
        return $this->schedule;
    }

    public function setSchedule(?string $schedule): self
    {
        $this->schedule = $schedule;
        return $this;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(?string $template): self
    {
        $this->template = $template;
        return $this;
    }

}
