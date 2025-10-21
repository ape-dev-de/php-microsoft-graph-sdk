<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MentionAction
 */
class MentionAction
{
    public function __construct(
        /** @var string[] The identities of the users mentioned in this action. */
        public array $mentionees = []
    ) {}
}
