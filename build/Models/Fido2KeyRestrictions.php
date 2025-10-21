<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2KeyRestrictions
 */
class Fido2KeyRestrictions
{
    public function __construct(
        /** @var string[] A collection of Authenticator Attestation GUIDs. AADGUIDs define key types and manufacturers. */
        public array $aaGuids = [],
        /** Enforcement type. Possible values are: allow, block. */
        public ?string $enforcementType = null,
        /** Determines if the configured key enforcement is enabled. */
        public ?string $isEnforced = null
    ) {}
}
