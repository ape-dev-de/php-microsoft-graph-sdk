<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequestSignatureVerification
 */
class RequestSignatureVerification
{
    public function __construct(
        /** Specifies which weak algorithms are allowed.  The possible values are: rsaSha1, unknownFutureValue. */
        public ?WeakAlgorithms $allowedWeakAlgorithms = null,
        /** Specifies whether signed authentication requests for this application should be required. */
        public ?bool $isSignedRequestRequired = null
    ) {}
}
