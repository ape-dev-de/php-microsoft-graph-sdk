<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsApp
 */
class TeamsApp
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The name of the catalog app provided by the app developer in the Microsoft Teams zip app package. */
        public ?string $displayName = null,
        /** The method of distribution for the app. Read-only. */
        public ?TeamsAppDistributionMethod $distributionMethod = null,
        /** The ID of the catalog provided by the app developer in the Microsoft Teams zip app package. */
        public ?string $externalId = null,
        /** The details for each version of the app. */
        public array $appDefinitions = []
    ) {}
}
