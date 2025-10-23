<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RejectJoinResponse
 */
class RejectJoinResponse
{
    /**  */
    public ?RejectReason $reason = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['reason'])) {
            $this->reason = is_array($data['reason']) ? new RejectReason($data['reason']) : $data['reason'];
        }
    }
}
