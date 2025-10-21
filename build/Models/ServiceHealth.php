<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealth
 */
class ServiceHealth
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The service name. Use the list healthOverviews operation to get exact string names for services subscribed by the tenant. */
        public ?string $service = null,
        /**  */
        public ?string $status = null,
        /** @var string[] A collection of issues that happened on the service, with detailed information for each issue. */
        public array $issues = []
    ) {}
}
