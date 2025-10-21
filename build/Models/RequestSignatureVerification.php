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
     */
    private ?string $allowedWeakAlgorithms;

    /**
     * Specifies whether signed authentication requests for this application should be required.
     */
    private ?string $isSignedRequestRequired;


    public function getAllowedWeakAlgorithms(): ?string
    {
        return $this->allowedWeakAlgorithms;
    }

    public function setAllowedWeakAlgorithms(?string $allowedWeakAlgorithms): self
    {
        $this->allowedWeakAlgorithms = $allowedWeakAlgorithms;
        return $this;
    }

    public function getIsSignedRequestRequired(): ?string
    {
        return $this->isSignedRequestRequired;
    }

    public function setIsSignedRequestRequired(?string $isSignedRequestRequired): self
    {
        $this->isSignedRequestRequired = $isSignedRequestRequired;
        return $this;
    }

}
