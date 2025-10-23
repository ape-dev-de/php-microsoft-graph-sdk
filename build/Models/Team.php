<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Team
 */
class Team
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** An optional label. Typically describes the data or business sensitivity of the team. Must match one of a preconfigured set in the tenant's directory. */
    public ?string $classification = null;

    /** Timestamp at which the team was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** An optional description for the team. Maximum length: 1,024 characters. */
    public ?string $description = null;

    /** The name of the team. */
    public ?string $displayName = null;

    /** The name of the first channel in the team. This is an optional property, only used during team creation and isn't returned in methods to get and list teams. */
    public ?string $firstChannelName = null;

    /** 
     * Settings to configure use of Giphy, memes, and stickers in the team.
     * @var TeamFunSettings|\stdClass|null
     */
    public mixed $funSettings = null;

    /** 
     * Settings to configure whether guests can create, update, or delete channels in the team.
     * @var TeamGuestSettings|\stdClass|null
     */
    public mixed $guestSettings = null;

    /** A unique ID for the team that was used in a few places such as the audit log/Office 365 Management Activity API. */
    public ?string $internalId = null;

    /** Whether this team is in read-only mode. */
    public ?bool $isArchived = null;

    /** 
     * Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
     * @var TeamMemberSettings|\stdClass|null
     */
    public mixed $memberSettings = null;

    /** 
     * Settings to configure messaging and mentions in the team.
     * @var TeamMessagingSettings|\stdClass|null
     */
    public mixed $messagingSettings = null;

    /** 
     * Optional. Indicates whether the team is intended for a particular use case. Each team specialization has access to unique behaviors and experiences targeted to its use case.
     * @var TeamSpecialization|\stdClass|null
     */
    public mixed $specialization = null;

    /** 
     * Contains summary information about the team, including number of owners, members, and guests.
     * @var TeamSummary|\stdClass|null
     */
    public mixed $summary = null;

    /** The ID of the Microsoft Entra tenant. */
    public ?string $tenantId = null;

    /** 
     * The visibility of the group and team. Defaults to Public.
     * @var TeamVisibilityType|\stdClass|null
     */
    public mixed $visibility = null;

    /** A hyperlink that goes to the team in the Microsoft Teams client. You get this URL when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed. */
    public ?string $webUrl = null;

    /** 
     * List of channels either hosted in or shared with the team (incoming channels).
     * @var Channel[]
     */
    public array $allChannels = [];

    /** 
     * The collection of channels and messages associated with the team.
     * @var Channel[]
     */
    public array $channels = [];

    /** 
     * 
     * @var Group|\stdClass|null
     */
    public mixed $group = null;

    /** 
     * List of channels shared with the team.
     * @var Channel[]
     */
    public array $incomingChannels = [];

    /** 
     * The apps installed in this team.
     * @var TeamsAppInstallation[]
     */
    public array $installedApps = [];

    /** 
     * Members and owners of the team.
     * @var ConversationMember[]
     */
    public array $members = [];

    /** 
     * The async operations that ran or are running on this team.
     * @var TeamsAsyncOperation[]
     */
    public array $operations = [];

    /** 
     * A collection of permissions granted to apps to access the team.
     * @var ResourceSpecificPermissionGrant[]
     */
    public array $permissionGrants = [];

    /** 
     * The profile photo for the team.
     * @var ProfilePhoto|\stdClass|null
     */
    public mixed $photo = null;

    /** 
     * The general channel for the team.
     * @var Channel|\stdClass|null
     */
    public mixed $primaryChannel = null;

    /** 
     * The schedule of shifts for this team.
     * @var Schedule|\stdClass|null
     */
    public mixed $schedule = null;

    /** 
     * The tags associated with the team.
     * @var TeamworkTag[]
     */
    public array $tags = [];

    /** 
     * The template this team was created from. See available templates.
     * @var TeamsTemplate|\stdClass|null
     */
    public mixed $template = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['classification'])) {
            $this->classification = $data['classification'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['firstChannelName'])) {
            $this->firstChannelName = $data['firstChannelName'];
        }
        if (isset($data['funSettings'])) {
            $this->funSettings = $data['funSettings'];
        }
        if (isset($data['guestSettings'])) {
            $this->guestSettings = $data['guestSettings'];
        }
        if (isset($data['internalId'])) {
            $this->internalId = $data['internalId'];
        }
        if (isset($data['isArchived'])) {
            $this->isArchived = $data['isArchived'];
        }
        if (isset($data['memberSettings'])) {
            $this->memberSettings = $data['memberSettings'];
        }
        if (isset($data['messagingSettings'])) {
            $this->messagingSettings = $data['messagingSettings'];
        }
        if (isset($data['specialization'])) {
            $this->specialization = $data['specialization'];
        }
        if (isset($data['summary'])) {
            $this->summary = $data['summary'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['visibility'])) {
            $this->visibility = $data['visibility'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['allChannels'])) {
            $this->allChannels = $data['allChannels'];
        }
        if (isset($data['channels'])) {
            $this->channels = $data['channels'];
        }
        if (isset($data['group'])) {
            $this->group = $data['group'];
        }
        if (isset($data['incomingChannels'])) {
            $this->incomingChannels = $data['incomingChannels'];
        }
        if (isset($data['installedApps'])) {
            $this->installedApps = $data['installedApps'];
        }
        if (isset($data['members'])) {
            $this->members = $data['members'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['permissionGrants'])) {
            $this->permissionGrants = $data['permissionGrants'];
        }
        if (isset($data['photo'])) {
            $this->photo = $data['photo'];
        }
        if (isset($data['primaryChannel'])) {
            $this->primaryChannel = $data['primaryChannel'];
        }
        if (isset($data['schedule'])) {
            $this->schedule = $data['schedule'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['template'])) {
            $this->template = $data['template'];
        }
    }
}
