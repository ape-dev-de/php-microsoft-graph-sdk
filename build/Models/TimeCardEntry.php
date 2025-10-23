<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardEntry
 */
class TimeCardEntry
{
    /** 
     * The clock-in event of the timeCard.
     * @var TimeCardBreak[]
     */
    public array $breaks = [];

    /** 
     * The clock-out event of the timeCard.
     * @var TimeCardEvent|\stdClass|null
     */
    public mixed $clockInEvent = null;

    /** 
     * The list of breaks associated with the timeCard.
     * @var TimeCardEvent|\stdClass|null
     */
    public mixed $clockOutEvent = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['breaks'])) {
            $this->breaks = $data['breaks'];
        }
        if (isset($data['clockInEvent'])) {
            $this->clockInEvent = $data['clockInEvent'];
        }
        if (isset($data['clockOutEvent'])) {
            $this->clockOutEvent = $data['clockOutEvent'];
        }
    }
}
