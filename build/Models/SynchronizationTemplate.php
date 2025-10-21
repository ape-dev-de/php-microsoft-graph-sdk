<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationTemplate
 */
class SynchronizationTemplate
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identifier of the application this template belongs to. */
        public ?string $applicationId = null,
        /** true if this template is recommended to be the default for the application. */
        public ?bool $default = null,
        /** Description of the template. */
        public ?string $description = null,
        /** true if this template should appear in the collection of templates available for the application instance (service principal). */
        public ?bool $discoverable = null,
        /** One of the well-known factory tags supported by the synchronization engine. The factoryTag tells the synchronization engine which implementation to use when processing jobs based on this template. */
        public ?string $factoryTag = null,
        /** Additional extension properties. Unless mentioned explicitly, metadata values should not be changed. */
        public array $metadata = [],
        /** Default synchronization schema for the jobs based on this template. */
        public ?SynchronizationSchema $schema = null
    ) {}
}
