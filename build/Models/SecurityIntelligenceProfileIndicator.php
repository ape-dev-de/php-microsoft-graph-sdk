<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIntelligenceProfileIndicator
 */
class SecurityIntelligenceProfileIndicator
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?SecurityIndicatorSource $source = null,
        /**  */
        public ?SecurityArtifact $artifact = null,
        /** Designate when an artifact was first used actively in an attack, when a particular sample was compiled, or if neither of those could be ascertained when the file was first seen in public repositories (for example, VirusTotal, ANY.RUN, Hybrid Analysis) or reported publicly. */
        public ?\DateTimeInterface $firstSeenDateTime = null,
        /** Designate when an artifact was most recently used actively in an attack, when a particular sample was compiled, or if neither of those could be ascertained when the file was first seen in public repositories (for example, VirusTotal, ANY.RUN, Hybrid Analysis) or reported publicly. */
        public ?\DateTimeInterface $lastSeenDateTime = null
    ) {}
}
