<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeRuleMembers
 */
class AttributeRuleMembers
{
    /** A description of the membership rule. */
    public ?string $description = null;

    /** Determines the allowed target users for this policy. For more information about the syntax of the membership rule, see Membership Rules syntax. */
    public ?string $membershipRule = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['membershipRule'])) {
            $this->membershipRule = $data['membershipRule'];
        }
    }
}
