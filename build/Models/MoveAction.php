<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MoveAction
 */
class MoveAction
{
    /** The name of the location the item was moved from. */
    public ?string $from = null;

    /** The name of the location the item was moved to. */
    public ?string $to = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['from'])) {
            $this->from = $data['from'];
        }
        if (isset($data['to'])) {
            $this->to = $data['to'];
        }
    }
}
