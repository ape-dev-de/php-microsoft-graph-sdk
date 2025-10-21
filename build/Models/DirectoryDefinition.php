<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryDefinition
 */
class DirectoryDefinition
{
    public function __construct(
        /**  */
        public ?string $discoverabilities = null,
        /** Represents the discovery date and time using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $discoveryDateTime = null,
        /** Name of the directory. Must be unique within the synchronization schema. Not nullable. */
        public ?string $name = null,
        /** Collection of objects supported by the directory. */
        public array $objects = [],
        /** Whether this object is read-only. */
        public ?bool $readOnly = null,
        /** Read only value that indicates version discovered. null if discovery hasn't yet occurred. */
        public ?string $version = null
    ) {}
}
