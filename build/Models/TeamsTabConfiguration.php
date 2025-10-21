<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsTabConfiguration
 */
class TeamsTabConfiguration
{
    public function __construct(
        /** Url used for rendering tab contents in Teams. Required. */
        public ?string $contentUrl = null,
        /** Identifier for the entity hosted by the tab provider. */
        public ?string $entityId = null,
        /** Url called by Teams client when a Tab is removed using the Teams Client. */
        public ?string $removeUrl = null,
        /** Url for showing tab contents outside of Teams. */
        public ?string $websiteUrl = null
    ) {}
}
