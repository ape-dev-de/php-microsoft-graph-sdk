<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationLinkedObjects
 */
class SynchronizationLinkedObjects
{
    public function __construct(
        /**  */
        public ?string $manager = null,
        /** All group members that you would like to provision. */
        public array $members = [],
        /** @var string[]  */
        public array $owners = []
    ) {}
}
