<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2KeyRestrictions
 */
class Fido2KeyRestrictions
{
    /** 
     * A collection of Authenticator Attestation GUIDs. AADGUIDs define key types and manufacturers.
     * @var string[]
     */
    public array $aaGuids = [];

    /** 
     * Enforcement type. Possible values are: allow, block.
     * @var Fido2RestrictionEnforcementType|\stdClass|null
     */
    public mixed $enforcementType = null;

    /** Determines if the configured key enforcement is enabled. */
    public ?bool $isEnforced = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['aaGuids'])) {
            $this->aaGuids = $data['aaGuids'];
        }
        if (isset($data['enforcementType'])) {
            $this->enforcementType = is_array($data['enforcementType']) ? new Fido2RestrictionEnforcementType($data['enforcementType']) : $data['enforcementType'];
        }
        if (isset($data['isEnforced'])) {
            $this->isEnforced = $data['isEnforced'];
        }
    }
}
