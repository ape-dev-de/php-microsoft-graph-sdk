<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Channel
 */
class Channel
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Read only. Timestamp at which the channel was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Optional textual description for the channel. */
    public ?string $description = null;

    /** Channel name as it will appear to the user in Microsoft Teams. The maximum length is 50 characters. */
    public ?string $displayName = null;

    /** The email address for sending messages to the channel. Read-only. */
    public ?string $email = null;

    /** Indicates whether the channel is archived. Read-only. */
    public ?bool $isArchived = null;

    /** Indicates whether the channel should be marked as recommended for all members of the team to show in their channel list. Note: All recommended channels automatically show in the channels list for education and frontline worker users. The property can only be set programmatically via the Create team method. The default value is false. */
    public ?bool $isFavoriteByDefault = null;

    /** 
     * The type of the channel. Can be set during creation and can't be changed. The possible values are: standard, private, unknownFutureValue, shared. The default value is standard. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: shared.
     * @var ChannelMembershipType|\stdClass|null
     */
    public ChannelMembershipType|\stdClass|null $membershipType = null;

    /** 
     * Contains summary information about the channel, including number of owners, members, guests, and an indicator for members from other tenants. The summary property will only be returned if it is specified in the $select clause of the Get channel method.
     * @var ChannelSummary|\stdClass|null
     */
    public ChannelSummary|\stdClass|null $summary = null;

    /** The ID of the Microsoft Entra tenant. */
    public ?string $tenantId = null;

    /** A hyperlink that will go to the channel in Microsoft Teams. This is the URL that you get when you right-click a channel in Microsoft Teams and select Get link to channel. This URL should be treated as an opaque blob, and not parsed. Read-only. */
    public ?string $webUrl = null;

    /** 
     * A collection of membership records associated with the channel, including both direct and indirect members of shared channels.
     * @var ConversationMember[]
     */
    public array $allMembers = [];

    /** 
     * Metadata for the location where the channel's files are stored.
     * @var DriveItem|\stdClass|null
     */
    public DriveItem|\stdClass|null $filesFolder = null;

    /** 
     * A collection of membership records associated with the channel.
     * @var ConversationMember[]
     */
    public array $members = [];

    /** 
     * A collection of all the messages in the channel. A navigation property. Nullable.
     * @var ChatMessage[]
     */
    public array $messages = [];

    /** 
     * A collection of teams with which a channel is shared.
     * @var SharedWithChannelTeamInfo[]
     */
    public array $sharedWithTeams = [];

    /** 
     * A collection of all the tabs in the channel. A navigation property.
     * @var TeamsTab[]
     */
    public array $tabs = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['isArchived'])) {
            $this->isArchived = $data['isArchived'];
        }
        if (isset($data['isFavoriteByDefault'])) {
            $this->isFavoriteByDefault = $data['isFavoriteByDefault'];
        }
        if (isset($data['membershipType'])) {
            $this->membershipType = is_array($data['membershipType']) ? new ChannelMembershipType($data['membershipType']) : $data['membershipType'];
        }
        if (isset($data['summary'])) {
            $this->summary = is_array($data['summary']) ? new ChannelSummary($data['summary']) : $data['summary'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['allMembers'])) {
            $this->allMembers = $data['allMembers'];
        }
        if (isset($data['filesFolder'])) {
            $this->filesFolder = is_array($data['filesFolder']) ? new DriveItem($data['filesFolder']) : $data['filesFolder'];
        }
        if (isset($data['members'])) {
            $this->members = $data['members'];
        }
        if (isset($data['messages'])) {
            $this->messages = $data['messages'];
        }
        if (isset($data['sharedWithTeams'])) {
            $this->sharedWithTeams = $data['sharedWithTeams'];
        }
        if (isset($data['tabs'])) {
            $this->tabs = $data['tabs'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
