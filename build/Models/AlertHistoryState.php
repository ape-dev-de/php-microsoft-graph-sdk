<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlertHistoryState
 */
class AlertHistoryState
{
    public function __construct(
        /**  */
        public ?string $appId = null,
        /**  */
        public ?string $assignedTo = null,
        /** @var string[]  */
        public array $comments = [],
        /**  */
        public ?string $feedback = null,
        /**  */
        public ?string $status = null,
        /**  */
        public ?\DateTimeInterface $updatedDateTime = null,
        /**  */
        public ?string $user = null
    ) {}
}
