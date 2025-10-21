<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClientCertificateAuthentication
 */
class ClientCertificateAuthentication
{
    public function __construct(
        /** The list of certificates uploaded for this API connector. */
        public array $certificateList = []
    ) {}
}
