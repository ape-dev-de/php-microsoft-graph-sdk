<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityMailboxConfigurationEvidence
 */
class SecurityMailboxConfigurationEvidence
{
    public function __construct(
        /**  */
        public ?string $configurationId = null,
        /**  */
        public ?string $configurationType = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?string $externalDirectoryObjectId = null,
        /**  */
        public ?string $mailboxPrimaryAddress = null,
        /**  */
        public ?string $upn = null
    ) {}
}
