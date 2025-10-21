<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RequestSignatureVerification resources
 *
 * Available select fields:
 * - allowedWeakAlgorithms
 * - isSignedRequestRequired
 */
class RequestSignatureVerificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RequestSignatureVerification
     */
    public const FIELD_ALLOWED_WEAK_ALGORITHMS = 'allowedWeakAlgorithms';
    public const FIELD_IS_SIGNED_REQUEST_REQUIRED = 'isSignedRequestRequired';

    /**
     * Select specific RequestSignatureVerification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
