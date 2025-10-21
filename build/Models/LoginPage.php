<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LoginPage
 */
class LoginPage
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The HTML content of the login page. */
        public ?string $content = null,
        /** Identity of the user who created the login page. */
        public ?EmailIdentity $createdBy = null,
        /** Date and time when the login page was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Description about the login page. */
        public ?string $description = null,
        /** Display name of the login page. */
        public ?string $displayName = null,
        /** The content language of the login page. */
        public ?string $language = null,
        /** Identity of the user who last modified the login page. */
        public ?EmailIdentity $lastModifiedBy = null,
        /** Date and time when the login page was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The source of the content. Possible values are: unknown, global, tenant, unknownFutureValue. */
        public ?SimulationContentSource $source = null,
        /** The login page status. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue. */
        public ?SimulationContentStatus $status = null
    ) {}
}
