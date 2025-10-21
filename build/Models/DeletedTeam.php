<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeletedTeam
 */
class DeletedTeam
{
    public function __construct(
        /** @var string[] The channels that are either shared with this deleted team or created in this deleted team. */
        public array $channels = []
    ) {}
}
