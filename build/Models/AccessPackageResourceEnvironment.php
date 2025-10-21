<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceEnvironment
 */
class AccessPackageResourceEnvironment
{
    public function __construct(
        /** Connection information of an environment used to connect to a resource. */
        public ?string $connectionInfo = null,
        /** The date and time that this object was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The description of this object. */
        public ?string $description = null,
        /** The display name of this object. */
        public ?string $displayName = null,
        /** Determines whether this is default environment or not. It is set to true for all static origin systems, such as Microsoft Entra groups and Microsoft Entra Applications. */
        public ?bool $isDefaultEnvironment = null,
        /** The date and time that this object was last modified. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /** The unique identifier of this environment in the origin system. */
        public ?string $originId = null,
        /** The type of the resource in the origin system, that is, SharePointOnline. Requires $filter (eq). */
        public ?string $originSystem = null,
        /** @var string[] Read-only. Required. */
        public array $resources = []
    ) {}
}
