<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardBreak
 */
class TimeCardBreak
{
    /** ID of the timeCardBreak. */
    public ?string $breakId = null;

    /** 
     * The start event of the timeCardBreak.
     * @var TimeCardEvent|\stdClass|null
     */
    public mixed $end = null;

    /** 
     * Notes about the timeCardBreak.
     * @var ItemBody|\stdClass|null
     */
    public mixed $notes = null;

    /**  */
    public ?TimeCardEvent $start = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['breakId'])) {
            $this->breakId = $data['breakId'];
        }
        if (isset($data['end'])) {
            $this->end = $data['end'];
        }
        if (isset($data['notes'])) {
            $this->notes = $data['notes'];
        }
        if (isset($data['start'])) {
            $this->start = $data['start'];
        }
    }
}
