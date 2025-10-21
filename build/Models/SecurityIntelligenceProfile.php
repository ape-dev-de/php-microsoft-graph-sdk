<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIntelligenceProfile
 */
class SecurityIntelligenceProfile
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** @var string[] A list of commonly-known aliases for the threat intelligence included in the intelligenceProfile. */
        public array $aliases = [],
        /** The country/region of origin for the given actor or threat associated with this intelligenceProfile. */
        public array $countriesOrRegionsOfOrigin = [],
        /**  */
        public ?string $description = null,
        /** The date and time when this intelligenceProfile was first active. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $firstActiveDateTime = null,
        /**  */
        public ?string $kind = null,
        /**  */
        public ?string $summary = null,
        /** @var string[] Known targets related to this intelligenceProfile. */
        public array $targets = [],
        /** The title of this intelligenceProfile. */
        public ?string $title = null,
        /** Formatted information featuring a description of the distinctive tactics, techniques, and procedures (TTP) of the group, followed by a list of all known custom, commodity, and publicly available implants used by the group. */
        public ?string $tradecraft = null,
        /** Includes an assemblage of high-fidelity network indicators of compromise. */
        public array $indicators = []
    ) {}
}
