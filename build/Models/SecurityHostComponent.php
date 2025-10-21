<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostComponent
 */
class SecurityHostComponent
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The type of component that was detected (for example, Operating System, Framework, Remote Access, or Server). */
        public ?string $category = null,
        /** The first date and time when Microsoft Defender Threat Intelligence observed this web component. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $firstSeenDateTime = null,
        /** The most recent date and time when Microsoft Defender Threat Intelligence observed this web component. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastSeenDateTime = null,
        /** A name running on the artifact, for example, Microsoft IIS. */
        public ?string $name = null,
        /** The component version running on the artifact, for example, v8.5. This shouldn't be assumed to be strictly numerical. */
        public ?string $version = null,
        /**  */
        public ?string $host = null
    ) {}
}
