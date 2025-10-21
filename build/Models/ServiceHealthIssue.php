<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealthIssue
 */
class ServiceHealthIssue
{
    public function __construct(
        /**  */
        public ?string $classification = null,
        /** The feature name of the service issue. */
        public ?string $feature = null,
        /** The feature group name of the service issue. */
        public ?string $featureGroup = null,
        /** The description of the service issue impact. */
        public ?string $impactDescription = null,
        /** Indicates whether the issue is resolved. */
        public ?bool $isResolved = null,
        /**  */
        public ?string $origin = null,
        /** Collection of historical posts for the service issue. */
        public array $posts = [],
        /** Indicates the service affected by the issue. */
        public ?string $service = null,
        /**  */
        public ?string $status = null
    ) {}
}
