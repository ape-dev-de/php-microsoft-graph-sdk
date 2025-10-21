<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintConnector
 */
class PrintConnector
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The connector's version. */
        public ?string $appVersion = null,
        /** The name of the connector. */
        public ?string $displayName = null,
        /** The connector machine's hostname. */
        public ?string $fullyQualifiedDomainName = null,
        /** The physical and/or organizational location of the connector. */
        public ?string $location = null,
        /** The connector machine's operating system version. */
        public ?string $operatingSystem = null,
        /** The DateTimeOffset when the connector was registered. */
        public ?\DateTimeInterface $registeredDateTime = null
    ) {}
}
