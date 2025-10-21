<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostLogonSessionEvidence
 */
class SecurityHostLogonSessionEvidence
{
    public function __construct(
        /**  */
        public ?string $account = null,
        /**  */
        public ?\DateTimeInterface $endUtcDateTime = null,
        /**  */
        public ?string $host = null,
        /**  */
        public ?string $sessionId = null,
        /**  */
        public ?\DateTimeInterface $startUtcDateTime = null
    ) {}
}
