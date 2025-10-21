<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeltaParticipants
 */
class DeltaParticipants
{
    public function __construct(
        /** The sequence number for the roster update that is used to identify the notification order. */
        public ?float $sequenceNumber = null,
        /** @var string[] The collection of participants that were updated since the last roster update. */
        public array $participants = []
    ) {}
}
