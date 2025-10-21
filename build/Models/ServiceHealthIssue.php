<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealthIssue
 */
class ServiceHealthIssue
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** More details about service event. This property doesn't support filters. */
        public array $details = [],
        /** The end time of the service event. */
        public ?\DateTimeInterface $endDateTime = null,
        /** The last modified time of the service event. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The start time of the service event. */
        public ?\DateTimeInterface $startDateTime = null,
        /** The title of the service event. */
        public ?string $title = null,
        /**  */
        public ?ServiceHealthClassificationType $classification = null,
        /** The feature name of the service issue. */
        public ?string $feature = null,
        /** The feature group name of the service issue. */
        public ?string $featureGroup = null,
        /** The description of the service issue impact. */
        public ?string $impactDescription = null,
        /** Indicates whether the issue is resolved. */
        public ?bool $isResolved = null,
        /**  */
        public ?ServiceHealthOrigin $origin = null,
        /** Collection of historical posts for the service issue. */
        public array $posts = [],
        /** Indicates the service affected by the issue. */
        public ?string $service = null,
        /**  */
        public ?ServiceHealthStatus $status = null
    ) {}
}
