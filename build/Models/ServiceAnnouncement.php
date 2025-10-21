<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceAnnouncement
 */
class ServiceAnnouncement
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** A collection of service health information for tenant. This property is a contained navigation property, it is nullable and readonly. */
        public array $healthOverviews = [],
        /** A collection of service issues for tenant. This property is a contained navigation property, it is nullable and readonly. */
        public array $issues = [],
        /** @var string[] A collection of service messages for tenant. This property is a contained navigation property, it is nullable and readonly. */
        public array $messages = []
    ) {}
}
