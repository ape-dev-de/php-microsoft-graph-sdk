<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventsRoot
 */
class VirtualEventsRoot
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public array $events = [],
        /** A collection of town halls. Nullable. */
        public array $townhalls = [],
        /** @var string[] A collection of webinars. Nullable. */
        public array $webinars = []
    ) {}
}
