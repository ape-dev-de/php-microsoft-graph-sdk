<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceGroupBasedSubjectSet
 */
class IdentityGovernanceGroupBasedSubjectSet
{
    /** 
     * 
     * @var Group[]
     */
    public array $groups = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['groups'])) {
            $this->groups = $data['groups'];
        }
    }
}
