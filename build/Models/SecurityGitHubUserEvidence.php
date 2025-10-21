<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGitHubUserEvidence
 */
class SecurityGitHubUserEvidence
{
    public function __construct(
        /**  */
        public ?string $email = null,
        /**  */
        public ?string $login = null,
        /**  */
        public ?string $name = null,
        /**  */
        public ?string $userId = null,
        /**  */
        public ?string $webUrl = null
    ) {}
}
