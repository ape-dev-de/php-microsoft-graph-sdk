<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Channel
 */
class Channel
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Read only. Timestamp at which the channel was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Optional textual description for the channel. */
        public ?string $description = null,
        /** Channel name as it will appear to the user in Microsoft Teams. The maximum length is 50 characters. */
        public ?string $displayName = null,
        /** The email address for sending messages to the channel. Read-only. */
        public ?string $email = null,
        /** Indicates whether the channel is archived. Read-only. */
        public ?bool $isArchived = null,
        /** Indicates whether the channel should be marked as recommended for all members of the team to show in their channel list. Note: All recommended channels automatically show in the channels list for education and frontline worker users. The property can only be set programmatically via the Create team method. The default value is false. */
        public ?bool $isFavoriteByDefault = null,
        /** The type of the channel. Can be set during creation and can''t be changed. The possible values are: standard, private, unknownFutureValue, shared. The default value is standard. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: shared. */
        public ?string $membershipType = null,
        /** Contains summary information about the channel, including number of owners, members, guests, and an indicator for members from other tenants. The summary property will only be returned if it is specified in the $select clause of the Get channel method. */
        public ?string $summary = null,
        /** The ID of the Microsoft Entra tenant. */
        public ?string $tenantId = null,
        /** A hyperlink that will go to the channel in Microsoft Teams. This is the URL that you get when you right-click a channel in Microsoft Teams and select Get link to channel. This URL should be treated as an opaque blob, and not parsed. Read-only. */
        public ?string $webUrl = null,
        /** A collection of membership records associated with the channel, including both direct and indirect members of shared channels. */
        public array $allMembers = [],
        /** Metadata for the location where the channel's files are stored. */
        public ?string $filesFolder = null,
        /** A collection of membership records associated with the channel. */
        public array $members = [],
        /** A collection of all the messages in the channel. A navigation property. Nullable. */
        public array $messages = [],
        /** A collection of teams with which a channel is shared. */
        public array $sharedWithTeams = [],
        /** @var string[] A collection of all the tabs in the channel. A navigation property. */
        public array $tabs = []
    ) {}
}
