<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermsOfUseContainer
 */
class TermsOfUseContainer
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the current status of a user's response to a company's customizable terms of use agreement. */
        public array $agreementAcceptances = [],
        /** @var string[] Represents a tenant's customizable terms of use agreement that's created and managed with Microsoft Entra ID Governance. */
        public array $agreements = []
    ) {}
}
