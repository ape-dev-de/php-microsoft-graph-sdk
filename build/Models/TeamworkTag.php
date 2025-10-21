<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkTag
 */
class TeamworkTag
{
    public function __construct(
        /** The description of the tag as it appears to the user in Microsoft Teams. A teamworkTag can't have more than 200 teamworkTagMembers. */
        public ?string $description = null,
        /** The name of the tag as it appears to the user in Microsoft Teams. */
        public ?string $displayName = null,
        /** The number of users assigned to the tag. */
        public ?float $memberCount = null,
        /** The type of the tag. Default is standard. */
        public ?string $tagType = null,
        /** ID of the team in which the tag is defined. */
        public ?string $teamId = null,
        /** @var string[] Users assigned to the tag. */
        public array $members = []
    ) {}
}
