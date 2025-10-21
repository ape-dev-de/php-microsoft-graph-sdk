<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGitHubOrganizationEvidence
 */
class SecurityGitHubOrganizationEvidence
{
    public function __construct(
        /**  */
        public ?string $company = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?string $email = null,
        /**  */
        public ?string $login = null,
        /**  */
        public ?string $orgId = null,
        /**  */
        public ?string $webUrl = null
    ) {}
}
