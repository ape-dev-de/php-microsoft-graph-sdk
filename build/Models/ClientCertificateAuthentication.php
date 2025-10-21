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
     * @var string[]
     */
    private array $certificateList = [];


    /**
     * @return string[]
     */
    public function getCertificateList(): array
    {
        return $this->certificateList;
    }

    /**
     * @param string[] $certificateList
     */
    public function setCertificateList(array $certificateList): self
    {
        $this->certificateList = $certificateList;
        return $this;
    }

}
