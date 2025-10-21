<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGitHubRepoEvidence
 */
class SecurityGitHubRepoEvidence
{
    public function __construct(
        /**  */
        public ?string $baseUrl = null,
        /**  */
        public ?string $login = null,
        /**  */
        public ?string $owner = null,
        /**  */
        public ?string $ownerType = null,
        /**  */
        public ?string $repoId = null
    ) {}
}
