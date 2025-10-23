<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignmentOrder
 */
class AssignmentOrder
{
    /** 
     * A list of identityUserFlowAttribute object identifiers that determine the order in which attributes should be collected within a user flow.
     * @var string[]
     */
    public array $order = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['order'])) {
            $this->order = $data['order'];
        }
    }
}
