<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallMediaState
 */
class CallMediaState
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The audio media state. Possible values are: active, inactive, unknownFutureValue.
     * @var MediaState|\stdClass|null
     */
    public mixed $audio = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['audio'])) {
            $this->audio = is_array($data['audio']) ? new MediaState($data['audio']) : $data['audio'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
