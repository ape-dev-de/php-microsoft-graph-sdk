<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ShareAction
 */
class ShareAction
{
    public function __construct(
        /** The identities the item was shared with in this action. */
        public array $recipients = []
    ) {}
}
