<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClassifcationErrorBase
 */
class ClassifcationErrorBase
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** A service-defined error code string. */
    public ?string $code = null;

    /** 
     * Contains more specific, potentially internal error details.
     * @var ClassificationInnerError|\stdClass|null
     */
    public mixed $innerError = null;

    /** A human-readable representation of the error. */
    public ?string $message = null;

    /** The target of the error (for example, the specific property or item causing the issue). */
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
        if (isset($data['innerError'])) {
            $this->innerError = is_array($data['innerError']) ? new ClassificationInnerError($data['innerError']) : $data['innerError'];
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
