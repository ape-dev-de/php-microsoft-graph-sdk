<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityOcrSettings
 */
class SecurityOcrSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether or not OCR is enabled for the case. */
    public ?bool $isEnabled = null;

    /** Maximum image size that will be processed in KB). */
    public ?float $maxImageSize = null;

    /** The timeout duration for the OCR engine. A longer timeout might increase success of OCR, but might add to the total processing time. */
    public ?string $timeout = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['maxImageSize'])) {
            $this->maxImageSize = $data['maxImageSize'];
        }
        if (isset($data['timeout'])) {
            $this->timeout = $data['timeout'];
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
