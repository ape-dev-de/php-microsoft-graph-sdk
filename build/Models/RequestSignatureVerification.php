<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequestSignatureVerification
 */
class RequestSignatureVerification
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Specifies which weak algorithms are allowed.  The possible values are: rsaSha1, unknownFutureValue.
     * @var WeakAlgorithms|\stdClass|null
     */
    public WeakAlgorithms|\stdClass|null $allowedWeakAlgorithms = null;

    /** Specifies whether signed authentication requests for this application should be required. */
    public ?bool $isSignedRequestRequired = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowedWeakAlgorithms'])) {
            $this->allowedWeakAlgorithms = is_array($data['allowedWeakAlgorithms']) ? new WeakAlgorithms($data['allowedWeakAlgorithms']) : $data['allowedWeakAlgorithms'];
        }
        if (isset($data['isSignedRequestRequired'])) {
            $this->isSignedRequestRequired = $data['isSignedRequestRequired'];
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
