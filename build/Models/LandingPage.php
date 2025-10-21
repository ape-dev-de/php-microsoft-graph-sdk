<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LandingPage
 */
class LandingPage
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identity of the user who created the landing page. */
        public ?string $createdBy = null,
        /** Date and time when the landing page was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Description of the landing page as defined by the user. */
        public ?string $description = null,
        /** The display name of the landing page. */
        public ?string $displayName = null,
        /** Email identity of the user who last modified the landing page. */
        public ?string $lastModifiedBy = null,
        /** Date and time when the landing page was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Content locale. */
        public ?string $locale = null,
        /** The source of the content. Possible values are: unknown, global, tenant, unknownFutureValue. */
        public ?string $source = null,
        /** The status of the simulation. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue. */
        public ?string $status = null,
        /** @var string[] Supported locales. */
        public array $supportedLocales = [],
        /** The detail information for a landing page associated with a simulation during its creation. */
        public array $details = []
    ) {}
}
