<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClientCertificateAuthentication
 */
class ClientCertificateAuthentication
{
    /**
     * The list of certificates uploaded for this API connector.
     */
    private ?string $certificateList;

    public function getCertificateList(): ?string
    {
        return $this->certificateList;
    }

    public function setCertificateList(?string $certificateList): self
    {
        $this->certificateList = $certificateList;
        return $this;
    }

}
