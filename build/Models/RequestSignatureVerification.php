<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequestSignatureVerification
 */
class RequestSignatureVerification
{
    /** 
     * Specifies which weak algorithms are allowed.  The possible values are: rsaSha1, unknownFutureValue.
     * @var WeakAlgorithms|\stdClass|null
     */
    public mixed $allowedWeakAlgorithms = null;

    /** Specifies whether signed authentication requests for this application should be required. */
    public ?bool $isSignedRequestRequired = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowedWeakAlgorithms'])) {
            $this->allowedWeakAlgorithms = $data['allowedWeakAlgorithms'];
        }
        if (isset($data['isSignedRequestRequired'])) {
            $this->isSignedRequestRequired = $data['isSignedRequestRequired'];
        }
    }
}
