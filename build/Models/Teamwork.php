<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Teamwork
 */
class Teamwork
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates whether Microsoft Teams is enabled for the organization. */
        public ?bool $isTeamsEnabled = null,
        /** Represents the region of the organization or the tenant. The region value can be any region supported by the Teams payload. The possible values are: Americas, Europe and MiddleEast, Asia Pacific, UAE, Australia, Brazil, Canada, Switzerland, Germany, France, India, Japan, South Korea, Norway, Singapore, United Kingdom, South Africa, Sweden, Qatar, Poland, Italy, Israel, Spain, Mexico, USGov Community Cloud, USGov Community Cloud High, USGov Department of Defense, and China. */
        public ?string $region = null,
        /** A collection of deleted chats. */
        public array $deletedChats = [],
        /** The deleted team. */
        public array $deletedTeams = [],
        /** Represents tenant-wide settings for all Teams apps in the tenant. */
        public ?string $teamsAppSettings = null,
        /** @var string[]  */
        public array $workforceIntegrations = []
    ) {}
}
