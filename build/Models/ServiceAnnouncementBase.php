<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceAnnouncementBase
 */
class ServiceAnnouncementBase
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
        public ?string $title = null
    ) {}
}
