<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Team
 */
class Team
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** An optional label. Typically describes the data or business sensitivity of the team. Must match one of a preconfigured set in the tenant's directory. */
        public ?string $classification = null,
        /** Timestamp at which the team was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** An optional description for the team. Maximum length: 1,024 characters. */
        public ?string $description = null,
        /** The name of the team. */
        public ?string $displayName = null,
        /** The name of the first channel in the team. This is an optional property, only used during team creation and isn't returned in methods to get and list teams. */
        public ?string $firstChannelName = null,
        /** Settings to configure use of Giphy, memes, and stickers in the team. */
        public ?TeamFunSettings $funSettings = null,
        /** Settings to configure whether guests can create, update, or delete channels in the team. */
        public ?TeamGuestSettings $guestSettings = null,
        /** A unique ID for the team that was used in a few places such as the audit log/Office 365 Management Activity API. */
        public ?string $internalId = null,
        /** Whether this team is in read-only mode. */
        public ?bool $isArchived = null,
        /** Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team. */
        public ?TeamMemberSettings $memberSettings = null,
        /** Settings to configure messaging and mentions in the team. */
        public ?TeamMessagingSettings $messagingSettings = null,
        /** Optional. Indicates whether the team is intended for a particular use case. Each team specialization has access to unique behaviors and experiences targeted to its use case. */
        public ?TeamSpecialization $specialization = null,
        /** Contains summary information about the team, including number of owners, members, and guests. */
        public ?TeamSummary $summary = null,
        /** The ID of the Microsoft Entra tenant. */
        public ?string $tenantId = null,
        /** The visibility of the group and team. Defaults to Public. */
        public ?TeamVisibilityType $visibility = null,
        /** A hyperlink that goes to the team in the Microsoft Teams client. You get this URL when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed. */
        public ?string $webUrl = null,
        /** List of channels either hosted in or shared with the team (incoming channels). */
        public array $allChannels = [],
        /** The collection of channels and messages associated with the team. */
        public array $channels = [],
        /**  */
        public ?Group $group = null,
        /** List of channels shared with the team. */
        public array $incomingChannels = [],
        /** The apps installed in this team. */
        public array $installedApps = [],
        /** Members and owners of the team. */
        public array $members = [],
        /** The async operations that ran or are running on this team. */
        public array $operations = [],
        /** A collection of permissions granted to apps to access the team. */
        public array $permissionGrants = [],
        /** The profile photo for the team. */
        public ?ProfilePhoto $photo = null,
        /** The general channel for the team. */
        public ?Channel $primaryChannel = null,
        /** The schedule of shifts for this team. */
        public ?Schedule $schedule = null,
        /** The tags associated with the team. */
        public array $tags = [],
        /** The template this team was created from. See available templates. */
        public ?TeamsTemplate $template = null
    ) {}
}
