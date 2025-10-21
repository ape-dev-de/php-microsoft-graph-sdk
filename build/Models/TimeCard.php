<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCard
 */
class TimeCard
{
    public function __construct(
        /** The list of breaks associated with the timeCard. */
        public array $breaks = [],
        /** The clock-in event of the timeCard. */
        public ?string $clockInEvent = null,
        /** The clock-out event of the timeCard. */
        public ?string $clockOutEvent = null,
        /** Indicates whether this timeCard entry is confirmed. Possible values are: none, user, manager, unknownFutureValue. */
        public ?string $confirmedBy = null,
        /** Notes about the timeCard. */
        public ?string $notes = null,
        /** The original timeCardEntry of the timeCard before it was edited. */
        public ?string $originalEntry = null,
        /** The current state of the timeCard during its life cycle. The possible values are: clockedIn, onBreak, clockedOut, unknownFutureValue. */
        public ?string $state = null,
        /** User ID to which the timeCard belongs. */
        public ?string $userId = null
    ) {}
}
