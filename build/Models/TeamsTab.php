<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsTab
 */
class TeamsTab
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Container for custom settings applied to a tab. The tab is considered configured only once this property is set. */
        public ?TeamsTabConfiguration $configuration = null,
        /** Name of the tab. */
        public ?string $displayName = null,
        /** Deep link URL of the tab instance. Read-only. */
        public ?string $webUrl = null,
        /** The application that is linked to the tab. This can't be changed after tab creation. */
        public ?TeamsApp $teamsApp = null
    ) {}
}
