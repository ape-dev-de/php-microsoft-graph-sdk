<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResultInfo
 */
class ResultInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The result code. */
    public ?float $code = null;

    /** The message. */
    public ?string $message = null;

    /** The result subcode. */
    public ?float $subcode = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['code'])) {
            $this->code = $data['code'];
        }
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
        if (isset($data['subcode'])) {
            $this->subcode = $data['subcode'];
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
