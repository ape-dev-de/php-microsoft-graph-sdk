<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemActionStat
 */
class ItemActionStat
{
    /** The number of times the action took place. Read-only. */
    public ?float $actionCount = null;

    /** The number of distinct actors that performed the action. Read-only. */
    public ?float $actorCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['actionCount'])) {
            $this->actionCount = $data['actionCount'];
        }
        if (isset($data['actorCount'])) {
            $this->actorCount = $data['actorCount'];
        }
    }
}
