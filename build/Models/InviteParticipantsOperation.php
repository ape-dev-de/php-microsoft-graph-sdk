<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InviteParticipantsOperation
 */
class InviteParticipantsOperation
{
    public function __construct(
        /** @var string[] The participants to invite. */
        public array $participants = []
    ) {}
}
