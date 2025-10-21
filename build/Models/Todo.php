<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Todo
 */
class Todo
{
    public function __construct(
        /** @var string[] The task lists in the users mailbox. */
        public array $lists = []
    ) {}
}
