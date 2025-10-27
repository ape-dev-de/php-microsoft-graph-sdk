<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicInnerError
 */
class PublicInnerError
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The error code. */
    public ?string $code = null;

    /** 
     * A collection of error details.
     * @var PublicErrorDetail[]
     */
    public array $details = [];

    /** The error message. */
    public ?string $message = null;

    /** The target of the error. */
    public ?string $target = null;


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
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
        if (isset($data['target'])) {
            $this->target = $data['target'];
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
