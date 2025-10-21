<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallEvent
 */
class CallEvent
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $callEventType = null,
        /**  */
        public ?\DateTimeInterface $eventDateTime = null,
        /** @var string[]  */
        public array $participants = []
    ) {}
}
