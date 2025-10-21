<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Endpoint
 */
class Endpoint
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /**  */
        public ?string $capability = null,
        /**  */
        public ?string $providerId = null,
        /**  */
        public ?string $providerName = null,
        /**  */
        public ?string $providerResourceId = null,
        /**  */
        public ?string $uri = null
    ) {}
}
