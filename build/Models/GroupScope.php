<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupScope
 */
class GroupScope
{
    /** The identifier for the scope. This could be a user ID, group ID, or a keyword like 'All' for tenant scope. */
    public ?string $identity = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['identity'])) {
            $this->identity = $data['identity'];
        }
    }
}
